import os, os.path, json

count = 0
matches = 0;
test = 0
jsonItems = []
championAssists = {}
championTotalMatches = {}
championAverageAssists = {}
count = 0
for root, _, files in os.walk("lol/5.11"):

    for f in files:
        matches += 1
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:

                jsonData = json.load(data_file)
                for x in range(0, 10):
                         print(matches)
                         championId = jsonData["participants"][x]["championId"]
                         assists = jsonData["participants"][x]["stats"]["magicDamageDealt"]
                         if championId not in championTotalMatches:
                             championTotalMatches[championId] = 1
                             championAssists[championId] = 0
                         else:
                             championTotalMatches[championId] += 1

                         championAssists[championId] += assists






print(matches)

for k,v in championTotalMatches.items():
    championAverageAssists[k] = round((championAssists[k]/championTotalMatches[k]),0)

for key, value in championAverageAssists.items():
    print("\"" + str(key) + "\" => " + str(value) + ",")
