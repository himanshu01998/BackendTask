#!/usr/bin/python3

import pymysql

conn = pymysql.connect(host="localhost", user="root", password="", database="admin_panel")
cursor = conn.cursor()

cursor.execute("SELECT * FROM `student_details`")
data = cursor.fetchall()

for row in data:
    name = row[1]
    email = row[2]
    mobile = row[4]
    print("Name: %s\nEmail: %s\nMobile: %s\n\n"%(name, email, mobile))

conn.close()