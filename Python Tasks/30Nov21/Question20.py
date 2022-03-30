str1 = "James"
middle = int(len(str1) / 2)

newstr = str1[:1] + str1[middle:middle+1] + str1[-1:]
print(newstr)