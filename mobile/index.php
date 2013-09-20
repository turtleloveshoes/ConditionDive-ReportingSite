<!DOCTYPE html>												
<html>
<head>
   <script type="text/javascript">if ((window.screen.width < 640) || (window.screen.height < 640)){document.write('<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1" />')}</script>

<link type="text/css" rel="stylesheet" media="all" href="style.css" />
<link type="text/css" rel="stylesheet" media="only screen and (max-width: 640px)" href="mobile1.css" />
<!-- windows mobile link-->
<link rel="stylesheet" href="mobile1.css" type="text/css" media="Screen" />
       
<title>Condition: Dive</title>
        
                
</head>

<body>
      
    <div class="wrapper"> 
     
  <div class="banner">
      
    <h1>Condition:DIVE <a href="viewConditions.php"><img src="../pictures/turtle.png" alt="Turtle"/></a></h1>
	<h2>The Dive Log Database</h2>   


<div class="nav" id="nav">
    
          <ul> 
                       <li><a href="index.php">Home</a></li>
                       <li><a href="googlemap.php">Map</a></li>
                       <li><a href="about.php">About</a></li>
                       <li><a href="contact.php">Contact</a></li>
                       
            </ul>
                
         
</div>

</div><!--banner-->
<div class="content">
<!--content-->
<div class="register">
    <h1>Sign In</h1>
<p><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  User-ID: <br/>
  <input name="user_email" type="text" value=""><br>
  Password:<br/>
  <input name="password" type="password" value=""><br>
  <br>
  <input type="submit" name="login" value="Login"><br>
</form></p>
            <p>Not a member <a href="register.php">Register Here</a></p>
    
   
</div>

<div class="footer">
        
      <div class="nav" id="nav">
      <h1>Additional Resources</h1>
        <ul>
          
          <li><a href="reportnow.php">Report Conditions</a></li>
          <li><a href="""viewCondtions.php">View Conditions</a></li >
          <li><a href="http://mobile.wunderground.com/cgi-bin/findweather/getForecast?query=Monterey+CA">Weather</a></li>
          <li><a href="http://www.aquaticdiscovery.com/conditiondive/monterey.html">Swell Model</a></li>
          <li><a href="http://mobile.wunderground.com/auto/mobile/MAR/PZ/535.html">Marine Forecast</a></li>
          <li><a href="http://www.aquaticdiscovery.com/conditiondive/tide.html">Tide Tables</a></li>
          <li><a href="sitemap.php">Site Map</a></li>
        <label="login"><li><a href="/index.php">Login Here</a></li></label></ul>
         
        </ul>
      </div>
    </div>
    <!--footer-->
  <!--wrapper-->

</body>
</html>
