

<?php

$dir = "5.11-EUW-RANKED/*";

$championDeaths = array();
$championTotalMatches = array();
$championAverageDeaths = array();



foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {  
        $championId = $json['participants'][$i]['championId'];
        $deaths = $json['participants'][$i]['stats']['deaths'];
            
        if (!array_key_exists($championId, $championTotalMatches)) {
                $championTotalMatches[$championId] = 1;
                $championDeaths[$championId] = 0;
         } else { 
             $championTotalMatches[$championId] += 1;
         }
         
         $championDeaths[$championId] += $deaths;
            
     }
    
}
    

foreach ($championTotalMatches as $k => $v) {
    $championAverageDeaths[$k] = round(($championDeaths[$k]/$championTotalMatches[$k]),1);
}


include 'dbconnect.php';

foreach ($championAverageDeaths as $k => $v) {
   
    
    // prepare and bind
$stmt = $conn->prepare("INSERT INTO ######### (ChampionID, Deaths) VALUES (?, ?)");
$stmt->bind_param("id", $k, $v);

// set parameters and execute
$stmt->execute();

echo "New records created successfully";


    
    
}

$conn->close();

echo "done";



?>