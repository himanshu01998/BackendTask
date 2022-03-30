# WAP to read a number and sum of its digits

num = input("Enter a num: ")
sum = 0
for n in num:
    sum = sum + int(n)

print(sum)
