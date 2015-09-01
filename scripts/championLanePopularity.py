import os, os.path, json


matches = 0;


championTotalMatches = {}
championLaneCount = {}

for root, _, files in os.walk("lol/5.11"):
    for f in files:
        matches += 1
        print(matches)
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:

                jsonData = json.load(data_file)
                for x in range(0, 10):
                         championLane = {"TOP": 0,
                                    "MIDDLE":0,
                                    "JUNGLE" : 0,
                                    "BOTTOM" : 0}


                         championId = jsonData["participants"][x]["championId"]
                         lane = jsonData["participants"][x]["timeline"]["lane"]

                         if championId not in championTotalMatches:
                             championTotalMatches[championId] = 1
                             championLaneCount[championId] = championLane
                         else:
                             championTotalMatches[championId] += 1


                         championLaneCount[championId][lane] += 1


championLanePercent = championLaneCount.copy()


for championId,laneArray  in championLaneCount.items():
    for lane,laneCount in laneArray.items():
        championLanePercent[championId][lane] = round(laneCount/championTotalMatches[championId]*100,1)





for key, value in championLanePercent.items():
    print(("\"" + str(key) + "\" => " + str(value) + ",").replace(":"," => ").replace("{","array (").replace("}",")"))
