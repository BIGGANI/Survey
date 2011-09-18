<?php include('config/site.php'); ?>
<head>
<title><?php echo $sitetitle; ?></title>
</head>
<center><font size="6"><?php echo $sitetitle; ?></font><br>Take the survey and receive 25% of your next visit</center>
<br><br>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$receiptnumber = "POS". $_POST['receiptnumber'];
$customerservice = $_POST['customerservice'];
$knowledge = $_POST['knowledge'];
$facility = $_POST['facility'];
$qualityproducts = $_POST['qualityproducts'];
$qualityservice = $_POST['qualityservice'];
$responsiveness = $_POST['responsiveness'];
$easeofuse = $_POST['easeofuse'];
$comments = $_POST['comments'];
$contact = $_POST['contact'];
$confnumber = mt_rand();
$date = date("Y-m-d");
if(!mysql_query("INSERT IGNORE INTO submits VALUES ('', '$name', '$email', '$phone', '$receiptnumber', '$customerservice', '$knowledge', '$facility', '$qualityproducts', '$qualityservice', '$responsiveness', '$easeofuse', '$comments', '$contact', '$confnumber', '$date')"))
{
	echo "An error occured, please submit the following error to us!<br>". mysql_error();
}
else
{
	echo "Submit successfull! Your conformation number is: ". $confnumber. ". Take this number to our store";
	$csubmittime = time()+60*60*24;
	setcookie("sscsurveysubmittime", $csubmittime, $csubmittime);
}

?>





