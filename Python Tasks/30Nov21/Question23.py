s1 = "Abc"
s2 = "Xyz"
s1_len = len(s1)
s2_len = len(s2)
new_str = ""

length = 0
if s1_len > s2_len:
    length = s1_len
else:
    length = s2_len

s2 = s2[::-1]

for i in range(length):
    if(i < s1_len):
        new_str = new_str + s1[i]
    if(i < s2_len):
        new_str = new_str + s2[i]

print(new_str)