<?php

$dir = "5.11-EUW-RANKED/*";

$championKills = array();
$championTotalMatches = array();
$championAverageKills = array();

foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {  
        $championId = $json['participants'][$i]['championId'];
        $kills = $json['participants'][$i]['stats']['kills'];
            
        if (!array_key_exists($championId, $championTotalMatches)) {
                $championTotalMatches[$championId] = 1;
                $championKills[$championId] = 0;
         } else { 
             $championTotalMatches[$championId] += 1;
         }
         
         $championKills[$championId] += $kills;
     }
}
    
foreach ($championTotalMatches as $k => $v) {
    $championAverageKills[$k] = round(($championKills[$k]/$championTotalMatches[$k]),1);
}

include 'dbconnect.php';

foreach ($championAverageKills as $k => $v) {
   
// prepare and bind
$stmt = $conn->prepare("INSERT INTO ######### (ChampionID, Kills) VALUES (?, ?)");
$stmt->bind_param("id", $k, $v);

// set parameters and execute
$stmt->execute();

echo "New records created successfully";
    
}

$conn->close();

echo "done";

?>