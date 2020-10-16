import requests
import json
import mysql.connector
   
db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    password = "password",
    database = "capstone"
)
cursor = db.cursor()
r = requests.get("https://api.skypicker.com/flights?flyFrom=PHL&to=MCO&dateFrom=01/11/2020&dateTo=30/11/2020&partner=picky&v=3")
#json_response = r.json()
data = r.json()

limit = 10
for index, flights in enumerate(data['data']):
    depart1 = flights["flyFrom"]
    arrive1 = flights['flyTo']
    atime1 = flights['aTime']
    dtime1 = flights['dTime']
    flyID1 = flights['id']
    length1 = flights['fly_duration']
    if index == limit:
        break
try:
     cursor.execute("""INSERT INTO flights(flyID,depart,arrive,atime,dtime,length) VALUES(%s,%s,%s,%s,%s,%s)""",(flyID1, depart1, arrive1, atime1, dtime1, length1))
     db.commit()
except:
    db.rollback()
         
cursor.close()
db.close()









