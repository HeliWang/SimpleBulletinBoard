<?php
include "mysql.php";
$table = "newentries";
mysql_query ("CREATE TABLE IF NOT EXISTS $table
			(ID INT NOT NULL AUTO_INCREMENT,
			title TEXT NOT NULL,
			summary TEXT NOT NULL,
			content TEXT NOT NULL,
			PRIMARY KEY (ID))"
			);