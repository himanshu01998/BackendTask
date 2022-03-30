#!/usr/bin/python3

import pymysql

name = "Shubh"
email = "Shub@gmail.com"
password = "12345"
mobile = 9828805915

conn = pymysql.connect(host="localhost", user="root", password="", database="admin_panel")
cursor = conn.cursor()

try:
    cursor.execute("INSERT INTO `student_details` (`name`, `email`, `password`, `mobile`) VALUES ('%s', '%s', '%s', '%s')"%(name, email, password, mobile))
    conn.commit()
    print("Data Inserted")
except:
    conn.rollback()
    print("Error! Data is Not Inserted")

conn.close()