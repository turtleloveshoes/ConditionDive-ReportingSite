<?php
include_once '../includes/SessionAgent.php';
session_start();
if (isVaildSession()) {
	header('Location: ../');
	exit;
}

//Connect to database

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Condition:DIVE Login Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Condition:</h1>
        <h1>DIVE</h1>
        <h3>Report, view and link to condition reports</h3>
                
       <div class="nav">
       <ul>
           <li><a href="" title="Local Forcast">Weather</a></li>
           <li><a href="" title="Visual Tide heights and Water patterns">Swell Model</a></li>
           <li><a href="" title="Wind and wave conditions">Marine Forecast</a></li>
           <li><a href="" title="Check out the tide heights">Tide Tables</a></li>
           <li><a href="" title="How to use the site">About</a></li>
       </ul>   
       
       </div>
        <div class="usernav">
            <ul>
                Welcome:<li id="user"></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="reportConditions.php">Report </a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="login">
            <form>
                Username:<input type="text" value="Enter Username" id="user"/>
                Password:<input type="password" value="" id="pswd"/>
                
            </form>
            <br/>
            <a href="register.php">Not a member? Register here</a>
            <br/>
            

            
        </div>
    </body>
</html>