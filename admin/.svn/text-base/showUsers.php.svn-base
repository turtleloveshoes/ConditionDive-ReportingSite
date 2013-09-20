<?php

include'../examples/index.php';
$con=auth_db();

mysql_select_db("conditiondive", $con);

$result = mysql_query("SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>user_id</th>
<th>email</th>
<th>Userpassword</th>
<th>level</th>
<th>divesite</th>
</tr>";

while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['user_email'] . "</td>";
echo "<td>" . $row['user_password'] . "</td>";
echo "<td>" . $row['user_level'] . "</td>";
echo "<td>" . $row['user_divesite'] . "</td>";;
echo "</tr>";
}
echo "</table>";

mysql_close($con);

?>