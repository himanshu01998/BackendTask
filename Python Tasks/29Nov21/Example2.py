lst1 = [1, 'Hi', 45.5, 'Himanshu', 'K']
lst2 = [2, 'Hello', 'H']
print(lst1)
print(lst2)

lst2.insert(3, "Sharma")
lst2.append(54.98)

lst1.pop(4)
lst2.pop(2)
lst1.extend(lst2)
print(lst1[1])
print(lst1[3][5])

print(len(lst2))

print(lst1)
print(lst2)