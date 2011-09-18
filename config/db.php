<?php
###Include this where you want to display the DB connect status
#echo $dbstatus. "; ". mysql_error();
###Edit this portion only

###Database Host
$dbhost = "localhost";
###Database User
$dbuser = "root";
###Database Password
$dbpass = "panthers";
###Database Name
$db = "survey";

###Do not edit below this line!
if(mysql_connect($dbhost, $dbuser, $dbpass))
{
	if(mysql_select_db($db))
	{
		$dbstatus = "Connected";
	}
	else
	{
		$dbstatus = "Can't connect to DB";
	}
}
else
{
	$dbstatus = "Can\'t connect to DB host";
}
?>
