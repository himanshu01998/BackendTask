# file = open('Example3.txt', 'w+')
# file.write("Hello this is first line.\n")
# file.write("Hello this one is second line")

file = open('Example3.txt', 'a+')
# file.write("\nAdding new line to see append mode")

file = open('Example3.txt', 'r+')
# print(file.read())
print(file.readline())
print(file.readline(20))
file.close()