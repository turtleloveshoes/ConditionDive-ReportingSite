<?php

include '..examples/index.php';
$con=auth_db();
//Now the script needs to start the session, grab the variables from the login form and then check the database to make sure they are correct.

session_start();

$username = $_GET['username'];
$password = md5($_GET['password']);

$query = "select * from users where username='$username' and password='$password'";

$result = mysql_query($query);

//If they don’t match, display the error and the login form again.

if (mysql_num_rows($result) != 1) {
    $error = 'Bad Login';
    include 'loginhtml.php';
    echo '<p font-color="red">Bad login<p>';
   
}
else if (mysql_num_rows($result) == 1){
    $c="signed_in";
      $_session->store($c);
    
}

?>
