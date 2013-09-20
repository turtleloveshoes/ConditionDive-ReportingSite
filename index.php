     
<?php

session_start();
include'examples/index.php';
$con = auth_db();

/* $loginerror = ""; // by default assume there is not login error
  if (isset($_POST['login'])) {
  // test for the correct user-ID & password
  if (!empty($_POST['user_email']) && !empty($_POST['password'])) {
  $userid = strtolower($_POST['user_email']); // convert to lowercase to avoid upper/lowercase problems
  $password=($_POST['password']);
  if (ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$",$userid)) { // validate user-id to protect from SQL injection attacks
  // verify this userid/password combination against a database
  $query = "SELECT * FROM users WHERE user_email='" . $userid . "' AND user_password='" . $password ."'";
  $result=mysql_query($query);

  if ($result>0) {
  //$user = $result->fetchRow(DB_FETCHMODE_ASSOC,0);
  //while ($row = mysql_fetch_assoc($result)) {is what is happening in next line
  //}
  // do password crypts match?

  $_SESSION['user_email'] = $user['user_email'];
  $lifetime=60 * 60 * 24 * 60 + time();
  $_SESSION['signed_in']='true';
  setcookie(ID_my_site, $_POST['user_email'], $lifetime);
  //      setcookie(Key_my_site, $_POST['pass'], $lifetime);
  $_SESSION['userlevel']=$result['user_level'];
  }
  else {
  $loginerror = "Wrong user-ID or password. Please try again.";
  echo "</div>";
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
  ?>

  <?php
  include 'header.php';
  echo '</br></br></br></br></br></br></br>';
  echo '<div class="content">';
  if (!empty($_SESSION['user_email'])) {
  echo "Hi ". $_SESSION['user_email'] . "! You're in.";
  echo " <a href=\"yaylogout.php\">Logout</a>";
  echo " <a href=\"post.php\">POST NOW</a>";
  }
  else {
  if (!empty($loginerror)) {
  echo $loginerror,"<br>";
  }
  ?>

  </br></br></br></br></br></br></br></br></br>
  <div class="register">
  <h1>Sign In</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  User-ID: <input name="user_email" type="text" value=""><br>
  Password: <input name="password" type="password" value=""><br>
  <br>
  <input type="submit" name="login" value="Login"><br>
  </form>
  <p>Not a member <a href="register.php">Register Here</a></p>

  <?php
  } // end: else: if (!empty($_SESSION['userid'])
  //include 'post.php';
  ?>
  </div>
  </body>
  </html>
 */

include 'header.php';
// echo '<div class="wrapper">';
echo '<br/><br/>';
// echo '<div class="register">';
include 'testlogin/signin_1.php';
echo '</div>';
echo '</div>';
include 'footer.php';
echo '</div>';
?>
