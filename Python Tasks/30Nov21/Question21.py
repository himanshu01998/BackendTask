s1 = "Ault"
s2 = "Kelly"

middle = int(len(s1) / 2)
newstr = s1[:middle] + s2 + s1[middle+1:]
print(newstr)