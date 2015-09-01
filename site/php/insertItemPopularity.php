<?php

$dir = "5.11-EUW-RANKED/*";

$itemBought = array();
$championTotalMatches = array();
$championAverageMagicDamageDealt = array();
$players = 0;
$items = 0;

foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);
     $checker = array();
    
     for($i = 0; $i < 10; $i++) {
        $players += 1;
         
        for($j = 0; $j < 6; $j++) { 
            $item = $json['participants'][$i]['stats']['item' . strval($j)];
            
            
            
             if(!array_key_exists($item, $itemBought)) { 
                 $itemBought[$item] = 0;
             }
            
            
            if(array_key_exists($item, $checker)) { 
                break;
             }
            
            
             $itemBought[$item] += 1;
             $checker[$item] = true;
            
            
            
            
         
        
            
             
         }
         
        
            
            
        }
            
        }
         
    



 foreach ($itemBought as $k => $v) {
        echo $k . " | " . round(($v/10000)*100,1) . "<br>"; 
    }








?>