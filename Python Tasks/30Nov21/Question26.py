str1 = "Emma25 is Data scientist50 and AI Expert"
lst = str1.split()
res_lst = []

for item in lst:
    if any(c.isalpha() for c in item) and any(c.isdigit() for c in item):
        res_lst.append(item)

for i in res_lst:
    print(i)