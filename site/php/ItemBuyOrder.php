<?php

$dir = "5.11-EUW-RANKED/*";




$itemTotalMatches = array();
$itemLaneCount = array();


foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {
           $lane = $json['participants'][$i]['timeline']['lane'];
             $championLane = array(
        "0" => 0,
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0
    );
         
          for($j = 0; $j < 6; $j++) {
         
        $itemId = $json['participants'][$i]['stats']['item' . strval($j)];
      
         
            
        if (!array_key_exists($itemId, $itemTotalMatches)) {
                $itemTotalMatches[$itemId] = 1;
                $itemLaneCount[$itemId] = $championLane;
                
         } else { 
             $itemTotalMatches[$itemId] += 1;
         }
         
         $itemLaneCount[$itemId][$j] += 1;
     }
         
     }
}

$championLanePercent = $itemLaneCount;


foreach ($itemLaneCount as $championId => $laneArray) {
    foreach ($laneArray as $lane => $laneCount) {
        $championLanePercent[$championId][$lane] = round(($laneCount/$itemTotalMatches[$championId])*100,0); 
    }
}
    

print_r($championLanePercent);


?>