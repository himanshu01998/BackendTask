def tax(num):
    if(num <= 10000):
        print("Interest Amount is: 0.0")
    elif(num>10000 and num <= 20000):
        calc = (10000*0.1)
        print("Interest Amount is:",calc)
    else:
        calc = (10000*0.1)+((num-20000)*0.2)
        print("Interest Amount is:",calc)

inp = int(input("Enter your income:"))
tax(inp)