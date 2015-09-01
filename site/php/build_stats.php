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
<body background="http://na.leagueoflegends.com/sites/default/files/upload/art/akali_vs_baron_3.jpg" style="background-size:cover">
    
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
    
  
    

<div id="itemDiv" class="jumbotron" style="background-color: rgba(0, 0, 0, 0.85);width:90%;height:85%; margin:5%;margin-top:6%; position: relative;">
        
    <div style="width:100%;height:50%;margin-left:4%;margin-top:-6%";>
        
         <div style="float:left;width:5.9%;height:50%;margin:3%;margin-left:6%;">  
             <p style="font-size:90%;color:grey">Item 1</p>
        <div id="item1" style="background-color:grey; width:64px;height:64px;"></div>
             <p id="itemName1" style="font-size:90%;"></p>
        </div>
        <div style="float:left;width:5.9%;height:50%;margin:3%;margin-left:6%;background-position: center;">  
             <p style="font-size:90%;color:grey">Item 2</p>
         <div id="item2" style="background-color:grey; width:64px;height:64px;"></div>
             <p id="itemName2" style="font-size:90%;"></p>
        </div>
        <div style="float:left;width:5.9%;height:50%;margin:3%;margin-left:6%;background-position: center;">  
             <p style="font-size:90%;color:grey">Item 3</p>
         <div id="item3" style="background-color:grey; width:64px;height:64px;"></div>
             <p id="itemName3" style="font-size:90%;"></p>
        </div>
        <div style="float:left;width:5.9%;height:50%;margin:3%;margin-left:6%;background-position: center;">  
             <p style="font-size:90%;color:grey">Item 4</p>
         <div id="item4" style="background-color:grey; width:64px;height:64px;"></div>
             <p id="itemName4" style="font-size:90%;"></p>
        </div>
        <div style="float:left;width:5.9%;height:50%;margin:3%;margin-left:6%;background-position: center;">  
             <p style="font-size:90%;color:grey">Item 5</p>
         <div id="item5" style="background-color:grey; width:64px;height:64px;"></div>
             <p id="itemName5" style="font-size:90%;"></p>
        </div>
        <div style="float:left;width:5.9%;height:50%;margin:3%;margin-left:6%;background-position: center;">  
             <p style="font-size:90%;color:grey">Item 6</p>
         <div id="item6" style="background-color:grey; width:64px;height:64px;"></div>
             <p id="itemName6" style="font-size:90%;"></p>
        </div>
   
</div>
    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default" >
    <div class="panel-heading" role="tab" id="headingOne" style="background-color:black;color:white">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Ability Power
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" >
      <div id="abilityPanel" class="panel-body" style="background-color:#141414">
       
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:black;color:white">
      <h4 class="panel-title" >
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
          Cooldown Reduction
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div id="cooldownPanel"class="panel-body" style="background-color:#141414">
        
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree" style="background-color:black;color:white">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Mana
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div id="manaPanel" class="panel-body" style="background-color:#141414">
       
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour" style="background-color:black;color:white">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Mana Regen
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div id="manaRegenPanel" class="panel-body" style="background-color:#141414">
       
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive" style="background-color:black;color:white">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Health
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div id="healthPanel" class="panel-body" style="background-color:#141414">
       
      </div>
    </div>
  </div>
        
        </div>
</div>
    

    
    
    
  
    
    
    
    <script>
        
var itemArray = {
"3072" : "The Bloodthirster",
"2049" : "Sightstone",
"3074" : "Ravenous Hydra",
"3075" : "Thornmail",
"1028" : "Ruby Crystal",
"1029" : "Cloth Armor",
"3078" : "Trinity Force",
"1031" : "Chain Vest",
"1033" : "Null-Magic Mantle",
"3082" : "Warden's Mail",
"3083" : "Warmog's Armor",
"1036" : "Long Sword",
"1026" : "Blasting Wand",
"1038" : "B.F. Sword",
"3087" : "Statikk Shiv",
"3089" : "Rabadon's Deathcap",
"1042" : "Dagger",
"3091" : "Wit's End",
"3092" : "Frost Queen's Claim",
"3093" : "Avarice Blade",
"3096" : "Nomad's Medallion",
"3098" : "Frostfang",
"1051" : "Brawler's Gloves",
"3100" : "Lich Bane",
"1053" : "Vampiric Scepter",
"3102" : "Banshee's Veil",
"1056" : "Doran's Ring",
"1057" : "Negatron Cloak",
"1058" : "Needlessly Large Rod",
"3108" : "Fiendish Codex",
"3110" : "Frozen Heart",
"3111" : "Mercury's Treads",
"3113" : "Aether Wisp",
"3114" : "Forbidden Idol",
"3115" : "Nashor's Tooth",
"3116" : "Rylai's Crystal Scepter",
"3117" : "Boots of Mobility",
"3124" : "Guinsoo's Rageblade",
"3134" : "The Brutalizer",
"3135" : "Void Staff",
"3136" : "Haunting Guise",
"3139" : "Mercurial Scimitar",
"3140" : "Quicksilver Sash",
"3141" : "Sword of the Occult",
"3142" : "Youmuu's Ghostblade",
"3143" : "Randuin's Omen",
"3144" : "Bilgewater Cutlass",
"3145" : "Hextech Revolver",
"3146" : "Hextech Gunblade",
"3151" : "Liandry's Torment",
"3152" : "Will of the Ancients",
"3153" : "Blade of the Ruined King",
"3155" : "Hexdrinker",
"3156" : "Maw of Malmortius",
"3086" : "Zeal",
"3158" : "Ionian Boots of Lucidity",
"3165" : "Morellonomicon",
"3172" : "Zephyr",
"3174" : "Athene's Unholy Grail",
"1043" : "Recurve Bow",
"3190" : "Locket of the Iron Solari",
"3191" : "Seeker's Armguard",
"3706" : "Stalker's Blade",
"3707" : "Enchantment: Warrior",
"3708" : "Enchantment: Runeglaive",
"3709" : "Enchantment: Cinderhulk",
"3198" : "Perfect Hex Core",
"3711" : "Poacher's Knife",
"1027" : "Sapphire Crystal",
"3713" : "Ranger's Trailblazer",
"3714" : "Enchantment: Warrior",
"3715" : "Skirmisher's Sabre",
"3716" : "Enchantment: Runeglaive",
"3717" : "Enchantment: Cinderhulk",
"3718" : "Enchantment: Devourer",
"3719" : "Enchantment: Warrior",
"3720" : "Enchantment: Runeglaive",
"3721" : "Enchantment: Cinderhulk",
"3722" : "Enchantment: Devourer",
"3211" : "Spectre's Cowl",
"3724" : "Enchantment: Runeglaive",
"3725" : "Enchantment: Cinderhulk",
"3726" : "Enchantment: Devourer",
"3222" : "Mikael's Crucible",
"3751" : "Bami's Cinder",
"1052" : "Amplifying Tome",
"3101" : "Stinger",
"1054" : "Doran's Shield",
"3105" : "Aegis of the Legion",
"3285" : "Luden's Echo",
"3800" : "Righteous Glory",
"3801" : "Crystalline Bracer",
"2053" : "Raptor Cloak",
"3301" : "Ancient Coin",
"3303" : "Spellthief's Edge",
"3196" : "The Hex Core mk-1",
"3197" : "The Hex Core mk-2",
"3710" : "Enchantment: Devourer",
"3028" : "Chalice of Harmony",
"3200" : "Prototype Hex Core",
"3723" : "Enchantment: Warrior",
"3401" : "Face of the Mountain",
"3071" : "The Black Cleaver",
"1004" : "Faerie Charm",
"3065" : "Spirit Visage",
"3504" : "Ardent Censer",
"3508" : "Essence Reaver",
"3512" : "Zz'Rot Portal",
"3001" : "Abyssal Scepter",
"3003" : "Archangel's Staff",
"3004" : "Manamune",
"3006" : "Berserker's Greaves",
"3009" : "Boots of Swiftness",
"3010" : "Catalyst the Protector",
"1055" : "Doran's Blade",
"3020" : "Sorcerer's Shoes",
"3023" : "Twin Shadows",
"3024" : "Glacial Shroud",
"3025" : "Iceborn Gauntlet",
"3026" : "Guardian Angel",
"3027" : "Rod of Ages",
"3040" : "Seraph's Embrace",
"3041" : "Mejai's Soulstealer",
"3042" : "Muramana",
"3044" : "Phage",
"3046" : "Phantom Dancer",
"3047" : "Ninja Tabi",
"1039" : "Hunter's Machete",
"1001" : "Boots of Speed",
"3050" : "Zeke's Harbinger",
"3085" : "Runaan's Hurricane",
"3068" : "Sunfire Cape",
"1006" : "Rejuvenation Bead",
"3069" : "Talisman of Ascension",
"3057" : "Sheen",
"1011" : "Giant's Belt",
"3060" : "Banner of Command",
"1018" : "Cloak of Agility",
"3067" : "Kindlegem",
"2044" : "Stealth Ward",
"2045" : "Ruby Sightstone",
"3070" : "Tear of the Goddess",
"3157" : "Zhonya's Hourglass" 
};   
        
        
var apItems = [3078,
1026,
3089,
3092,
3098,
3100,
1056,
1058,
3108,
3113,
3115,
3116,
3124,
3135,
3136,
3145,
3146,
3151,
3152,
2139,
3165,
3174,
3191,
3708,
3198,
3716,
3720,
3724,
1052,
3285,
3303,
3196,
3197,
3200,
3401,
3504,
3001,
3003,
3023,
3025,
3027,
3040,
3041,
3050,
3057,
3060,
3157];
        
var cooldownItems = [3092,
3108,
3110,
3114,
3115,
3134,
3142,
3152,
3158,
3165,
3172,
3174,
3190,
3707,
3708,
3714,
3716,
3719,
3720,
3724,
3222,
3101,
3723,
3401,
3071,
3065,
3504,
3508,
3023,
3024,
3025,
3041,
3050,
3069,
3056,
3060,
3067];
        
        
var manaItems = [3078,
3100,
3110,
3708,
1027,
3716,
3720,
3724,
3800,
3003,
3004,
3010,
3024,
3025,
3027,
3040,
3042,
3050,
3057,
3070];
        
var manaRegenItems = [3092,
3096,
3098,
1056,
3114,
2139,
3165,
3174,
3706,
3711,
3713,
3715,
3222,
3301,
3303,
3028,
1004,
3504,
3003,
3004,
3040,
3042,
3069,
3070];
        
var healthItems = [
2049,
1028,
3078,
3083,
3097,
3102,
1056,
3116,
3136,
3143,
3151,
3190,
3709,
3717,
3721,
3211,
3725,
1054,
3105,
3800,
3801,
3302,
3401,
3071,
3065,
3010,
1055,
3022,
3027,
3044,
3068,
3056,
1011,
3060,
2045];
        
$( document ).ready(function() {
   

for (var key in itemArray) {
  
    
   var img = $('<img>',{class: 'itemBuildIcons' ,src:'http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/' + key + '.png'});
    
    $(img).attr("data-id",key);
    
    
    $(img).on('dragstart', function (event) {
       
    event.originalEvent.dataTransfer.setData('id', $(event.target).attr("data-id"));
});
    
   
    
    
    if($.inArray(parseInt(key), apItems) != -1) {  //Ability Power
        $('#abilityPanel').append($(img));
    
   
 
    } 
    if($.inArray(parseInt(key), cooldownItems) != -1) { 
        $('#cooldownPanel').append($(img));
   
    }
    if($.inArray(parseInt(key), manaItems) != -1) { 
        $('#manaPanel').append($(img));
  

    }
    if($.inArray(parseInt(key), manaRegenItems) != -1) { 
        $('#manaRegenPanel').append($(img));
   
    }
    if($.inArray(parseInt(key), healthItems) != -1) { 
         $('#healthPanel').append($(img));
   
    }
    
    
    
    
}
    
    
        
    
    


});        


        
var drop1 = document.getElementById('item1');

drop1.ondragover = function(evt) {
  evt.preventDefault();
  //console.log("Dragging over 'drop-here'");  
};

drop1.ondrop = function(evt) {
  var id = evt.dataTransfer.getData("id");
    console.log(id);
  $(evt.target).css("background-image", "url(http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + id + ".png)");
  $(evt.target).parent().find("p").css("color","white")
  $('#itemName1').text(itemArray[id]);
};
        

var drop2 = document.getElementById('item2');

drop2.ondragover = function(evt) {
  evt.preventDefault();
  //console.log("Dragging over 'drop-here'");  
};

drop2.ondrop = function(evt) {
  var id = evt.dataTransfer.getData("id");
  $(evt.target).css("background-image", "url(http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + id + ".png)");
  $(evt.target).parent().find("p").css("color","white");
    $('#itemName2').text(itemArray[id]);
};

var drop3 = document.getElementById('item3');

drop3.ondragover = function(evt) {
  evt.preventDefault();
  
};

drop3.ondrop = function(evt) {
  var id = evt.dataTransfer.getData("id");
  $(evt.target).css("background-image", "url(http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + id + ".png)");
  $(evt.target).parent().find("p").css("color","white");
    $('#itemName3').text(itemArray[id]);
};
        
var drop4 = document.getElementById('item4');

drop4.ondragover = function(evt) {
  evt.preventDefault();
  //console.log("Dragging over 'drop-here'");  
};

drop4.ondrop = function(evt) {
  var id = evt.dataTransfer.getData("id");
  $(evt.target).css("background-image", "url(http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + id + ".png)"); 
   $(evt.target).parent().find("p").css("color","white");
    $('#itemName4').text(itemArray[id]);
};

var drop5 = document.getElementById('item5');

drop5.ondragover = function(evt) {
  evt.preventDefault();
  //console.log("Dragging over 'drop-here'");  
};

drop5.ondrop = function(evt) {
  var id = evt.dataTransfer.getData("id");
  $(evt.target).css("background-image", "url(http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + id + ".png)");
   $(evt.target).parent().find("p").css("color","white");
    $('#itemName5').text(itemArray[id]);
};
        
var drop6 = document.getElementById('item6');

drop6.ondragover = function(evt) {
  evt.preventDefault();
  //console.log("Dragging over 'drop-here'");  
};

drop6.ondrop = function(evt) {
  var id = evt.dataTransfer.getData("id");
  $(evt.target).css("background-image", "url(http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + id + ".png)");
   $(evt.target).parent().find("p").css("color","white");
    $('#itemName6').text(itemArray[id]);
};
        
    </script>
    
    
    
   
</body>
</html>
