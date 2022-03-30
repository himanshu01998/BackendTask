str1 = "PyNaTive"
s1 = ''
s2 = ''
for c in str1:
    if(c >= 'a' and c <= 'z'):
        s1 = s1 + c
    else:
        s2 = s2 + c
print(s1+s2)