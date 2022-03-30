sample_dict = {
    "name": "Kelly",
    "age": 25,
    "salary": 8000,
    "city": "New york"
}
keys = ["name", "salary"]
new_dict = {}

for key, value in sample_dict.items():
    if(key in keys):
        new_dict[key] = value
    else:
        continue
print(new_dict)