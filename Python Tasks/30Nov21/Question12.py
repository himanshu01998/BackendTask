list1 = ["Mike", "", "Emma", "Kelly", "", "Brad"]
lst = []
for i in range(len(list1)):
    if(list1[i] == ""):
        continue
    else:
        lst.append(list1[i])

print(lst)
