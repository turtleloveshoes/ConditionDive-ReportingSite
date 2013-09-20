<?php

include '../includes/SessionAgent.php';
$con = auth_db();

echo '<div class="content">';
    echo '<h2>Welcome!</h2><br />';


echo '<div class="register">';

//first, check if the user is already signed in. If that is the case, there is no need to display this page
if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
    echo 'Welcome, ' . $_SESSION['user_email'] . ' to Condition:Dive!
      <br/><br /> The beginning!! Condition:Dive is a site where members may make or view scuba diving condition reports.
                    

      <br /><br />Please refer to the <a href="../about.php">About</a> page to see the available conditions and how they are rated.
      Some other links to more information, external from this site, are also provided at the bottom of each page for your convenience.
      <br /><br />We value your feedback, so please visit the <a href="../contact.php">Contact</a> page with questions, comments and concerns. 
                                            

      <br /><br />You may also now proceed to <a href="../reportnow.php">Report Conditions</a> to make a report.';
    echo '<br/>Or proceed to the <a href="../viewConditions.php">View Conditions</a> page to see what conditions are like today! ';
} else {
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        /* the form hasn't been posted yet, display it
          note that the action="" will cause the form to post to the same page it is on */
        echo '<p>Please enter your credentials to login to the site or <a href="register.php">register now</a>.<br/>
            NOTE: You must be logged in to view and report.</p>';
        echo '<form method="post" action="index.php">
                        <table>
                            <tr>
                                <td>Email:</td>
                                <td><input type="text" name="user_email" /></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="user_pass"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Sign in" /></td>
                            </tr>    
                        </table>
                      </form>';


    } else {
        /* so, the form has been posted, we'll process the data in three steps:
          1.	Check the data
          2.	Let the user refill the wrong fields (if necessary)
          3.	Varify if the data is correct and return the correct response
         */
        $errors = array(); /* declare the array for later use */

        if (!isset($_POST['user_email'])) {
            $errors[] = 'The username field must not be empty.';
        }

        if (!isset($_POST['user_pass'])) {
            $errors[] = 'The password field must not be empty.';
        }

        if (!empty($errors)) /* check for an empty array, if there are errors, they're in this array (note the ! operator) */ {
            echo 'Uh-oh.. a couple of fields are not filled in correctly.<br />Please respond to all conditions.<br />';
            echo '<ul>';
            foreach ($errors as $key => $value) /* walk through the array so all the errors get displayed */ {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        } else {
            //the form has been posted without errors, so save it
            //notice the use of mysql_real_escape_string, keep everything safe!
            //also notice the sha1 function which hashes the password
            $pass = $_POST['user_pass'];
            $email = $_POST['user_email'];
            $sql = "SELECT 
						user_id,
						user_email,
						user_level
					FROM
						users
					WHERE
						user_email = '" . $email . "'
					AND
						user_password = '" . $pass . "'";

            $result = mysql_query($sql);

            if (!$result) {
                //something went wrong, display the error
                echo 'Something went wrong while signing in. Please try again later.';
                echo mysql_error(); //debugging purposes, uncomment when needed
            } else {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be signed in
                //2. the query returned an empty result set, the credentials were wrong
                if (mysql_num_rows($result) == 0) {
                    echo 'You have supplied an incorrect username/password combination. Please try again.';
                } else {
                    //set the $_SESSION['signed_in'] variable to TRUE
                    $_SESSION['signed_in'] = true;

                    //we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
                    while ($row = mysql_fetch_assoc($result)) {
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['user_email'] = $row['user_email'];
                        $_SESSION['user_level'] = $row['user_level'];
                    }

                    echo '<span style="font-weight:bold">Welcome, ' . $_SESSION['user_email'] . ' to Condition:Dive!</span>
                                            <br/><br /> Second one!! Condition:Dive is a site where members may make or view scuba diving condition reports.
                    

                                            <br /><br />Please refer to the <div class="menu" style="width:50px;"><ul class="menu"><li><a href="../about.php">About</a></li><li></li></ul></div><br/>     <span style="font-weight:italic;">to see the available conditions </span>and how they are rated.
                                            Some other links to more information, external from this site, are also provided at the bottom of each page for your convenience.
                                            <br /><br />We value your <span style="font-weight:bold">feedback</span>, so please visit the<div class="menu" style="width:50px;"><ul class="menu"><li><a href="../contact.php">Contact</a></li><li></li></ul></div><br/>     with questions, comments and concerns. 
                                            

                                            <br /><br />You may also now proceed to <div class="menu" style="width:50px;"><ul class="menu"><li><a href="../reportnow.php">Report Conditions</a></li><li></li></ul></div><br/>to make a report.';
                    echo '<br/>Or proceed to the <div class="menu" style="width:70px;"><ul class="menu"><li><a href="../viewConditions.php">View Conditions</a></li><li></li></ul></div> <br/>   to see what conditions are like today! ';
                }
            }
        }
    }
}
?>
