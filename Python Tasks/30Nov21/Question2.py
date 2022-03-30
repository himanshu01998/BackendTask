def remove_char(str1, n):
    if(n > len(str1)):
        print("n should be less than length of string")
    else:
        print(str1[n:])

st = input("Enter a String: ")
n = int(input("Enter a Number: "))

remove_char(st, n)