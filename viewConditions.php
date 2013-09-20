<?php

include 'includes/SessionAgent.php';
include 'header.php';
echo '<br/><br/>';
?>


<?php

$con = auth_db();

$result = mysql_query("SELECT * FROM divesitelist;");

echo '<div class="content">';
echo "<h2>Dive Site Locations</h2>";
echo '<p>Click on a dive site name for more information about that location.
            <br />Please refer to the <a href="about.php">Evaluate Conditions</a> page for information about how to read conditions.</p>';
echo "<table border=\"0\" id=\"dive\" width=\"760px\">
        <tr style=\"background:#1AC6FF; font-size:14pt; color:black;\">
            <th>Dive Site</th>
            <th>State</th>
            <th>Map</th>
            <th>Average Graph</th>
            <th>Today's Post Count</th>
            <!-- <th>Visibility</th>
            <th>Surf</th>
            <th>Surge</th>
            <th>Current</th>
            <th>Temperature</th>
            <th>Overall</th>  -->
        </tr>";


while ($row = mysql_fetch_array($result)) {
    echo "<tr id=\"title\" style=\"background-color:grey; padding:2px; color:black;\">";
    echo "<td> <a href=\"../averages.php?divesite=" . $row['divesite_name'] . "\">" . $row['divesite_name'] . "</a></td>";
    echo "<td>" . $row['divesite_state'] . "</td>";
    echo "<td> <a href=\"../googlemap.php?divesite=" . $row['divesite_name'] . "\"> Map</a></td>";
    echo "<td> <a href=\"../graph.php?divesite=" . $row['divesite_name'] . "\">". $row['divesite_name'] . " Graph</a></td>";
    echo "<td>" . $row['divesite_postcounter'] . "</td>";
}

/* these values need to be called down from another average query below */
/*
  $result= mysql_query("SELECT post_overall , AVG(" . $condition . ") as average FROM conditions WHERE post_divesite='" . $name . "' AND post_time >= DATE_SUB(NOW(),INTERVAL 2 DAY)");
  while($row = mysql_fetch_array($result, MYSQL_NUM)) {
  printf("<td> %s </td>", $row[1]);

  $diveSiteid=$row[0];
  $CondAvg=$row[1];
  }


  echo "<td>" . $vis . "</td>";
  echo "<td>" . $surf . "</td>";
  echo "<td>" . $surge . "</td>";
  echo "<td>" . $current . "</td>";
  echo "<td>" . $temp . "</td>";
  echo "<td>" . $timestamp . "</td>";
 */

echo '</tr>';
echo '</table>';

mysql_close($con);


include 'footer.php';
?>

