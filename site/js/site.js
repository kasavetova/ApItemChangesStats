var champions = ["Ahri","Akali","Amumu","Anivia","Annie","Azir","Blitzcrank","Brand","Cassiopeia",
"Chogath","Diana","Ekko","Elise","Ezreal","FiddleSticks","Fizz","Galio"];

var linkList; 


$(document).ready( function() {
      linkList = $('#linkList').children();
     $("tr:even").css("background-color", "rgba(0, 0, 0, 0.85");
      $("tr:odd").css("background-color", "rgba(0, 0, 0, 0.85");
      $("th").css("background-color", "rgba(0, 0, 0, 0.5");
     $("tr").css("color", "#ffffff");
      $("td").css("vertical-align", "middle");
     
    

    champions.forEach(function(entry) {
    $('#championList').append($('<img>',{id: entry.toLowerCase() + 'Icon',src:'../images/champion/' + entry + '.png'}))
    
    $("#" + entry.toLowerCase()).wrap($('<a>',{
   href: 'champion_stats.php'
}));
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
              }
          }
    
});
  });

  
function moveScroll(){
    var scroll = $(window).scrollTop();
    var anchor_top = $("#itemTable").offset().top;
    var anchor_bottom = $("#bottom_anchor").offset().top;
    if (scroll>anchor_top && scroll<anchor_bottom) {
    clone_table = $("#clone");
         $("#navBar").css("display","none");
    if(clone_table.length == 0){
        
        clone_table = $("#itemTable").clone();
        clone_table.attr('id', 'clone');
        clone_table.css({position:'fixed',
                 'pointer-events': 'none',
                 top:0});
        clone_table.width($("#itemTable").width());
        $("#itemTableDiv").append(clone_table);
        $("#clone").css({visibility:'hidden'});
        $("#clone thead").css("visibility", "visible");
        $("#clone thead").css("pointer-events", "auto");
        
    }
    } else {
        $( "#clone" ).fadeOut( "fast", function() {
     $("#clone").remove();
     $("#navBar").fadeIn("fast");
           
  });
        

   
    }
    
    
    
}


$(window).scroll(moveScroll); 
 


 
