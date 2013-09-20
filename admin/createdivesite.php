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

        $sql = "CREATE TABLE" . $_POST('dive_site') . "{
	user_id 	INT(8)  NOT NULL, 
	divesite_id 	VARCHAR(255),
	divesite_date	DATETIME NOT NULL,
	vis	INT(2) NOT NULL,
	surf	INT(2) NOT NULL,
	surge	INT(2) NOT NULL, 
	current	INT(2) NOT NULL,
	temp	INT(3) NOT NULL, 
	overall	INT(1) NOT NULL
	PRIMARY KEY (divesite_id),
	FORGEIGN KEY REFERENCES users (user_id)
        };";

        echo "Divesite Created";
        echo('<meta http-equiv="refresh" content="20">');
    }
    else
    {
        echo 'Table not created';
        die('Could not connect: ' . mysql_error());
        echo('<meta http-equiv="refresh" content="20">');
    }


    // Create table


    //i think these should come earlier
    mysql_query($sql,$con);
    mysql_close($con);
           ?>

