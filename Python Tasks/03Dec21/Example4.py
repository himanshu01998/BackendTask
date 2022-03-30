# try:
#     f = open('Example4.txt', 'W')
#     f.write("Testing this Block")
# except:
#     print("Error in writing")
# else:
#     print("Written Success")
#     f.close()
# finally:
#     print("It will be executed.")

try:
    raise NameError("Hi there")
except:
    print("An error occurred!")