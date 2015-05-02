<?php
include "mysql.php";
$table = "newentries";
$SQL = "SELECT * from $table";
$result = mySQL_query ($SQL);
while ($row = mySQL_fetch_array($result)) {
echo "<h1>$row[title]</h1>";
echo "<p><b>$row[summary]</b></p>";
echo "<p>$row[content]</p>";
echo "<p><a href=\"index.php?ID=$row[ID]\">Edit</a></p>";
}
