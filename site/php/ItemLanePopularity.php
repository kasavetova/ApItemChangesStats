<?php

$dir = "5.11-EUW-RANKED/*";




$championTotalMatches = array();
$championLaneCount = array();


foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {
           $lane = $json['participants'][$i]['timeline']['lane'];
             $championLane = array(
        "TOP" => 0,
        "BOTTOM" => 0,
        "MIDDLE" => 0,
        "JUNGLE" => 0
    );
         
          for($j = 0; $j < 6; $j++) {
         
        $championId = $json['participants'][$i]['stats']['item' . strval($j)];
      
         
            
        if (!array_key_exists($championId, $championTotalMatches)) {
                $championTotalMatches[$championId] = 1;
                $championLaneCount[$championId] = $championLane;
                
         } else { 
             $championTotalMatches[$championId] += 1;
         }
         
         $championLaneCount[$championId][$lane] += 1;
     }
         
     }
}

$championLanePercent = $championLaneCount;


foreach ($championLaneCount as $championId => $laneArray) {
    foreach ($laneArray as $lane => $laneCount) {
        $championLanePercent[$championId][$lane] = round(($laneCount/$championTotalMatches[$championId])*100,0); 
    }
}
    

print_r($championLanePercent);


?>