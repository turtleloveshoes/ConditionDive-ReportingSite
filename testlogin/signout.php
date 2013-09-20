<?php
// can this file be deleted?
include'../examples/index.php';
$con=auth_db();


echo '<h2>Sign out</h2>';

//check if user if signed in
if($_SESSION['signed_in'] == true)
{
        //unset all variables
        $_SESSION['signed_in'] = NULL;
        $_SESSION['user_email'] = NULL;
        $_SESSION['user_id']   = NULL;

        echo 'Succesfully signed out, thank you for visiting.';
}
else
{
        echo 'You are not signed in. Would you <a href="signin.php">like to</a>?';
}


?>
~  