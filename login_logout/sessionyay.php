<?php

// This module takes methods from example code found at
// <http://tinsology.net/2009/06/creating-a-secure-login-system-the-right-way/>
function auth_db(){ //This should be in an include
    
    $con = mysql_connect("localhost","conditiondive","GearHead121") or die(mysql_error()); //You don't want this die statement in production but it's helpful for testing
    mysql_select_db('conditiondive', $con);
    return $con;
}


function validateSession($userid)
{
	session_regenerate_id (); //this is a security measure
	$con=auth_db();
        $query="SELECT * FROM users WHERE user_email =" . $_SESSION['user_email'] . " AND user_login = 'FALSE'";
        if (mysql_db_query($con, $query) > 0){
             $query="INSERT INTO users (user_login) VALUES ('TRUE')";
            $result=mysql_db_query($query);
        if($result > 0){
            session_start();
            $_SESSION['signed_in'] = true;
            $_SESSION['user_email'] = $userid;
        }
}
}

function isVaildSession()
{
    //if(isset($_SESSION['signed_in']) && $_SESSION['signed_in']==TRUE){
	$con=auth_db();
        $query="SELECT * FROM users WHERE user_email =" . $_SESSION['user_email'] . " AND user_login = 'TRUE'";
        if (mysql_db_query($con, $query) > 0){
            return TRUE;
        
        //}
    }
    return FALSE;
}

function logout()
{
	$_SESSION = array(); //destroy all of the session variables
        $con=auth_db();
        $query="SELECT * FROM users WHERE user_email =" . $_SESSION['user_email'] . " AND user_login = 'TRUE'";
        if (mysql_db_query($con, $query) > 0){
            $query="INSERT INTO users (user_login) VALUES ('FALSE')";
             mysql_db_query($query);
            session_destroy();
            }
        else{
            echo "<h1>you are already logged out!</h1>";
        }
}

function toppage(){
        $userid=$_SESSION['user_email'];
        if (!isVaildSession()) {
                logout();
        }
        else{
              validateSession($userid);
              mysql_close();
                exit;
        }

}
?>