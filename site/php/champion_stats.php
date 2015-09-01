<?php
    $champion = $_GET['champion'];
    $splash1 = 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/' . $champion . '_0.jpg';
    $splash2 = 'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/' . $champion . '_1.jpg';
    $winrate_before = 0;
    $averageKills_before = 0;
    $averageAssists_before = 0;
    $winrate_after = 0;
    $averageKills_after = 0;
    $averageAssists_after = 0;
    $magicDamageDealt_before = 0;
    $magicDamageDealt_after = 0;
    $averageDeaths_before = 0;
    $averageDeaths_after = 0;
    $maxChampDmgDone_before = 32288;
    $maxChampDmgDone_after = 32288;    



    include 'dbconnect.php';

    $sql = "SELECT * FROM Champion_KDA_11 kda INNER JOIN Champions c ON kda.ChampionID = c.ChampionID WHERE ChampionName = (?)";

$result = 0;

    if ($stmt = $conn->prepare($sql)) {

    $stmt->bind_param("s",$champion);
    $stmt->execute();
    $result = $stmt->get_result();
   
} else {
    die("Errormessage: ". $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $averageKills_before = $row["Kills"];
        $averageAssists_before = $row["Assists"];
        $winrate_before = $row["WinRate"];
        $magicDamageDealt_before = $row["ChampMagicDmgDone"];
        $averageDeaths_before = $row["Deaths"];
        
    }
} 


$stmt->close();

    $sql = "SELECT * FROM Champion_KDA_14 kda INNER JOIN Champions c ON kda.ChampionID = c.ChampionID WHERE ChampionName = (?)";

$result = 0;

    if ($stmt = $conn->prepare($sql)) {

    $stmt->bind_param("s",$champion);
    $stmt->execute();
    $result = $stmt->get_result();
   
} else {
    die("Errormessage: ". $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $averageKills_after = $row["Kills"];
        $averageAssists_after = $row["Assists"];
        $winrate_after = $row["WinRate"];
        $magicDamageDealt_after = $row["ChampMagicDmgDone"];
        $averageDeaths_after = $row["Deaths"];
        
    }
} 







$conn->close();
    
?>



<html lang="en">
<head>
    
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>AP Item Changes Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

     <link rel="stylesheet" href="../css/site.css">
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    
    
    <style>
        
    </style>
    
</head>
<body>

  <nav id="navBar" class="navbar-inverse fixed navbar-fixed-top" style="height:10%;width:100%;background-color: rgba(0, 0, 0, 0.85)">
  <div class="container-fluid">
      <a class="navbar-brand">Name plz</a>
      <a class="navbar-brand navbar-right">By Mayur & Kristin</a>

    <div>
      <ul id="linkList" class="nav navbar-nav k" style="cursor:pointer;">
        <li><a href="index.php"> Item Statistics</a></li>
          <li><a href="champion_search.php">Champion Statistics</a></li>
           <li><a href="build_stats.php">Build Statistics</a></li>
        <li><a >About</a></li>
      </ul>
    </div>
  </div>
</nav>
  
 

  
     <div id="splash2"  data-1300="left:100%" data-1400="left:0%" data-1560="filter: blur(0px);" data-1650="filter: blur(5px);" style="background-image:url('<?php echo $splash2; ?>');height:100%;width:100%;background-repeat:no-repeat;position:fixed;left:100%;background-size:cover;"></div>

 <div id="splash1"    data-700="opacity:1" data-900="opacity:0.6" data-1300="right:0%" data-1400="right:100%" style="background-image:url('<?php echo $splash1; ?>');height:100%;width:100%;background-repeat:no-repeat;position:fixed;background-size:cover;"></div>
 
   

 <div data-0="top:0%" data-300="top:-50%" class="jumbotron" style="background:#303030; width:50%;height:35%;margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8);">
  <h1 style="color:white"><?php echo $champion; ?> Statistics</h1>
  </div>
    
    <div data-200="opacity:0" data-300="opacity:1" data-600="transform: translate(0px,0px);" data-700="transform: translate(800px,0px);" style="background:#303030; width:25%;height:25%;margin: auto;
  position: absolute; margin-top:7%;top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8); position:fixed;opacity:0;">
        <h3>Winrate</h3>
        <div style="width:90%;height:50%;margin:0 auto;">
            <span style="float:left;width:40%;height:20%;font-size:80%;color:grey;">PATCH 5.11</span>
            <span style="float:right;width:40%;height:20%;font-size:80%;color:grey;">PATCH 5.14</span><br>
            <span style="display:inline-block; width:10%;"><img style="width:22px;"src="<?php if($winrate_before < $winrate_after) {  echo "../images/green-up-arrow.png";} else {echo "../images/redarrow.png"; } ?>"></span>
            <span style="float:left;width:40%;height:80%;font-size:150%;"><?php echo $winrate_before; ?>%</span>
            <span style="float:right;width:40%;height:80%;font-size:150%;"><?php echo $winrate_after; ?>%</span>
        </div>
        
  </div>
    
    
    
    <div data-300="opacity:0" data-400="opacity:1;" data-600="transform: translate(0px,0px);" data-700="transform: translate(800px,0px);" style="background:#303030; width:25%;height:25%;margin: auto;
  position: absolute; margin-top:20%;
  top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8); position:fixed;opacity:0;">
        <h3>Average Kills</h3>
        <div style="width:90%;height:50%;margin:0 auto;">
            <span style="float:left;width:40%;height:20%;font-size:80%;color:grey;">PATCH 5.11</span>
            <span style="float:right;width:40%;height:20%;font-size:80%;color:grey;">PATCH 5.14</span><br>
            <span style="display:inline-block; width:10%;"><img style="width:22px;"src="<?php if($averageKills_before < $averageKills_after) {  echo "../images/green-up-arrow.png";} else {echo "../images/redarrow.png"; } ?>"></span>
            <span style="float:left;width:40%;height:80%;font-size:150%;"><?php echo $averageKills_before; ?></span>
            <span style="float:right;width:40%;height:80%;font-size:150%;"><?php echo $averageKills_after; ?></span>
        </div>
        
  </div>
    

     <div data-400="opacity:0" data-600="opacity:1; transform: translate(0px,0px);" data-700="transform: translate(800px,0px);"  style="background:#303030; width:25%;height:25%;margin: auto;
  position: absolute; margin-top:33%;
  top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8); position:fixed;opacity:0;">
        <h3>Average Assists</h3>
        <div style="width:90%;height:50%;margin:0 auto;">
            <span style="float:left;width:40%;height:20%;font-size:80%;color:grey;">PATCH 5.11</span>
            <span style="float:right;width:40%;height:20%;font-size:80%;color:grey;">PATCH 5.14</span><br>
            <span style="display:inline-block; width:10%;"><img style="width:22px;"src="<?php if($averageAssists_before < $averageAssists_after) {  echo "../images/green-up-arrow.png";} else {echo "../images/redarrow.png"; } ?>"></span>
            <span style="float:left;width:40%;height:80%;font-size:150%;"><?php echo $averageAssists_before; ?></span>
            <span style="float:right;width:40%;height:80%;font-size:150%;"><?php echo $averageAssists_after; ?></span>
        </div>
        
  </div>
    
    
    
    <div data-900="opacity:0; display:inline;" data-1000="opacity:1;" data-1300="transform: translate(0px,0px)" data-1400="transform: translate(-1500px,0px)" style="background:#303030; width:80%;height:80%;margin: auto;
  position: absolute; margin-top:6%;
  top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8); position:fixed;display:none">
        <div style="width:90%;height:50%;margin:0 auto;">
        <br>
           
            <h1> Average Magic Damage Dealt</h1>
             <br>
            <h3 style="color:#999999;">PATCH 5.11</h3>
           <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-1000="width:0%" data-1050="width: <?php echo ($magicDamageDealt_before/$maxChampDmgDone_before)*100 ?>%;">
    <?php echo $magicDamageDealt_before;?> 
  </div>
</div>
            <br>
            <h3 style="color:#999999;">PATCH 5.14</h3>
            <br>
            <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-1000="width:0%" data-1050="width: <?php echo ($magicDamageDealt_after/$maxChampDmgDone_after )*100 ?>%;">
    <?php echo $magicDamageDealt_after;?> 
  </div>
</div>
                    
            
        </div>
        
  </div>

    
<div  data-1650="transform: translate(-150%,0)" data-1750="transform: translate(0%,0)"  style="background:#303030; width:80%;height:80%;margin: auto; position: absolute; margin-top:6%;top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8); position:fixed; transform: translate(-150%,0)">
        <div style="width:90%;height:50%;margin:0 auto;">
        <br>  
            <h1> Some other shit </h1>
        </div>
        
  </div>
   
  
 
    

  
      
      
 

<script type="text/javascript">
	skrollr.init();
</script>   
</body>
</html>
