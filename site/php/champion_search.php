<html lang="en" style="
    overflow-x: hidden; 
    overflow-y: hidden;
">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>AP Item Changes Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

     <link rel="stylesheet" href="../css/site.css">
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
  
    
</head>
<body background="http://na.leagueoflegends.com/sites/default/files/upload/art/teambuilder-wallpaper.jpg" style="background-size:cover">

    
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
    
  
    

<div id="championSearchDiv" class="jumbotron" style="background-color: rgba(0, 0, 0, 0.85);width:90%;height:85%; margin:5%;margin-top:6%; position: relative;">
<form class="navbar-form navbar" role="search">
  <div class="form-group" style="width: 100%; 
    text-align:center">
   <input type="text" class="form-control" placeholder="Search AP Champion" id="championSearch">    
  </div>
    
</form>
    <div id="championList"></div>
    </div>
    
    
    
 <script>
     var champions = ["Ahri","Akali","Amumu","Anivia","Annie","Azir","Blitzcrank","Brand","Cassiopeia",
"Chogath","Diana","Ekko","Elise","Ezreal","FiddleSticks","Fizz","Galio"];

var linkList; 
    $( document ).ready(function() {
     champions.forEach(function(entry) {
    $('#championList').append($('<img>',{id: entry.toLowerCase() + 'Icon',class: 'champSearchIcon' ,src:'../images/champion/' + entry + '.png'}))
    $("#" + entry.toLowerCase() + 'Icon').wrap($('<a>',{
   href: 'champion_stats.php?champion=' + entry
}));
         
         
        $("#" + entry.toLowerCase() + 'Icon').hover(
  function() {
    $( this ).css("transform","scale(1.2,1.2)");

  }, function() {
      $( this ).css("transform","scale(1,1)");

  }
);
});
        

      $('#championSearch').on('input', function() {
          champions.forEach(function(entry) {
    $('#' + entry.toLowerCase() + 'Icon').show();
});        
          
          var input = $('#championSearch').val().replace(/\s+/, "");
          var currentList = $('#championList').children();
          for(var i = 0; i < champions.length;i++) { 
              if (!(champions[i].toLowerCase().indexOf(input.toLowerCase()) >= 0)) { 
                  $(currentList[i]).hide();
              } else { 
                  $(currentList[i]).show();
              }
          }
    
});
        
    });
    </script>   
</body>
</html>
