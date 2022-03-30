import base64

str1 = "hi, \tI am himanshu sharma"
# print(str1)
# print(str1.capitalize())
# print(str1.center(40,'-'))
# print(str1.count('h', 5))
# print(str1.endswith('a'))
# print(str1.find('am'))
# st = base64.b64encode(str1.encode('utf-8',errors = 'strict'))
# print(st)
# print(str1.expandtabs(1))
# print(str1.index('a'))
# print(str1.isalnum())
# print(str1.isalpha())
# print(str1.isdigit())
# print(str1.islower())
# print(str1.isupper())
# print(str1.istitle())
# print(str1.upper())
# print("Max:",max(str1))
# print("Max:",min(str1))
st = str1.replace(',', ':')
print(st)
print(str1.startswith('hi'))

intab = "aeiou"
outtab = "12345"
trantab = str.maketrans(intab, outtab)
str = "this is string example....wow!!!"
print (str.translate(trantab))