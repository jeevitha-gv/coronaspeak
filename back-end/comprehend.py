import json 
import random
# with open('../static/main.json') as f:
#     data = json.load(f)

# dic = {}
# anna = 0
# for i in data:
#     if dic.get(i["country_code"]) is None:
#         dic[i["country_code"]] = anna
#     anna = anna + 1

# f.close()

# with open('../static/country_num_mapping.json', 'w') as outfile:
#     json.dump(dic, outfile)

# with open('../static/list.json') as f:
#     data = json.load(f)

# dic = {}
# for i in data:
#     if dic.get(i["name"]) is None:
#         dic[i["name"]] = i["code"]

# with open('../static/country_to_code.json', 'w') as outfile:
#     json.dump(dic, outfile)

with open('../static/main.json') as f:
    data = json.load(f)


dic = {}
for i in data:
    if dic.get(i["name"]) is None:
        dic[i["name"]] = {}
        if dic[i["name"]].get("reported_cases") is None:
            dic[i["name"]]["reported_cases"] = 0
        if dic[i["name"]].get("confirmed_cases") is None:
            dic[i["name"]]["confirmed_cases"] = 0
        if dic[i["name"]].get("death_cases") is None:
            dic[i["name"]]["death_cases"] = 0
    
with open('../data/data.json', 'w') as outfile:
    json.dump(dic, outfile)

# with open('../static/main.json') as f:
#     data = json.load(f)


# dic = {}
# for i in data:
#     if dic.get(i["name"]) is None:
#         dic[i["name"]] = {}
#         if dic[i["name"]].get("latt") is None:
#             dic[i["name"]]["latt"] = i["latlng"][0]
#         if dic[i["name"]].get("long") is None:
#             dic[i["name"]]["long"] = i["latlng"][1]
    
# with open('../static/latlong.json', 'w') as outfile:
#     json.dump(dic, outfile)

