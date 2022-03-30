str1 = "Apple"
dic = {}

for c in str1:
    count = str1.count(c)
    dic[c] = count

print(dic)