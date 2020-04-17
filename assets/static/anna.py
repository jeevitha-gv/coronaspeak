import json
with open("./country_to_code.json") as f:
    data = json.load(f)


dic = {}
for i in data:
    dic[data[i]] = i

print(dic)
with open("./code_to_country.json","w") as ff:
    json.dump(dic,ff)

