<?php

$con=mysql_connect("ec2-50-18-12-43.us-west-1.compute.amazonaws.com","conditiondive","GearHead121");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("conditiondive", $con);

if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "connectedd added";

mysql_close($con)

?>
