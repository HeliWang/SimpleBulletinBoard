<?php
include "mysql.php";
include "entries.php";
$table = "newentries";
$SQL = "SELECT * from $table WHERE ID = '$_GET[ID]'";
$result =  mySQL_query ($SQL);
$row =  mySQL_fetch_array ($result);
if(!empty ($_GET[ID])) {
	$querytype = 1;
}

?>
<form name="formal" method="post" action="dbinsert.php?querytype=<?php echo $querytype;?>&ID=<?php echo $_GET[ID];?>"">
<div>
<p> Title </p>
<input type="text" name="title" value="<?php echo $row[title];?>" size="50" />
<br />
<p> Summary </p>
<input type="text" name="summary" value="<?php echo $row[summary];?>" size="50" />
<br />
<p> Content </p>
<textarea cols="60" row="60" name="content"><?php echo $row[content];?></textarea>
<br />
<input type="submit" name="Submit" value="submit" />
</div>
</form>