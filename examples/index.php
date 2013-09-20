<?php
//example of a simple pull and display


function auth_db(){ //This should be in an include
    
    $con = mysql_connect("localhost","conditiondive","GearHead121") or die(mysql_error()); //You don't want this die statement in production but it's helpful for testing
    mysql_select_db('conditiondive', $con);
    return $con;
}


/*$sql="select * from `temp`";
$con= auth_db();
if($con){
    $results=mysql_query($sql);
    while($result=mysql_fetch_assoc($results))
        $result_array[]=$result;
} else {
    echo "Could not connect";
}
mysql_close($con);
$header = array_keys($result_array[0]);

?>
<table>
    <tr>
<?PHP
foreach($header as $item)
    echo '<th>'.$item.'</th>';
?>
    </tr>   
<?PHP
foreach($result_array as $item){
    echo '<tr>';
    foreach($item as $cell){
        echo '<td>'.$cell.'</td>';
    }    
    echo '</tr>';
} */
?>                 