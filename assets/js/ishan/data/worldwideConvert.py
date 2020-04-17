file = open("worldwideinfo.csv", "r")
lines = file.readlines()

prevCountry = ""
country = ""
string = "{"
first = 1
for i in lines:
    if (first == 1):
        first = 0
        text = i
        text = text.rstrip("\n")
        text = text.split(",")
        country = "worldWide"
        prevCountry = text[1]
        code = country
        string += code+":"+"["+text[0]+":" + \
            "["+text[1]+","+text[2]+","+text[3]+"]"
    else:
        text = i
        text = text.rstrip("\n")
        text = text.split(",")

        string += ","+text[0]+":" + \
            "["+text[1]+","+text[2]+","+text[3]+"]"

string += "}"

a = open("WorldWidedata.json", "w")
a.write(string)
