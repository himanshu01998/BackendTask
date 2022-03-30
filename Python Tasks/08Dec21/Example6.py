#!/usr/bin/python3

import pymysql

id = 3

conn = pymysql.connect(host="localhost", user="root", password="", database="admin_panel")
cursor = conn.cursor()

try:
    cursor.execute("DELETE FROM `student_details` WHERE `id` = %d"%id)
    conn.commit()
    print("Data Deleted")
except:
    conn.rollback()
    print("Error! Data is Not Deleted")

conn.close()