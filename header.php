
<!DOCTYPE html>												
<html>
    <head>
    <!--    <script type="text/javascript">if ((window.screen.width < 640) || (window.screen.height < 640)){document.write('<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1" />')}</script>
    
            <link type="text/css" rel="stylesheet" media="all" href="css/style.css" />
            <link type="text/css" rel="stylesheet" media="only screen and (max-width: 640px)" href="css/mobile.css" />
        -->
        <link type="text/css" rel="stylesheet" media="all" href="../css/styles.css" />
         <link type="text/css" rel="stylesheet" media="all" href="../css/mobile.css" />

        <title>Condition: Dive</title>

    </head>

    <body>

        <div class="wrapper">

            <div class="banner">

                <h1>Condition:DIVE <a href="index.php"><img src="../pictures/turtle.png" height="100" width="75" alt="Turtle" style= "float:left"/></a></h1>
                <h2>Scuba Diving Conditions in Northern California</h2>   


                <div class="menu">
                    <?php
                    if (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true) {
                        echo'<ul>
                       <li> </li>
                       <li><a href="index.php">Home</a></li>
                       <li><a href="../contact/mailform.php">Contact</a></li>
                       <li><a href="googlemap.php">Map</a></li>
                       <li><a href="about.php">Evaluating Conditions</a></li>
                       <li><a href="viewConditions.php">View Conditions</a></li>
                       <li><a href="reportnow.php">Report Conditions</a></li>
                       <li><a href="../testlogin/yaylogout.php">Logout</a></li>
                       <li>Hello ' . $_SESSION['user_email'] . '</li>
                       <li></li>
                       
                    </ul>';
                    } else {


                        echo'  <ul>
                       <li> </li>
                       <li><a href="index.php">Home</a></li>
                       <li><a href="../contact/mailform.php">Contact</a></li>
                       <li><a href="googlemap.php">Map</a></li>
                       <li><a href="about.php">Evaluating Conditions</a></li>
                       <li><a href="viewConditions.php">View Conditions</a></li>
                       <li><a href="reportnow.php">Report Conditions</a></li>
                       <li><a href="register.php">Register </a></li>
                       <li><a href="/index.php">Login </a></li>
                       <li></li>
                   </ul>';
                    }
                    ?>  
                    <br/>
                </div><!---menu-->
            </div><!--banner-->
            <!--
           <div class="content">
                <br/>-->
