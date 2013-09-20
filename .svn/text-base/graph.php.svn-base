<?php

include 'header.php';
echo "<br/><br/><br/><br/>";
include "chart.php";
        
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//This is a page in which the user can click on a condition and have the daily average of this condition displayed on a graph//

//Traditionally there are a few conditions:
//Visibility-height of wave at water's edge under 5' over 40',
// Surge(random pushing)-strength measured none, light, moderate strong and very stong,
// Current(overall pushing) - none light moderate, strong, ripping,
// Surf- height of wave in relevance to body at water's edge- ankle, knee, waist, shoulder,
//Temperature- under 5F to over 70 F,
// overall- 0-5

//Implemented by each condition by a button on a graph
//the user will select from drop down a site (depending on how many dive sites this should change- gps locator should be set to dive sites within 100 miles- options? )
// will click the button
//the sql query will call the average
//the php will take the number and store it
//javascript will draw the graph reflecting the condition's average and call from an array of functions from each graph passing in the average.

//each graph implementation- over the time of the day the averages will change
//averages should be recorded every hour

//SQL

/*
if(date)
SELECT AVG(column_name) AS storedaverage FROM table_name
INSERT INTO averages(divesite, time, average)
VALUES ("$_POST('location')","$_POST(date('Y-m-d H:i:s'))",storedaverage);

PHP

//JS need to pass divesite id
-Vis -x=time y={5;-5:40} visual=water
function showVis(var id){

}
-Surge- -x=time y=0-4(0-none 1-light 2 moderate 3-strong 4-ripping)
-Surf- -x=time y= 0-4(0 feet 1-anlke 2- knee 3- waist 4- shoulder) visual= human legs
-temp - x=time y= -5F-70F
-overall (#stars visible- 0 out of 5)


*/
echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
include 'footer.php';
?>