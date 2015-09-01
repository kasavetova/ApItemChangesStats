import os, os.path, json,operator


matches = 0;


championTotalMatches = {}
championLaneCount = {}

for root, _, files in os.walk("5.11-EUW-RANKED"):
    for f in files:
        matches += 1
        print(matches)
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:

                jsonData = json.load(data_file)
                for x in range(0, 10):
                         championLane = {"0": 0,
                                    "1":0,
                                    "2" : 0,
                                    "3" : 0,
                                    "4" : 0,
                                     "5" : 0}

                         for y in range(0, 6):


                             championId = jsonData["participants"][x]["stats"]["item" + str(y)]


                             if championId not in championTotalMatches:
                                 championTotalMatches[championId] = 1
                                 championLaneCount[championId] = championLane
                             else:
                                 championTotalMatches[championId] += 1


                             championLaneCount[championId][str(y)] += 1


championLanePercent = {}


for championId,laneArray  in championLaneCount.items():

        championLanePercent[championId] = max(laneArray, key=lambda x: laneArray[x[0]])

array = {}

def find_between( s, first, last ):
    try:
        start = s.index( first ) + len( first )
        end = s.index( last, start )
        return s[start:end]
    except ValueError:
        return ""

with open("items.json") as data_file:

        jsonData = json.load(data_file)

for itemId,useless in championLaneCount.items():
    try:
       description = jsonData["data"][str(itemId)]["description"];
       stats = find_between(description,"stats>","</stats")
       split = stats.split("<br>")
       for x in range(0,len(split)):
           statWord = split[x].replace("<mana>","",1).replace("</mana>","",1)
           print(statWord + " | " + jsonData["data"][str(itemId)]["name"])



    except Exception:
        pass



for v in array:
    print (str(v) + ",")




#for key, value in championLanePercent.items():
   # print(("\"" + str(key) + "\" => " + str(value) + ",").replace(":"," => ").replace("{","array (").replace("}",")"))
