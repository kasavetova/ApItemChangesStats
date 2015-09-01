<?php


$dir = "champion/*";

$champions = array();
$championsWithId = array();


foreach(glob($dir) as $file)  { 


    
    
     
$name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
$name = substr($name,9);
array_push($champions,$name);
 
}

$string = file_get_contents("champions.json");
     $json = json_decode($string, true);

foreach($champions as $c) { 
    
    $d = $c;
    
    
    
       if($c == "ChoGath") { 
     $d = "Cho\'Gath"; 
    } else if($c == "DrMundo") { 
     $d = "Dr. Mundo";   
    } else if($c == "JarvanIV") { 
     $d = "Jarvan IV";   
    } else if($c == "KhaZix") { 
     $d = "Kha\'Zix";   
    } else if($c == "KogMaw") { 
     $d = "Kog'Maw";   
    } else if($c == "LeeSin") { 
     $d = "Lee Sin";   
    } else if($c == "MasterYi") { 
     $d = "Master Yi";   
    } else if($c == "MissFortune") { 
     $d = "Miss Fortune";   
    } else if($c == "RekSai") { 
     $d = "Rek\'Sai";   
    } else if($c == "TahmKench") { 
     $d = "Tahm Kench";   
    } else if($c == "VelKoz") { 
     $d = "Vel\'Koz";   
    } else if($c == "XinZhao") { 
     $d = "Xin Zhao";   
    } else if($c == "MonkeyKing") { 
     $d = "Wukong";   
    } 
    
    $championsWithId[$json['data'][$c]['id']]=$d;
    
    
    
}




$servername = "178.62.14.183";
$username = "mysqlusr";
$password = "191456Gg";

// Create connection
$conn = new mysqli($servername, $username, $password,"lolstats");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";





foreach ($championsWithId as $k => $v) {
   
    
    // prepare and bind
$stmt = $conn->prepare("INSERT INTO Champions (ChampionID, ChampionName) VALUES (?, ?)");
$stmt->bind_param("is", $k, $v);

// set parameters and execute
$stmt->execute();

echo "New records created successfully";


    
    
}
$stmt->close();
$conn->close();

echo "done";










?>