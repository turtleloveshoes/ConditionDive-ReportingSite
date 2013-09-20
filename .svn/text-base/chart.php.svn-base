<?php
$name=$_GET['divesite'];
$name=(string)$name;


include 'includes/SessionAgent.php';
echo '<br/><br/><br/>';

$con=auth_db();

function displaycondAVG($condition,$name){
    $result= mysql_query("SELECT post_overall , AVG(" . $condition . ") as average FROM conditions WHERE post_divesite='" . $name . "' AND post_time >= DATE_SUB(NOW(),INTERVAL 2 DAY)");
      while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                //printf("<td><h2>%s</h2> </td>", $condition); 
                //printf(" %s </td>", $row[1]);
                $diveSiteid=$row[0];
                $CondAvg=$row[1];
                $CondAvg=sprintf("%d",$row[1]);
               
            }
            return $CondAvg;
}
$vis=&displaycondAVG('post_vis', $name);
$surf=displaycondAVG('post_surf', $name);
 $surge=displaycondAVG('post_surge', $name);
 $current=displaycondAVG('post_curr', $name);
$temp=displaycondAVG('post_temp', $name);
 $overall=displaycondAVG('post_overall', $name);
 //echo $timestamp=DATE();
         ?>
<!DOCTYPE>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
   
    <script type="text/javascript">
            var name = <?php echo json_encode($name) ?>;
            var timestamp = <?php echo json_encode($timestamp) ?>;
            var vis = <?php echo json_encode($vis) ?>;
            var surf = <?php echo json_encode($surf) ?>;
            var surg = <?php echo json_encode($surge) ?>;
            var current = <?php echo json_encode($current) ?>;
            var temp= <?php echo json_encode($temp) ?>;
            var count = <?php echo json_encode($overall) ?>;
        </script>
 <script type="text/javascript">
        
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var rowData = [['Day', 'Visibility', 'Surf', 'Surge', 'Current',
                        'Temperature', 'overall'],
                       ['<?php echo date("Y-m-d")?>', Number(vis), Number(surf), Number(surg), Number(current), Number(temp), Number(count)]
                       ];
      
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable(rowData);
      
        // Create and draw the visualization.
        var ac = new google.visualization.ComboChart(document.getElementById('visualization'));
        ac.draw(data, {
          title :'Visual Averages Today',
          width: 600,
          height: 400,
          vAxis: {title: ""},
          hAxis: {title: "Month"},
          seriesType: "bars",
          series: {5: {type: "line"}}
        });
      
      }

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <?php echo "<h1>" . $name ."</h1>"?>
      <div id="visualization" style="width: 600px; height: 400px;"></div>
    
    <div>
        <h2>Conditions Key</h2>
        
        <p>Day; The averages are posted at the end of the day 11:59pm.</p>
        
        <p>Visibility : Visibility in 5' increments from under 5' to over 40'. The higher value is recorded</p>
        
        <p>Surf :Height of the average wave in the set when standing at the water's edge.</p>
            <ul>
            <li>"1"=Ankle</li>
            <li>"2"=Knee</li>
            <li>"3"=Waist</li>
            <li>"4"=Shoulder</li>
            <li>Decimal Average is somewhere between.</li>
            </ul>
        <p>Surge : Surge strength is measured in </p>
            <ul>
             <li>"1"=None</li>
            <li>"2"=Light </li>
            <li>"3"=Moderate<li>
            <li>"4"=Strong</li>
            <li>"5"=Very Strong</li>
            </ul>
       <p> Current: Current is the average strength of a current either at the surface or at depth.</p>
         <ul>
             <li>"1"=None</li>
            <li>"2"=Light </li>
            <li>"3"=Moderate<li>
            <li>"4"=Strong</li>
            <li>"5"=Ripping</li>
         </ul>
      
        <p>Temperature: Temperature is measured in Farienheit </p>
        <ul>
        <li>"70"=above 70 F</li>
	<li>"65"=60 - 65 F</li>
	<li>"60"=55 - 60 F</li>
        <li>"55"=50 - 55 F</li>
        <li>"50"=under 50 F</li>
        </ul>
       <p> Post Count: Total amount of posts received for the day.</p>  
        
        
    </div>
  </body>
</html>


