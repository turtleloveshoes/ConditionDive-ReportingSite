<?php
include_once '../includes/SessionAgent.php';
session_start();
if (isVaildSession()) {
    validateSession($userid);
	include 'header.php';
	exit;
}
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
                
        <div class="login">
            <form>
                Username:<input type="text" value="Enter Username" id="user"/>
                Password:<input type="password" value="" id="pswd"/>
                
                <input type="submit" name="submit" value="Login" />
                
            </form>
            <a href="register.php">Not a member? Register here</a>
            
            
        </div>
    </body>
</html>
