<?php

include 'header.php';
echo'<div class="img">
  <a target="_blank" href="about.php">
  <img src="diving.jpg" alt="Klematis" width="110" height="90" />
  </a>
  <div class="desc"><h2>About Conditions<h2></div>
</div>
<div class="img">
  <a target="_blank" href="report.php">
  <img src="diving.jpg" alt="Klematis" width="110" height="90" />
  </a>
  <div class="desc"><h2>Report Condtions<h2></div>
</div>
<div class="img">
  <a target="_blank" href="graph.php">
  <img src="diving.jpg" alt="Klematis" width="110" height="90" />
  </a>
  <div class="desc"><h2>View Conditions<h2></div>
</div><!--
<div class="img">
  <a target="_blank" href="f">
  <img src="diving.jpg" alt="Klematis" width="110" height="90" />
  </a>
  <div class="desc"><h2>Share Conditions<h2></div>-->
</div>';

 include '..examples/index.php';
$con=auth_db();

        mysql_select_db("conditiondive", $con);

        $result = mysql_query("SELECT * FROM divesitelist;");
        echo '<h2>Current Dive Sites</h2>';
        echo '<table border="1" id="dive">
        <tr>
        <th>Diving Site</th>
        <th>State</th>
         <th>Map</th>
          <th>Graph</th>
           <th>Today\'s Post Count</th>
        <th>Visibility</th>
         <th>Surf</th>
          <th>Surge</th>
           <th>Current</th>
            <th>Temperature</th>
             <th>Overall</th>
              
        </tr>';

    while($row = mysql_fetch_array($result))
    {
        echo '<tr id=\"title\">';
        echo "<td>" . $row['divsite_id'] . "</td>";
        echo "<td>" . $row['divesite_state'] . "</td>";
        echo "<td>" . $row['divesite_postcounter'] . "</td>";
       echo "</tr>";
        echo "<tr>";
         echo "<td>" . $row['divesite_postcounter'] . "</td>";
         echo "<td>" . $row['divesite_postcounter'] . "</td>";
         echo "<td>" . $row['vis_avg '] . "</td>";
          echo "<td>" . $row['surf_avg '] . "</td>";
           echo "<td>" . $row['surg_avg'] . "</td>";
            echo "<td>" . $row['curr_avg'] . "</td>";
             echo "<td>" . $row['temp_avg'] . "</td>";
              echo "<td>" . $row['ovl_avg'] . "</td>";
              
                
        echo '</tr>';
     }
    echo '</table>';

    mysql_close($con);
        

include 'footer.php';
?>
