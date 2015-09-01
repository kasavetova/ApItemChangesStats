<?php


$dir = "item/*";

$itemIds = array();
$itemsWithId = array();


foreach(glob($dir) as $file)  { 


    
    
     
$name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
$name = substr($name,5);

  array_push($itemIds,$name);
}



$string = file_get_contents("items.json");
     $json = json_decode($string, true);





foreach($itemIds as $id) { 
    
   
   $itemsWithId[$id] = $json['data'][strval($id)]['name'];
    
    
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





foreach ($itemsWithId as $k => $v) {
   
    
    // prepare and bind
$stmt = $conn->prepare("INSERT INTO Items (ItemID, ItemName) VALUES (?, ?)");
$stmt->bind_param("is", $k, $v);

// set parameters and execute
$stmt->execute();

echo "New records created successfully";


    
    
}
$stmt->close();
$conn->close();

echo "done";










?>