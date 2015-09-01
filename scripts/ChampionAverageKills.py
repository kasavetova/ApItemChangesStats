import os, os.path, json

count = 0
matches = 0;
test = 0
jsonItems = []
championKills = {}
championTotalMatches = {}
championAverageKills = {}
count = 0
for root, _, files in os.walk("5.11-EUW-RANKED"):
    test += 1
    for f in files:
        matches += 1
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:

                jsonData = json.load(data_file)
                for x in range(0, 10):
                         championId = jsonData["participants"][x]["championId"]
                         kills = jsonData["participants"][x]["stats"]["kills"]
                         if championId not in championTotalMatches:
                             championTotalMatches[championId] = 1
                             championKills[championId] = 0
                         else:
                             championTotalMatches[championId] += 1

                         championKills[championId] += kills






print(matches)

for k,v in championTotalMatches.items():
    championAverageKills[k] = round((championKills[k]/championTotalMatches[k]),1)


print(championAverageKills)
