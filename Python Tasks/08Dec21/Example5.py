#!/usr/bin/python3

import pymysql

name = "Shubham"
email = "Shubham@gmail.com"
password = "Shub@12345"
mobile = 8628805915

conn = pymysql.connect(host="localhost", user="root", password="", database="admin_panel")
cursor = conn.cursor()

try:
    cursor.execute("UPDATE `student_details` SET `name` = '%s', `email` = '%s', `password` = '%s', `mobile` = '%s' WHERE `id` = 3"%(name, email, password, mobile))
    conn.commit()
    print("Data Updated")
except:
    conn.rollback()
    print("Error! Data is Not Updated")

conn.close()