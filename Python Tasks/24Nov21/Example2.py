# WAP to read three numbers and find out maximum

num1, num2, num3 = 10, 200, 30

print("Num1 =",num1," Num2 =",num2," Num3 =",num3)

if(num1 > num2 and num1 > num3):
    print(num1,"is greater.")

elif(num2 > num1 and num2 > num3):
    print(num2,"is greater.")

else:
    print(num3,"is greater.")
