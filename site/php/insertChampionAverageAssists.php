

<?php

$dir = "5.11-EUW-RANKED/*";

$championAssists = array();
$championTotalMatches = array();
$championAverageAssists = array();



foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {  
        $championId = $json['participants'][$i]['championId'];
        $assist = $json['participants'][$i]['stats']['assists'];
            
        if (!array_key_exists($championId, $championTotalMatches)) {
                $championTotalMatches[$championId] = 1;
                $championAssists[$championId] = 0;
         } else { 
             $championTotalMatches[$championId] += 1;
         }
         
         $championAssists[$championId] += $assist;
            
     }
    
}
    

foreach ($championTotalMatches as $k => $v) {
    $championAverageAssists[$k] = round(($championAssists[$k]/$championTotalMatches[$k]),1);
}

print_r($championAverageAssists);

/*
include 'dbconnect.php';

foreach ($championAverageAssists as $k => $v) {
   
    
    // prepare and bind
$stmt = $conn->prepare("INSERT INTO ######### (ChampionID, Assists) VALUES (?, ?)");
$stmt->bind_param("id", $k, $v);

// set parameters and execute
$stmt->execute();

echo "New records created successfully";


    
    
}

$conn->close();

echo "done";
*/


?>