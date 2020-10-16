from __future__ import print_function

import argparse
import json
import pprint
import requests
import sys
import urllib
import mysql.connector


# This client code can run on Python 2.x or 3.x.  Your imports can be
# simpler if you only need one of those.
try:
    # For Python 3.0 and later
    from urllib.error import HTTPError
    from urllib.parse import quote
    from urllib.parse import urlencode
except ImportError:
    # Fall back to Python 2's urllib2 and urllib
    
    from urllib import quote
    from urllib import urlencode


# Yelp Fusion no longer uses OAuth as of December 7, 2017.
# You no longer need to provide Client ID to fetch Data
# It now uses private keys to authenticate requests (API Key)
# You can find it on
# https://www.yelp.com/developers/v3/manage_app
API_KEY= "TZc_70IDfGS_LgeX2YWRAC32XHW8BFdZl_W_nSeQL4O1QSBvtoTAV3-Vzf6xGMTc_aQL5cfxu1BpSwWAAjc7vDZCpfZ6cu7jKNF-xLheZy-K68GPAcEVn2_uuQlgX3Yx"


# API constants, you shouldn't have to change these.
API_HOST = 'https://api.yelp.com'
SEARCH_PATH = '/v3/businesses/search'
BUSINESS_PATH = '/v3/businesses/'  # Business ID will come after slash.


# Defaults for our simple example.
DEFAULT_TERM = 'Hotel'
# DEFAULT_LOCATION = 'Charleston,SC'
DEFAULT_LOCATION = 'Philadelphia, PA'
SEARCH_LIMIT = 8


def request(host, path, api_key, url_params=None):
    """Given your API_KEY, send a GET request to the API.

    Args:
        host (str): The domain host of the API.
        path (str): The path of the API after the domain.
        API_KEY (str): Your API Key.
        url_params (dict): An optional set of query parameters in the request.

    Returns:
        dict: The JSON response from the request.

    Raises:
        HTTPError: An error occurs from the HTTP request.
    """
    url_params = url_params or {}
    url = '{0}{1}'.format(host, quote(path.encode('utf8')))
    headers = {
        'Authorization': 'Bearer %s' % api_key,
    }

    print(u'Querying {0} ...'.format(url))

    response = requests.request('GET', url, headers=headers, params=url_params)

    return response.json()


def search(api_key, term, location, limit):
    """Query the Search API by a search term and location.

    Args:
        term (str): The search term passed to the API.
        location (str): The search location passed to the API.

    Returns:
        dict: The JSON response from the request.
    """

    url_params = {
        'term': term.replace(' ', '+'),
        'location': location.replace(' ', '+'),
        'limit': limit
    }
    return request(API_HOST, SEARCH_PATH, api_key, url_params=url_params)


def get_business(api_key, business_id):
    """Query the Business API by a business ID.

    Args:
        business_id (str): The ID of the business to query.

    Returns:
        dict: The JSON response from the request.
    """
    business_path = BUSINESS_PATH + business_id

    return request(API_HOST, business_path, api_key)


def query_api(term, location,limit):
    """Queries the API by the input values from the user.

    Args:
        term (str): The search term to query.
        location (str): The location of the business to query.
    """
    response = search(API_KEY, term, location, limit)
    return response.get('businesses')

def main():
    parser = argparse.ArgumentParser()

    parser.add_argument('-q', '--term', dest='term', default=DEFAULT_TERM,
                        type=str, help='Search term (default: %(default)s)')
    parser.add_argument('-l', '--location', dest='location',
                        default=DEFAULT_LOCATION, type=str,
                        help='Search location (default: %(default)s)')
    parser.add_argument('-n', '--limit', dest='limit',
                        default=SEARCH_LIMIT, type=int,
                        help='Search limit (default: %(default)s)')
    input_values = parser.parse_args()

    try:
        businesses = query_api(input_values.term, input_values.location, input_values.limit)
    except HTTPError as error:
        sys.exit(
            'Encountered HTTP error {0} on {1}:\n {2}\nAbort program.'.format(
                error.code,
                error.url,
                error.read(),
            )
        )

    if not businesses:
        print(u'No businesses for {0} in {1} found.'.format(input_values.term, input_values.location))
        return

    # Prepare to save our results

    # Step 1 create the table if it doesn't already exist
    #create_sql = "CREATE TABLE if not exists `hotels` ("\
       # + "idhotels int NOT NULL AUTO_INCREMENT,"\
       # + "hotelname varchar(255) NOT NULL UNIQUE, "\
       # + "hoteladdr varchar(255) NOT NULL, "\
       # + "hotelphone varchar(255) DEFAULT NULL, "\
       # + "price varchar(45) NOT NULL, "\
       # + "ratings decimal(1,0) DEFAULT NULL, "\
       # + "link text, "\
       # + "PRIMARY KEY (`idhotels`)"\
       # + ")"

    insert_sql = "INSERT INTO hotels (hotelname, hoteladdr, hotelphone, price, ratings, link) VALUES " \
        + "(%s, %s, %s, %s, %s, %s)"

    my_db = mysql.connector.connect(
        host="localhost",
        user="root",
        password="password",
        database="capstone",
        auth_plugin = 'mysql_native_password')


    my_cursor = my_db.cursor()
   

    # loop over the results and save each business found as a row in our table
    for business in businesses:
        # print(business)
        if business.get('price') is None:
            price = "N/A"
        else:
            price = business['price']

        name = business['name']
        address = ", ".join(business['location']['display_address'])
        phone = business['display_phone']
        rating = business['rating']
        link = business['image_url']

        vals = (name, address, phone, price, rating, link)

        try:
            my_cursor.execute(insert_sql, vals)
            print('inserted: ', vals)
        except:
            print("duplicate entry not inserted: ", vals)

    # commit all of the inserts
    my_db.commit()

    print(my_cursor.rowcount, " records inserted")


if __name__ == '__main__':
    main()
