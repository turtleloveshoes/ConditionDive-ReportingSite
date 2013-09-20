<?php
include '../include/SessionAgent.php';
session_start();
$con=isValidSession();
if ($con==true){
    validateSession($_SESSION['user_email']);
    $goof=$_SESSION['user_email'];
    echo $goof;
    
}
else{
    logout();
    echo 'Logged out!';
}

?>