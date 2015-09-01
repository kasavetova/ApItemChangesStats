<?php

$itemPopularity11 = array();

$items = array();

                                $apItems =[1026
                                        ,1058
                                        ,3089
                                        ,3157
                                        ,3285
                                        ,3116
                                        ,3003
                                        ,3048
                                        ,3027
                                        ,3136
                                        ,3151
                                        ,3135
                                        ,3115
                                        ,3152
                                        ,3165
                                        ,3174];


$itemPopularity14 = array();


include 'dbconnect.php';

    $sql = "SELECT * FROM Item_Popularity_11";

$result = 0;

    if ($stmt = $conn->prepare($sql)) {

    $stmt->execute();
    $result = $stmt->get_result();
   
} else {
    die("Errormessage: ". $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $itemPopularity11[$row["ItemID"]] = $row["TimesBought"];
    }
} 


$stmt->close();



 $sql = "SELECT * FROM Item_Popularity_14";

$result = 0;

    if ($stmt = $conn->prepare($sql)) {

    $stmt->execute();
    $result = $stmt->get_result();
   
} else {
    die("Errormessage: ". $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
         $itemPopularity14[$row["ItemID"]] = $row["TimesBought"];
        
    }
} 


$stmt->close();


$sql = "SELECT * FROM Items";

$result = 0;

    if ($stmt = $conn->prepare($sql)) {

    $stmt->execute();
    $result = $stmt->get_result();
   
} else {
    die("Errormessage: ". $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
         $items[$row["ItemID"]] = $row["ItemName"];
        
    }
} 




                        for($i = 0; $i < count($apItems); $i++) { 
                            if($i != count($apItems)-1) {
                            echo "'" . $items[$apItems[$i]] . "', ";
                            } else { 
                                 echo "'" . $items[$apItems[$i]] . "'";
                            }
                        }
                

$stmt->close();

$conn->close();
?>