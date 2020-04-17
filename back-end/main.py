from requests import get
from bs4 import BeautifulSoup
import json

url = 'https://www.worldometers.info/coronavirus/'
response = get(url)
html_soup = BeautifulSoup(response.text, 'html.parser')
table = html_soup.find_all('id', class_ = 'main_table_countries')
#print(table)
string=""
for tr in html_soup.find_all('tr')[1:]:
    tds=tr.find_all('td')
    for ele in tds:
#        print(ele.text,end='|')
        string+="{}|".format(ele.text)
#    print()
    string+="\n"
f = open("a.txt","w")
f.write(string)

f = open("a.txt", "r")
a = f.readlines()

with open("../data/data.json") as f2:
    data = json.load(f2)

b = open("../data/data.json")
dic = {}
dic["S. Korea"] = "South Korea"
dic["UK"] = "United Kingdom"
dic["USA"] = "United States"
dic["North Macedonia"] = "Macedonia"
dic["St. Barth"] = "Saint Barth\u00e9lemy"
dic["UAE"] = "United Arab Emirates"

anna = {}

for i in a:
    i = i.lstrip()
    line = i.split("|")
    line[1] = line[1].replace(",","")
    line[3] = line[3].replace(",","")

#    print(line[1],line[3])
    if line[3] == " ":
        line[3] = "0"

    
    string = ""
    bana = len(line[0].split(" "))
    li = line[0].split(" ")
    for i in range(len(line[0].split(" "))):
        if i < bana - 1:
            string += li[i]
        if i < bana - 2:
            string += " "

#    print(string)
#    print(int(line[1]))
    if data.get(line[0].split(" ")[0]) is not None:
        bet = line[0].split(" ")[0]
        data.get(bet)["reported_cases"] = line[1]
        data.get(bet)["confirmed_cases"] = line[1]
        data.get(bet)["death_cases"] = line[3]
    elif data.get(string) is not None:
        data.get(string)["reported_cases"] = line[1]
        data.get(string)["confirmed_cases"] = line[1]
        data.get(string)["death_cases"] = line[3]
    elif dic.get(string) is not None:
#        print("GOOG")
        if data.get(dic[string]) is not None:
            data.get(dic[string])["reported_cases"] = line[1]
            data.get(dic[string])["confirmed_cases"] = line[1]
            data.get(dic[string])["death_cases"] = line[3]
    else :
        uf = 2
        #print(line[0].split(" "),end="|")

#print(data)
with open("../data/data.json","w") as fi:
    json.dump(data,fi)

#print(string)
#b.write(string)
f.close()
b.close()
ghi = open("../data/data.json","r")
line = ghi.readlines()
string = "Data = \n"
line.insert(0,string)
ghi.close()

ghi = open("../data/data.json","w")
ghi.writelines(line)
ghi.close()
