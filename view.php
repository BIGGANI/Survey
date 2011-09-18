<?php
include('config/site.php');
###Customer Service
$result = mysql_query("SELECT *, AVG(customerservice) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Customer Service: ".$row['AVG(customerservice)'];
	echo "<br />";

}
###knowledge
$result = mysql_query("SELECT *, AVG(knowledge) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Knowledge: ".$row['AVG(knowledge)'];
	echo "<br />";

}
###facility
$result = mysql_query("SELECT *, AVG(facility) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Facility: ".$row['AVG(facility)'];
	echo "<br />";

}
###qualityproducts
$result = mysql_query("SELECT *, AVG(qualityproducts) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Quality of Products: ".$row['AVG(qualityproducts)'];
	echo "<br />";

}
###qualityservice
$result = mysql_query("SELECT *, AVG(qualityservice) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Quality of Service: ".$row['AVG(qualityservice)'];
	echo "<br />";

}
###responsiveness
$result = mysql_query("SELECT *, AVG(responsiveness) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Responsiveness: ".$row['AVG(responsiveness)'];
	echo "<br />";

}
###easeofuse
$result = mysql_query("SELECT *, AVG(easeofuse) FROM submits") or die(mysql_error());
while($row = mysql_fetch_array($result))
{
	echo "Ease of Use: ".$row['AVG(easeofuse)'];
	echo "<br />";

}
?>
