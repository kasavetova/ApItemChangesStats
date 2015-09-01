<?php



$championItemCount = array();


$dir = "5.11-EUW-RANKED/*";




foreach(glob($dir) as $file)  { 
$string = file_get_contents($file);
     $json = json_decode($string, true);

     for($i = 0; $i < 10; $i++) {
         $championId = $json['participants'][$i]['championId'];  
         $itemList = array(
    "1026" => 0,
    "1058" => 0,
    "3089" => 0,
    "3157" => 0,
    "3285" => 0,
    "3116" => 0,
    "3003" => 0,
    "3048" => 0,
    "3027" => 0,
    "3136" => 0,
    "3151" => 0,
    "3135" => 0,
    "3115" => 0,
    "3152" => 0,
    "3165" => 0,
    "3174" => 0,
);
         
          for($j = 0; $j < 6; $j++) {
         
        $item = $json['participants'][$i]['stats']['item' . strval($j)];
      
        if($item == 1026 || $item == 1058 || $item == 3089 || $item == 3157 || $item == 3285 || 
           $item == 3116 || $item == 3003 || $item == 3048 || $item == 3027 || $item == 3136 || 
           $item == 3151 || $item == 3135 || $item == 3115 || $item == 3152 ||  $item == 3165 ||
            $item == 3174) { 
            
            
        
            
        if (!array_key_exists($championId, $championItemCount)) {
                $championItemCount[$championId] = $itemList;
                
         }   
         
         $championItemCount[$championId][$item] += 1;
        
     }
         
     }  
}
}


print_r($championItemCount);





?>