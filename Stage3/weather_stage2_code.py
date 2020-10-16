import requests
import json
import mysql.connector

db = mysql.connector.connect(
    host = "127.0.0.1",
    user = "root",
    password = "password",
    database = "capstone")

cursor = db.cursor()

r = requests.get("https://api.openweathermap.org/data/2.5/onecall?lat=11.82&lon=15.15&exclude={part}&units=metric&appid=aba26dc4598965b13ab621c34db819e7")
json_response = r.json()


longitu = json_response['lon']
latitu = json_response['lat']
timezo = json_response['timezone']
curte = json_response['current']['temp']
hour1te = json_response['hourly'][1]['temp']
hour2te = json_response['hourly'][2]['temp']
hour3te = json_response['hourly'][3]['temp']
hour4te = json_response['hourly'][4]['temp']
hour5te = json_response['hourly'][5]['temp']
daily1te = json_response['daily'][0]['temp']['day']
daily2te = json_response['daily'][1]['temp']['day']
daily3te = json_response['daily'][2]['temp']['day']
daily4te = json_response['daily'][3]['temp']['day']
daily5te = json_response['daily'][4]['temp']['day']

try:
    # Write to the database
    cursor.execute("""INSERT INTO weather_data(longitude,latitude,timezone,curtemp,hour1temp,hour2temp,hour3temp,hour4temp,hour5temp,daily1temp,daily2temp,daily3temp,daily4temp,daily5temp) VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)""",(longitu,latitu,timezo,curte,hour1te,hour2te,hour3te,hour4te,hour5te,daily1te,daily2te,daily3te,daily4te,daily5te))
    # Commit the changes
    db.commit()
# Unless there is a problem
except:
    # Roll the database back to the last good setting
    db.rollback()

# Close the database object
cursor.close()
db.close()
