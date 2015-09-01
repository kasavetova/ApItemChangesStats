__author__ = 'MB'

import os, os.path, json

championStat = {}
championTotalMatches = {}
championAverageStat = {}

for root, _, files in os.walk("lol/5.11-NA-RANKED"):
    for f in files:
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:
                jsonData = json.load(data_file)
                for x in range(0, 10):
                        championId = jsonData["participants"][x]["championId"]
                        stat = jsonData["participants"][x]["stats"]["kills"]
                        if stat not in championStat.keys():
                            championStat[championId] = 0

                        championStat[championId] +=1





print(itemsCount[3089])