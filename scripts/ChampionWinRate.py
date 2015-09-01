import os, os.path, json

count = 0
matches = 0;
test = 0
jsonItems = []
championWon = {}
championTotalMatches = {}
championWinRates = {}
count = 0
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
                         championId = jsonData["participants"][x]["championId"]
                         winner = jsonData["participants"][x]["stats"]["winner"]
                         if championId not in championTotalMatches:
                             championTotalMatches[championId] = 1
                             championWon[championId] = 0
                         else:
                             championTotalMatches[championId] += 1

                         if winner:
                             championWon[championId] += 1



for k,v in championTotalMatches.items():
    championWinRates[k] = round((championWon[k]/championTotalMatches[k])*100,1)

for key, value in championWinRates.items():
    print("\"" + str(key) + "\" => " + str(value) + ",")

