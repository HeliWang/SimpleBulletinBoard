<?php
include "mysql.php";

$table = "newentries";

if ($_GET['querytype'] != 1){
$partitle = htmlspecialchars($_POST["title"]);
$parsummary = htmlspecialchars($_POST["summary"]);
$parcontent = htmlspecialchars($_POST["content"]);
$sql = "INSERT INTO $table SET 
title = '$partitle',
summary = '$parsummary',
content = '$parcontent'";
# echo $sql;
$query = mysql_query($sql);
if ($query) echo "Successfully added!"; else echo "There might be some problems!";
}

if ($_GET['querytype'] == 1){
$partitle = htmlspecialchars($_POST["title"]);
$parsummary = htmlspecialchars($_POST["summary"]);
$parcontent = htmlspecialchars($_POST["content"]);
$sql = "UPDATE $table SET 
title = '$partitle',
summary = '$parsummary',
content = '$parcontent' WHERE id=$_GET[ID]";
# echo $sql;
$query = mysql_query($sql);
if ($query) echo "Successfully changed!"; else echo "There might be some problems!";
}
include "index.php";

?>


