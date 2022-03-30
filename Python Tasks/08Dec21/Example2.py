#!/usr/bin/python3

import pymysql

conn = pymysql.connect(host="localhost", user="root", password="", database="admin_panel")
cursor = conn.cursor()

cursor.execute("SELECT VERSION()")
data = cursor.fetchone()
print("Version: %s"% data)

conn.close()