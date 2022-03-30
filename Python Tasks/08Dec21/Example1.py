#!/usr/bin/python

import cgi
form = cgi.FieldStorage() 

if form.getvalue('maths'):
    math_flag = "ON"
else:
    math_flag = "OFF"

if form.getvalue('physics'):
    physics_flag = "ON"
else:
    physics_flag = "OFF"

if form.getvalue('category'):
    category = form.getvalue('category')
else:
    category = "Not Selected"

first_name = form.getvalue('first_name')
last_name  = form.getvalue('last_name')
desc = form.getvalue('desc')
print ("Content-type:text/html\r\n\r\n")
print ("<html>")
print ("<head>")
print ("<title>CGI Program</title>")
print ("</head>")
print ("<body>")
print ("<h2>Hello %s %s</h2>" % (first_name, last_name))
print ("<h2>Maths Checkbox: %s <br> Physics Checkbox: %s</h2>" % (math_flag, physics_flag))
print ("<h2>Description: %s </h2>" % desc)
print ("<h2>Category: %s </h2>" % category)
print ("</body>")
print ("</html>")