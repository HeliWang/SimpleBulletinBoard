<?php
$con = mysql_connect (localhost, mathonet_blog, mathonet_blog); #database username and password
if (!mysql_select_db (mathonet_blog, $con)) echo ("mysql error line 4"); #database name
?>
