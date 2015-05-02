<?php
include "mysql.php";

$table = "entries";
mysql_query ("CREATE TABLE IF NOT EXISTS $table (ID INT NOT NULL)");
mysql_query ("ALTER TABLE $table ADD title TEXT NOT NULL");
mysql_query ("ALTER TABLE $table ADD summary TEXT NOT NULL");
mysql_query ("ALTER TABLE $table ADD content TEXT NOT NULL");
?>
