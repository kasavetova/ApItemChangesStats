import os, os.path, json


matches = 0;



championItemCount = {}

for root, _, files in os.walk("5.11-EUW-RANKED"):
    for f in files:
        matches += 1
        print(matches)
        fullpath = os.path.join(root, f)
        if ".json" in fullpath:
            with open(fullpath) as data_file:
                jsonData = json.load(data_file)
                for x in range(0, 10):
                         championId = jsonData["participants"][x]["championId"]
                         itemList = {
                                        "1026" : 0,
                                        "1058" : 0,
                                        "3089" : 0,
                                        "3157" : 0,
                                        "3285" : 0,
                                        "3116" : 0,
                                        "3003" : 0,
                                        "3048" : 0,
                                        "3027" : 0,
                                        "3136" : 0,
                                        "3151" : 0,
                                        "3135" : 0,
                                        "3115" : 0,
                                        "3152" : 0,
                                        "3165" : 0,
                                        "3174" : 0};


                         for y in range(0, 6):



                             item = jsonData["participants"][x]["stats"]["item" + str(y)]

                             if(item == 1026 or item == 1058 or item == 3089 or item == 3157 or item == 3285 or
                               item == 3116 or item == 3003 or item == 3048 or item == 3027 or item == 3136 or
                               item == 3151 or item == 3135 or item == 3115 or item == 3152 or  item == 3165 or
                                item == 3174):

                                 if championId not in championItemCount:
                                     championItemCount[championId] = itemList

                                 championItemCount[championId][str(item)] += 1





for key, value in championItemCount.items():
   print(("\"" + str(key) + "\" => " + str(value) + ",").replace(":"," => ").replace("{","array (").replace("}",")"))
