<?php


$con = mysql_connect("localhost","peter","abc123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query('CREATE TABLE'. $_POST('dive_site') ,$con))
  {
    mysql_select_db("database", $con);

       $sql = "DELETE TABLE" . $_POST('removesite')
           

;

    echo "Divesite Removed";
    echo('<meta http-equiv="refresh" content="20">');
  }
else
  {
   echo 'Divesite not created';
  die('Could not connect: ' . mysql_error());
  echo('<meta http-equiv="refresh" content="20">');

  
}
// Create table


//i think these should come earlier
mysql_query($sql,$con);
mysql_close($con);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
