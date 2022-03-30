list1 = [5, 10, 15, 20, 25, 50, 20]

for i in range(len(list1)):
    if(list1[i] == 20):
        list1.remove(list1[i])
        list1.insert(i, 200)
        break
print(list1)