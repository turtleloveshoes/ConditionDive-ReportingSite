<?php
    // resume existing session
    session_start();
    
    // destroy all data registered to a session
    session_destroy();
    
    // send raw HTTP header: index.php (signin_1.php)
    Header("Location: ../index.php");
?>

