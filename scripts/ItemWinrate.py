import os, os.path, json

count = 0
matches = 0;
test = 0
jsonItems = []
itemWinrate = {}
itemWinCount = {}
itemCount = {}

players = 0
for root, _, files in os.walk("lol/5.11"):
    test += 1
    for f in files:
        matches += 1
        print(matches)
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:

                jsonData = json.load(data_file)
                for x in range(0, 10):
                    players +=1
                    for y in range(0, 6):
                        itemID = jsonData["participants"][x]["stats"]["item" + str(y)]



                        if itemID not in itemWinCount:
                             itemWinCount[itemID] = 0
                             itemCount[itemID] = 0

                        if jsonData["participants"][x]["stats"]["winner"] == True:
                            itemWinCount[itemID]+=1

                        itemCount[itemID] +=1


print(itemWinCount[3072])
print(itemCount[3072])
print(round(((itemWinCount[3072]/itemCount[3072])*100),1))
print(matches)

for k,v in itemWinCount.items():

    itemWinrate[k] = round(((v/itemCount[k])*100),1)


for key, value in itemWinrate.items():
    print("\"" + str(key) + "\" => " + str(value) + ",")