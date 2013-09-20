<?php
/*this is the second page that will eventually replace divesite so it shows the averages*/
$name=$_GET['divesite'];
$name=(string)$name;
include 'header.php';

echo '<br/><br/><br/>';

include 'includes/SessionAgent.php';
$con=auth_db();
echo "<div class=\"content\">";
echo '<h1>Today\'s Averages at' . $name . '</h1>'; 
/*Function to calculate averages at this moment*/
echo '<table border="0" align="center" cellpadding="5px"><th>
        <tr><img src="../pictures/vis.svg" alt="Smiley face" width="75" height="75"/></tr>
         <tr><img src="../pictures/surf.svg" alt="Smiley face" width="75" height="75"/></tr>
          <tr><img src="../pictures/surge.svg" alt="Smiley face" width="75" height="75"/></tr>
           <tr><img src="../pictures/current.svg" alt="Smiley face" width="75" height="75"/></tr>
            <tr><img src="../pictures/temp.svg" alt="Smiley face" width="75" height="75"/></tr>
             <tr><img src="../pictures/overall.svg" alt="Smiley face" width="75" height="75"/></tr>
    </th>
        <th>
        </table><br/>';
function displaycondAVG($condition,$name){
$i=0;
$j=0;
    $result= mysql_query("SELECT post_overall , AVG(" . $condition . ") as average FROM conditions WHERE post_divesite='" . $name . "' AND post_time >= DATE_SUB(NOW(),INTERVAL 2 DAY)");
echo '<table border="0" align="left"><th><tr style="background:#09C;">';
      while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                printf("<td width=\"75\"><h3>%s</h3></td>", $condition); 
                printf("</tr>");
                if($row[1]>10){
                    printf("<td style=\"background:green;\">");
                }
                else if($row[1]<2){
                    printf("<td style=\"background:red;\">");
                }
                else{
                    printf("<td style=\"background:yellow;\">");
                }
                printf(" %s </td>", $row[1]);
                $diveSiteid[$i++]=$row[0];
                $CondAvg[$j++]=$row[1];    
            }
echo "</tr></th></table>";
    return $row;
}

$vis=&displaycondAVG('post_vis', $name);
$surf=displaycondAVG('post_surf', $name);
$surge=displaycondAVG('post_surge', $name);
$current=displaycondAVG('post_curr', $name);
$temp=displaycondAVG('post_temp', $name);
$overall=displaycondAVG('post_overall', $name);
$timestamp=DATE();

/*Table to display averages*/


/*table for two coloums*/

echo "<table border=\"0\"><td>";
echo '<div class="left">';
include 'weather.php';
echo '</div>';
echo '</td><td>';
echo "<h1>" . $name . "</h1>";

$long = 36.591;    // North
$lat = -121.873;    // East
$offset = 1;    // difference between GMT and local time in hours

$zenith=90+50/60;
echo "<br><p>Sunrise: ".date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
echo "<br>Sunset: ".date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
/*echo "<table border=\"1\" id=\"dive\">
        <tr>
        <th>Time<th>
        <th>Divesite</th>
          <th>Avg Visibility</th>
           <th>Avg Surf</th>
            <th>Avg Surge</th>
             <th>Avg Current</th>
             <th>Avg Temperature</th>
              <th>Avg Overall</th>
        </tr>
             <tr>
        <th>". $timestamp ."<th>
        <th>". $name ."</th>
          <th>'". printf("%d",$vis[1]) ."'</th>
           <th>". printf("%d",$surf[1]) ."</th>
            <th>". printf("%d",$surge[1]) ."</th>
             <th>". printf("%s",$current[1]) ."</th>
             <th>". printf("%s",$temp[1]) ."</th>
              <th>". printf("%s",$overall[1]) ."</th>
        </tr>";
echo '</table>';


/*Table to display posts from this divesite*/   
 $result = mysql_query("SELECT * FROM conditions WHERE post_divesite='". $name ."';");


$result=mysql_query("select textfiled from record where user_index=1");
$row=mysql_fetch_array($result);
$textfiled=stripslashes($row['textfiled']);
echo($textfield);
/*main info*/
/*calc postcount the first commented query is for historical count if want to add later*/
//$query="SELECT post_divesite, COUNT(post_overall) FROM conditions WHERE post_divesite='" . $name . "' ";
$query="SELECT post_divesite, COUNT(post_overall) FROM conditions WHERE post_divesite='" . $name . "' AND post_time >= DATE_SUB(NOW(),INTERVAL 2 DAY)";

//$query = "SELECT type, COUNT(WHERE post_divesite='" . $name . "') FROM conditions GROUP BY type"; 
	 
$result = mysql_query($query) or die(mysql_error());
    $i=0;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
           // printf("ID: %s  Name: %s", $row[0], $row[1]); 
            $diveSiteid[$i]=$row[0];
            $postcount[$i]=$row[1];
        }
$query="";
        $j=0;
        while($j<$i){
            $query="SELECT divesitelist INSERT INTO divesite_postcounter VALUES(" . $postcount[$j] .") WHERE divesite_name='" . $divesiteid[$j] . "'";
            
        }
echo '<br/><br/>';

        echo "<table border=\"0\" id=\"dive\">
        <tr style=\"background:#09C; font-size:14pt; color:black;\">
        <th>Diving Site</th>
        <th>State</th>
        <th>Map</th>
        <th>Graph</th>
        <th>Todays Post Count</th>
         
</tr>";
        
echo"<tr>
          <th>". $name ."</th>
          <th> Ca,USA </th>
          <th><a href=\"../googlemap.php?divesite=" . $name . "\"> Map</a></th>
          <th><a href=\"../graph.php?divesite=" . $name . "\">". $name . "Graph</a></th>
          <th>" . $postcount . "</th>

        </tr></table>";
  echo '<br/><br/>';
/*todays posts*/
echo "<h2> Today's Posts</h2>";
echo"<table border=\"0\" id=\"dive\"><tr style=\"background:#09C; font-size:14pt; color:black;\">
        <th>User</th>
        <th>Time</th>
        <th>Visibility</th>
        <th>Surf</th>
        <th>Surge</th>
        <th>Current</th>
        <th>Temperature</th>
        <th>Overall</th>
              
              
    </tr>";

$query="SELECT *FROM conditions WHERE post_divesite='" . $name ."' AND post_time >= DATE_SUB(NOW(), INTERVAL 1 DAY)";
$result=mysql_query($query); 
while($row = mysql_fetch_array($result))
    {
        echo "<tr id=\"title\">";
        echo "<td>" . $row['post_user_id'] . "</td>";
        echo "<td>" . $row['post_time'] . "</td>";
        echo "<td>" . $row['post_vis'] . "</td>";
        echo "<td>" . $row['post_surf'] . "</td>";
        echo "<td>" . $row['post_surge'] . "</td>";
        echo "<td>" . $row['post_curr'] . "</td>";
        echo "<td>" . $row['post_temp'] . "</td>";
        echo "<td>" . $row['post_overall'] . "</td>";
      
              
              
                
        echo '</tr>';
     }
    echo '</table>';
  
  echo "<h2>Historical Data</h2>";

echo"<table border=\"0\" id=\"dive\"><tr style=\"background:#09C; font-size:14pt; color:black;\">
        <th>User</th>
        <th>Time</th>
        <th>Visibility</th>
        <th>Surf</th>
        <th>Surge</th>
        <th>Current</th>
        <th>Temperature</th>
        <th>Overall</th>
      </tr>";

$query="SELECT *FROM conditions WHERE post_divesite='" . $name ."'";
$result=mysql_query($query); 
while($row = mysql_fetch_array($result))
    {
        echo "<tr id=\"title\">";
        echo "<td>" . $row['post_user_id'] . "</td>";
        echo "<td>" . $row['post_time'] . "</td>";
        echo "<td>" . $row['post_vis'] . "</td>";
        echo "<td>" . $row['post_surf'] . "</td>";
        echo "<td>" . $row['post_surge'] . "</td>";
        echo "<td>" . $row['post_curr'] . "</td>";
        echo "<td>" . $row['post_temp'] . "</td>";
        echo "<td>" . $row['post_overall'] . "</td>";     
                
        echo '</tr>';
     }
    echo '</table>';
    /*column2 */
    echo '</td></table>';
     echo "<br/><br/><br/>";
 
     include 'footer.php';
     echo '</div>';
/*need to add a function that saves the averages at the end of the day*/
     
     ?>