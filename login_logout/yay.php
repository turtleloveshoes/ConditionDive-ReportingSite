<?php
session_start();
include'/examples/index.php';
    $con=auth_db();

  $loginerror = ""; // by default assume there is not login error
  if (isset($_POST['login'])) {
    // test for the correct user-ID & password
    if (!empty($_POST['user_email']) && !empty($_POST['password'])) {
      $userid = strtolower($_POST['userid']); // convert to lowercase to avoid upper/lowercase problems
        $password=($_POST['password']);
      if (ereg("^[a-z0-9]{2,8}$",$userid)) { // validate user-id to protect from SQL injection attacks
        // verify this userid/password combination against a database
        $query = "SELECT * FROM users WHERE username='" . $userid . "' AND password='" . $password ."'";
        $result=mysql_query($query);
        if ($result > 0) {
          //$user = $result->fetchRow(DB_FETCHMODE_ASSOC,0);

          // do password crypts match?
            $_SESSION['user_email'] = $userid;
            $_SESSION['signed_in']='true';
         $lifetime=60 * 60 * 24 * 60 + time();
        session_set_cookie_params($lifetime);
          //  $_SESSION['userlevel']=$result['user_level'];
        }
        else {
          $loginerror = "Wrong user-ID or password. Please try again.";
        }
      } // end: if (ereg("^[a-z0-9]{2,8}$",$userid))
      else {
        $loginerror = "The user-ID is invalid. It must be alphanumeric and 2-8 characters long.";
      }
    } // end: if (!empty($_POST['userid']) && !empty($_POST['password']))
    else {
      $loginerror = "Please enter a user-ID and password.";
    }
  } // end: if (isset($_POST['login']))
?><html>
<head>
  <title>Login</title>
</head>
<body>
<?php
  if (!empty($_SESSION['user_email'])) {
    echo "Hi ".$_SESSION['user_email']."! You're in.";
    echo " <a href=\"yaylogout.php\">Logout</a>";
    echo " <p><a href=\"../reportConditions.php\">POST NOW</a></p>";
        }
  else {
    if (!empty($loginerror)) {
      echo $loginerror,"<br>";
    }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  User-ID: <input name="userid" type="text" value=""><br>
  Password: <input name="password" type="password" value=""><br>
  <br>
  <input type="submit" name="login" value="Login"><br>
</form>
<?php
  } // end: else: if (!empty($_SESSION['userid'])
?>

</body>
</html>

?>
