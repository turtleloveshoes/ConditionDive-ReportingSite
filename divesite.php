<?php
$name=$_GET['divesite'];
$name=(string)$name;

include 'header.php';
include 'includes/SessionAgent.php';

$con=auth_db();

     $result = mysql_query("SELECT * FROM conditions WHERE post_divesite='". $name ."'");


//$result=mysql_query("select textfiled from record where user_index=1");
$row=mysql_fetch_array($result);
$textfiled=stripslashes($row['textfiled']);
echo($textfield);


echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

echo $name;
        echo "<table border=\"1\" id=\"dive\">
        <tr>
        <th>Diving Site</th>
        <th>State</th>
        <th>Map</th>
        <th>Graph</th>
        <th>Todays Post Count</th>
         
</tr></tr>";
$query="SELECT FROM divesitelist WHERE divesite_name='" . $name ."'";
         while($row = mysql_fetch_array($result)){
   
             
         }
        
echo "
        <th>User</th>
        <th>Time<th>
        <th>Divesite</th>
        <th>Visibility</th>
        <th>Surf</th>
        <th>Surge</th>
        <th>Current</th>
        <th>Temperature</th>
        <th>Overall</th>
             
              
        </tr>";

    while($row = mysql_fetch_array($result))
    {
        echo "<tr id=\"title\">";
        echo "<td>" . $row['post_user_id'] . "</td>";
        echo "<td>" . $row['post_time'] . "</td>";
        echo "<td>" . $row['post_divesite'] . "</td>";
        echo "<td>" . $row['post_vis'] . "</td>";
        echo "<td>" . $row['post_surf '] . "</td>";
        echo "<td>" . $row['post_surge'] . "</td>";
        echo "<td>" . $row['post_curr'] . "</td>";
        echo "<td>" . $row['post_temp'] . "</td>";
        echo "<td>" . $row['post_overall'] . "</td>";
        //echo "<td>" . $row['post_ove'] . "</td>";
        echo '</tr>';
    }
    echo '</table>';
    
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    
    include 'footer.php';

?>