
<?php

include 'header.php';
echo '<br/><br/>';

echo '<div class="content">';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    //|| isset($errorMessage)
    //$frisbees = $_GET['diveentries'];

    echo '<h2>Report Conditions</h2>
        <p>Welcome to condition reporting. Please refer to the <a href="about.php">About</a> page for information
        <br /> regarding the conditions and how to read, evaluate and report each.
    
            <table style="padding-left:50px; cell-padding:10px">
		<tr>
                    <td>Dive Site</td>
                    <td>
			<form action="" method="post" name="reportconditions">
                            <select name="diveSite">
                                <option value="" selected="selected">Select dive site...</option>
				<option value="1">Break Water</option>
				<option value="2">Lover\'s Cove</option>
				<option value="3">Coral Street</option>
				<option value="4">Butterfly House</option>
                                <option value="5">Monastary</option>
				<option value="6">Point Lobos</option>
                                <option value="7">Macabe</option>
                            </select>
                    </td>
                </tr>	
                <tr><br/></tr>
                <tr>
                    
        <td><img src="../pictures/vis.svg" alt="Smiley face" width="37" height="37"/></td>
      
                    <td>Visibility</td>
                    <td>
                            <select name="condVis">
                                <option value="" selected="selected">Select visibility...</option>
				<option value="40">above 40\'</option>
				<option value="35">30\' - 35\'</option>
				<option value="25">25\' - 30\'</option>
				<option value="20">20\' - 25\'</option>
				<option value="15">15\' - 20\'</option>
				<option value="10">10\' - 15\'</option>
				<option value="5">5\' - 10\'</option>
				<option value="4">under 5\'</option>
                            </select>
                    </td>
		</tr>
			
		<tr>
                    <td><img src="../pictures/surf.svg" alt="Smiley face" width="37" height="37"/></td>
                    <td>Surf</td>
                    <td>
                            <select name="condSurf">
				<option value="" selected="selected">Select surf...</option>
				<option value="1">Ankle</option>
				<option value="2">Knee</option>
				<option value="3">Waist</option>
				<option value="4">Shoulder</option>
                            </select>
                    </td>
		</tr>
			
		<tr>
                    <td><img src="../pictures/surge.svg" alt="Smiley face" width="37" height="37"/></td>
                    <td>Surge</td>
                    <td>
                            <select name="condSurge">
                                <option value="" selected="selected">Select surge...</option>
				<option value="1">None</option>
				<option value="2">Light</option>
				<option value="3">Moderate</option>
				<option value="4">Strong</option>
				<option value="5">Very Strong</option>
                            </select>
                    </td>
		</tr>
			
                <tr>
                    <td><img src="../pictures/current.svg" alt="Smiley face" width="37" height="37"/></td>
                    <td>Current</td>
                    <td>
                            <select name="condCurrent">
				<option value="" selected="selected">Select current...</option>
				<option value="1">None</option>
				<option value="2">Light</option>
				<option value="3">Moderate</option>
				<option value="4">Strong</option>
				<option value="5">Ripping</option>
                            </select>
                    </td>
		</tr>
			
		<tr>
                    <td><img src="../pictures/temp.svg" alt="Smiley face" width="37" height="37"/></td>
                    <td>Temperature</td>
                    <td>
                            <select name="condTemp">
				<option value="" selected="selected">Select temperature...</option>
				<option value="70">above 70</option>
				<option value="65">60 - 65</option>
				<option value="60">55 - 60</option>
				<option value="55">50 - 55</option>
				<option value="50">under 50</option>
                            </select>
                    </td>
                </tr>
                <tr><br/></tr>
		<tr>
                    <td><img src="../pictures/overall.svg" alt="Smiley face" width="37" height="37"/></td>
                    <td>Overall</td>
                    <td>
                        <input type="radio" name="condOverall" value="3"/> <img src="../pictures/good.png" />
			<input type="radio" name="condOverall" value="2"/> <img src="../pictures/fair.png" />
			<input type="radio" name="condOverall" value="1"/> <img src="../pictures/poor.png" />
                    </td>
		</tr>
                <tr><br/></tr>
                <tr>
                    <td><input type="hidden" value="memberid" name="id" /></td>
                    <td><input type="submit" name="submit" value="Report Conditions" /></form></td>
                </tr>
            </table>
	';
    } 
    
    else {
    $frisbies = $_POST['conditiondive'];
    $varDive = $_POST['diveSite'];
    $varVis = $_POST['condVis'];
    $varSurf = $_POST['condSurf'];
    $varSrge = $_POST['condSurge'];
    $varCurr = $_POST['condCurrent'];
    $varTmp = $_POST['condTemp'];
    $varOvl = $_POST['condOverall'];
    $errorMessage = array();

    if (!isset($varDive) || $_POST['diveSite'] == 'selected') {
        $errorMessage['site'] = "<li>You forgot to select your divesite</li>";
    }
    if (!isset($varVis) || $_POST['condVis'] == 'selected') {
        $errorMessage['vis'] = "<li>You forgot to select the Visibility</li>";
    }
    if (!isset($varSurf) || $_POST['condSurf'] == 'selected') {
        $errorMessage['surf'] = "<li>You forgot to select the Surf</li>";
    }
    if (!isset($varSrge) || $_POST['condSurge'] == 'selected') {
        $errorMessage['surge'] = "<li>You forgot to select the Surge</li>";
    }
    if (!isset($varCurr) || $_POST['condCurrent'] == 'selected') {
        $errorMessage['curr'] = "<li>You forgot to select the Current</li>";
    }
    if (!isset($varTmp) || $_POST['condTemp'] == 'selected') {
        $errorMessage['temp'] = "<li>You forgot to select the Temperature</li>";
    }
    if (!isset($varOvl) || $_POST['condOverall'] == 'selected') {
        $errorMessage['ovl'] = "<li>You forgot to select your Overall rating</li>";
    }
    //if ( $errorMessage == '') {
    //  $destination_url = "reportnow.php?diveentries=$frisbees";
    //header("Location:$destination_url");
    // exit();
    //  }
    //if there are things in the error      
    if (!empty($errorMessage)) /* check for an empty array, if there are errors, they're in this array (note the ! operator) */ {
        echo 'Uh-oh.. a couple of fields are not filled in correctly..<br /><br />';
        echo '<ul>';
        foreach ($errorMessage as $key => $value) /* walk through the array so all the errors get displayed */ {
            echo $value; /* this generates a nice error list */
        }
        echo '</ul>';
        echo '<a href="reportnow.php">go back</a>';
    }
    //if errors are not set add them to the database
    else {
        include 'includes/SessionAgent.php';
        $con = auth_db();
        //which divesite? 

        $query = "SELECT divesite_id,divesite_name FROM divesitelist WHERE divesite_id='$varDive';";

        $result = mysql_query($query);
        if (!$result) {
            echo mysql_error();
        } else {
            while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
                printf("ID: %s  Name: %s", $row[0], $row[1]);
                $diveSiteid = $row[0];
                $diveSite = $row[1];
            }
        }
        mysql_free_result($result);
        //insert stuff in database
        $query = "INSERT INTO conditions (post_user_id, post_divesite_id, post_vis, post_surf, post_surge, post_curr, post_temp, post_overall, post_time, post_date, post_divesite) VALUES(2,'$diveSiteid','$varVis','$varSurf','$varSrge','$varCurr','$varTmp','$varOvl', NOW(), 0, '$diveSite')";
        $result = mysql_query($query);
        if (!$result) {
            echo mysql_error();
        } else {   //mysql_close($con);
            echo $result;
            echo '<br/><br/><br/><br/>';
            echo'<center><h1>Thank you for reporting!</h1>
               <p>Your submission was success. Use this link to view the <a href="averages.php?divesite=' . $diveSite . '">Dive Site</a> page.</p></center>';
        }
    }

    //check for errors
    //good? 
    //k then insert
    //confirm you got it
    //show me you got it
}
include 'footer.php';
?>
