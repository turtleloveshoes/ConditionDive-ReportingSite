   <div class="topright" style="text-align:right; width: 225px; height: 114px; font-size: 11pt;">
       
 <?php
 
  
    echo'loginhtml';
        if($_SESSION['signed_in'])
        {echo'<a class="item" href="index.php?userid='. $_SESSION['user_name'] . '">Home</a> ';

                echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="login_logout/logoutr2.php">Sign out</a>';
          
              include 'logoutr2.php'; 
        }
       if (!$_SESSION['signed_in'])
        {
        echo '<p>Member Login or <a href="register.php"/>Registration</a></p>';
        echo '<form action="">User Email<input type="text"name="username"/><br/>Password<input type="password" name="password"/><input type="submit" value="Login" /></form>';
    
          include 'loginr2.php';
         
        }
//echo'</div> <!--menu-->';
?>
        
</div>