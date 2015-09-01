<?php

$dir = "5.11-EUW-RANKED/*";

$championMagicDamageDealt = array();
$championTotalMatches = array();
$championAverageMagicDamageDealt = array();

foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {  
        $championId = $json['participants'][$i]['championId'];
        $magicDamageDealt = $json['participants'][$i]['stats']['magicDamageDealtToChampions'];
            
        if (!array_key_exists($championId, $championTotalMatches)) {
                $championTotalMatches[$championId] = 1;
                $championMagicDamageDealt[$championId] = 0;
         } else { 
             $championTotalMatches[$championId] += 1;
         }
         
         $championMagicDamageDealt[$championId] += $magicDamageDealt;
     }
}

foreach ($championTotalMatches as $k => $v) {
    $championAverageMagicDamageDealt[$k] = round(($championMagicDamageDealt[$k]/$championTotalMatches[$k]),1);
}

print_r($championAverageMagicDamageDealt);

?>