<?php


include'examples/index.php';
$con=auth_db();

include 'header.php';
echo '<br/><br/>';

       echo '<div class="content">';
       echo '<h2>Registration </h2>';
       
   if($_SERVER['REQUEST_METHOD'] != 'POST')
    {

       echo '<p>To register with Condition:Dive as a new member, please complete the following form:</p><br/><br/>';
       echo '<div class="register" width="300px">    
    

	<form action="register.php" method="post">
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="pwd1" name="pwd"></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" id="pwd2" name="pwd2"></td>
                </tr>
                <tr>
                    <td>Divesite:</td>
                    <td>
                        <select name="loc" id="divesite">
                            <option value="">Select favorite divesite</option>
                            <option value="bw">Break Water</OPTION>
                            <option value="mc">Macabee</OPTION>
                            <option value="lv">Lovers</OPTION>
                            <option value="cs">Coral Street</OPTION>
                            <option value="bh">Butterfly House</OPTION>
                            <option value="ms">Monastary Beach</OPTION>
                            <option value="pl">Point Lobos (Whalers)</OPTION>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" name="Submit"></td>
                </tr>
           </table>
	</form>
    </div>';
       
    }
else
{  echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    /* so, the form has been posted, we'll process the data in three steps:
		1.	Check the data
		2.	Let the user refill the wrong fields (if necessary)
		3.	Save the data 
	*/
	$errors = array(); /* declare the array for later use */
	
	if(isset($_POST['pwd']))
	{
		if($_POST['pwd'] != $_POST['pwd2'])
		{
			$errors[] = 'The two passwords did not match.';
		}
	}
	else
	{
		$errors[] = 'The password field cannot be empty.';
	}
	
	if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	{
		echo 'Please complete all fields of the form.<br /><br />';
		echo '<ul>';
		foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
		{
			echo '<li>' . $value . '</li>'; /* this generates a nice error list */
		}
		echo '</ul>';
	}
	else
	{
		//the form has been posted without, so save it
		//notice the use of mysql_real_escape_string, keep everything safe!
		//also notice the sha1 function which hashes the password
		$loc= $_POST['loc'];
       
                $useremail=$_POST['email'];
  
                $userpass = $_POST['pwd'];

//Connect to database
//$checkuser = mysql_query("SELECT user_email FROM users WHERE user_email==$useremail");

$username_exist = mysql_num_rows($checkuser);

    if($username_exist > 0){
        echo "The username you specified has already been taken.  Please pick another one.";
     unset($useremail);
     include 'register.php';
     exit();
    } 
        echo 'database entered';
        
                $sql = "INSERT INTO users (user_email, user_password, user_level, user_divesite) VALUES('$useremail' , '$userpass', 0, '$loc')";
						
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Something went wrong while registering. Please try again later.';
			echo mysql_error(); //debugging purposes, uncomment when needed
		}
		else
		{
			echo 'Successfully registered. You can now <a href="index.php">sign in</a> and start posting!';
                            $usermail=$_POST['email'];
                            $userpass=$_POST['pwd'];

                            $yoursite = 'Condition:Dive';
                            $webmaster = 'Webmaster';
                            $youremail = 'saturnsmoon64@gmail.com';

                            $subject = "You have successfully registered at". $yoursite;
                            $message = "Dear $usermail, you are now registered at Condition Dive. Thank you for registering.  
                                To login, simply go to our web page and enter in the following details in the login form:
                                Username: $useremail
                                Password: $userpass



                                Thanks,
                                $webmaster";

                            mail($useremail, $subject, $message, "From:". $yoursite);

                            echo "Your information has been mailed to your email address.";
                        //echo $loc . $useremail . $userpass;
		}
	}

}
 echo "<br/><br/><br/>";
include'footer.php';
?>
