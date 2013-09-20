<?php
include 'header.php';
	echo '<h1>Contact Us</h1>';
echo '<div class="register">';	

if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
              //send email yo us
              $email = $_REQUEST['email'] ;
              $subject = $_REQUEST['subject'] ;
              $message = $_REQUEST['message'] ;
              mail("mkhurana@gmail.com", $subject, $message, "From:" . $email);
              echo "Thank you for using our mail form";
              
            //send email to them/
            
              $message="Thank you for contacting Condition:Dive";
            $usermail=$_REQUEST['email'];

            $yoursite = 'Condition:Dive';
            $webmaster = 'Webmaster';
            $youremail = 'saturnsmoon64@gmail.com';

            $subject = "Thank you for contacting". $yoursite;
            $message = "Dear" . $usermail . ", Thank you for contacting Condition Dive. Please give us a few business days to get back to you.
               . $webmaster";

            mail($useremail, $subject, $message, "From: $yoursite");


  }
else
//if "email" is not filled out, display the form
  {
  echo
    "<form method='post' action='contact.php'>
        <table>
            <tr></tr>
            <tr>
                <td>Your Email:</td>
                <td><input name='email' type='text' /></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><input name='subject' type='text' /></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea name='message' rows='15' cols='40'></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type='submit' /></td>
            </tr>
</form></table></div>";
  }


include 'footer.php';
?>
