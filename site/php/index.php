<?php

$itemPopularity11 = array();

$items = array();

$itemPopularity14 = array();

                                   $apItems =[1026
                                        ,1058
                                        ,3089
                                        ,3157
                                        ,3285
                                        ,3116
                                        ,3003
                                        ,3027
                                        ,3136
                                        ,3048
                                        ,3151
                                        ,3135
                                        ,3115
                                        ,3152
                                        ,3165
                                        ,3174];


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


$stmt->close();

$conn->close();
?>


<html lang="en" style="overflow-x: hidden;">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>AP Item Changes Stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

     <link rel="stylesheet" href="../css/site.css">
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    
    
    <script src="../js/site.js"></script>
    
</head>
<body>
    
 
  <div data-100="filter: contrast(100%);opacity:1;" data-175="filter: contrast(200%);opacity:0.8;" id="splash1"  style="background-image:url('http://na.leagueoflegends.com/sites/default/files/upload/art/morgana_vs_ahri_3.jpg');height:100%;width:100%;background-repeat:no-repeat;position:fixed;background-size: cover;"></div>

<div class="jumbotron" style="background:#303030; width:70%;height:40%;margin: auto; position: absolute;top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8);">
      <svg class="chart"></svg>
  </div>
    
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
    
  
    
    <div class="jumbotron" data-0="transform:scale(1,1);opacity:1;" data-100="transform:scale(2,2);opacity:0;" style="background:#303030; width:70%;height:40%;margin: auto; position: absolute;top: 0; left: 0; bottom: 0; right: 0; border-radius: 10px; background-color: rgba(0, 0, 0, 0.8);display:none;">
  <h1>AP Item Statistics</h1>
  </div>
    




<div class="container" id="itemTableDiv" style="margin-top:5%;margin: auto;position: absolute;top: 125%; left: 0; bottom: 0; right: 0;background-color: rgba(0, 0, 0, 0.85);display:none; ">     
  <table class="table" id="itemTable">
    <thead>
      <tr>
        <th >ITEM</th>
        <th>WIN RATE</th>
        <th>POPULARITY</th>
        <th>TOP CHAMPIONS WHO BUY ITEM</th>
      </tr>
    
    <tbody>
        </thead>
    
    
    
    
      <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    <tr>
        <td><img src="../images/item/3040.png" class="itemIcon"  data-toggle="tooltip" title="Seraphs Embrace"></td>
          <td class="col-md-4"><span>62.3% ( <img src="../images/redarrow.png" class="arrow"> -3.2%)   </span></td>
         
           <td class="col-md-6"><span>4.7% ( <img src="../images/green-up-arrow.png" class="arrow"> +1.0%)   </span></td>
          <td class="col-md-2"><span>
                <img src="../images/champion/KogMaw.png" class="champSmallIcon" data-toggle="tooltip" title="Kog Maw">
                <img src="../images/champion/Ahri.png" class="champSmallIcon" data-toggle="tooltip" title="Ahri">
              <img src="../images/champion/Brand.png" class="champSmallIcon" data-toggle="tooltip" title="Brand"></span></td>
      </tr>
    
    
     
 
    </tbody>
  </table>
<div id="bottom_anchor"></div>
</div>


<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>

       <script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
        <script>

            var data = {
                labels: [
                    <?php
                        for($i = 0; $i < count($apItems); $i++) { 
                            if($i != count($apItems)-1) {
                                echo "\"" . $items[$apItems[$i]] . "\", ";
                            } else { 
                                 echo "\"" . $items[$apItems[$i]] . "\"";
                            }
                        }
                    ?>
                    
                ],
                items: [<?php
                        
                        for($i = 0; $i < count($apItems); $i++) { 
                            if($i != count($apItems)-1) {
                                echo $apItems[$i] . ",";
                            } else { 
                                 echo $apItems[$i];
                            }
                        }
                    ?>],
                series: [
                    {
                        label: '5.14',
                        values: [
                
                
                <?php
                        for($i = 0; $i < count($apItems); $i++) { 
                            if($i != count($apItems)-1) {
                                echo $itemPopularity14[$apItems[$i]] . ", ";
                            } else { 
                                 echo $itemPopularity14[$apItems[$i]];
                            }
                        }
                 ?>
                
                
                ]
                    }
                    ,
                    {
                        label: '5.11',
                        values: [
                        <?php
                        for($i = 0; $i < count($apItems); $i++) { 
                            if($i != count($apItems)-1) {
                                echo $itemPopularity11[$apItems[$i]] . ", ";
                            } else { 
                                 echo $itemPopularity11[$apItems[$i]];
                            }
                        }
                 ?>
                        ]
                        
                    
                    }]
            };

            var chartWidth       = 300,
                    barHeight        = 30,
                    groupHeight      = barHeight * data.series.length,
                    gapBetweenGroups = 30,
                    spaceForLabels   = 150,
                    spaceForLegend   = 150;

            // Zip the series data together (first values, second values, etc.)
            var zippedData = [];
            for (var i=0; i<data.labels.length; i++) {
                for (var j=0; j<data.series.length; j++) {
                    zippedData.push(data.series[j].values[i]);
                }
            }

            // Color scale
            var color = d3.scale.category20();
            var chartHeight = barHeight * zippedData.length + gapBetweenGroups * data.labels.length;

            var x = d3.scale.linear()
                    .domain([0, d3.max(zippedData)])
                    .range([0, chartWidth]);

            var y = d3.scale.linear()
                    .range([chartHeight + gapBetweenGroups, 0]);

            var yAxis = d3.svg.axis()
                    .scale(y)
                    .tickFormat('')
                    .tickSize(0)
                    .orient("left");

            // Specify the chart area and dimensions
            var chart = d3.select(".chart")
                    .attr("width", spaceForLabels + chartWidth + spaceForLegend)
                    .attr("height", chartHeight);

            // Create bars
            var bar = chart.selectAll("g")
                    .data(zippedData)
                    .enter().append("g")
                    .attr("transform", function(d, i) {
                        return "translate(" + spaceForLabels + "," + (i * barHeight + gapBetweenGroups * (0.5 + Math.floor(i/data.series.length))) + ")";
                    });

            var j = -1;
            bar.attr("data-itemid", function(d, i) {

                if (i % data.series.length === 0) {
                    j++;
                    return data.items[j];
                }
                else {
                    return ""
                }
            });


            // Create rectangles of the correct width
            bar.append("rect")
                    .attr("fill", function(d,i) { return color(i % data.series.length); })
                    .attr("class", "bar")
                    .attr("height", barHeight - 1)
                    .attr("width", x)
                    .attr("data-toggle","tooltip")
                    .attr("title", function(d) { return d; });
                    
            // Add text label in bar
            /*bar.append("text")
                    .attr("x", function(d) { return x(d) - 50; })
                    .attr("y", barHeight / 2)
                    .attr("fill", "white")
                    .attr("dy", ".35em")
                    .text(function(d) { return d; });*/

            // Draw labels
            /*bar.append("text")
                    .attr("class", "label")
                    .attr("x", function(d) { return - 100; })
                    .attr("y", groupHeight / 2 + 28)
                    .attr("dy", ".35em")
                    .text(function(d,i) {
                        if (i % data.series.length === 0)
                            return data.labels[Math.floor(i/data.series.length)];
                        else
                            return ""})
            .style("fill","white");*/
            
                        
            //append icons
             bar.append("svg:image")
                    .attr("xlink:href", function(d, i) {
                        if (i % data.series.length === 0) {
                            return "http://ddragon.leagueoflegends.com/cdn/5.13.1/img/item/" + d3.select(bar[0][i]).attr("data-itemid") + ".png"
                        }
                        else {
                            return ""
                        }})
                    .attr("width", 50)
                    .attr("height", 50)
                    .attr("class", "item-icon")
                    .attr("x", function(d){ return -67; })
                    .attr("y", (groupHeight / 2) - 31)
                    .attr("dy", ".35em")
                    .attr("data-toggle","tooltip")
                    .attr("title","lol")
                    .style("display", function(d, i) {
                        if (i % data.series.length === 0)
                            return "";
                        else
                            return "none"
                    });

            chart.append("g")
                    .attr("class", "y axis")
                    .attr("transform", "translate(" + spaceForLabels + ", " + -gapBetweenGroups/2 + ")")
                    .call(yAxis);

            // Draw legend
            var legendRectSize = 18,
                    legendSpacing  = 4;

            var legend = chart.selectAll('.legend')
                    .data(data.series)
                    .enter()
                    .append('g')
                    .attr('transform', function (d, i) {
                        var height = legendRectSize + legendSpacing;
                        var offset = -gapBetweenGroups/2;
                        var horz = spaceForLabels + chartWidth + 40 - legendRectSize;
                        var vert = i * height - offset;
                        return 'translate(' + horz + ',' + vert + ')';
                    });

            legend.append('rect')
                    .attr('width', legendRectSize)
                    .attr('height', legendRectSize)
                    .style('fill', function (d, i) { return color(i); })
                    .style('stroke', function (d, i) { return color(i); });

            legend.append('text')
                    .attr('class', 'legend')
                    .attr('x', legendRectSize + legendSpacing)
                    .attr('y', legendRectSize - legendSpacing)
                    .attr('fill','white')
                    .text(function (d) { return d.label; });


        </script>

<script type="text/javascript">
	skrollr.init();
    $( document ).ready(function() {
    
    $('[data-toggle="tooltip"]').tooltip();
    
});
    
	</script>
</body>


</html>





