<?php include('config/site.php'); ?>
<head>
<title><?php echo $sitetitle; ?></title>
</head>
<center><font size="6"><?php echo $sitetitle; ?></font><br>Take the survey and receive 25% of your next visit</center>
<br><br>
<?php
$csubmittime = time()+60*60*24;
$currenttime = time();
$cookiesubmittime = $_COOKIE['sscsurveysubmittime'];
if(!$cookiesubmittime == '')
{
	if(!$cookiesubmittime <= $currenttime)
	{
		echo "You can only submit once every 24 hours. Please try again later.";
	}
}
else	
{
?>
<form method="post" action="confirm.php">
<table>
	<tr>
		<td><font color="red">Optional</font></td>
		<td>Name:</td>
		<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
	</tr>
	<tr>
		<td><font color="red">Optional</font></td>
		<td>Email:</td>
		<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
	</tr>
	<tr>
		<td><font color="red">Optional</font></td>
		<td>Phone:</td>
		<td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
	</tr>
	<tr>
		<td><font color="red">Optional</font></td>
		<td>Receipt Number: POS</td>
		<td><input type="text" name="receiptnumber" value="<?php echo $receiptnumber; ?>"></td>
	</tr>
</table>
<br>
Please use the rating scale of 1 to 5 with 1 being the lowest and 5 being the heighest for the following :<br>
<table>
	<tr>
		<td>Customer Service</td>
		<td><select name="customerservice" value="<?php echo $customerservice; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
	<tr>
		<td>Knowledge</td>
		<td><select name="knowledge" value="<?php echo $knowledge; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
	<tr>
		<td>Facility Appearence</td>
		<td><select name="facility" value="<?php echo $facility; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
	<tr>
		<td>Quality of Products</td>
		<td><select name="qualityproducts" value="<?php echo $qualityproducts; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
	<tr>
		<td>Qualtiy of Service</td>
		<td><select name="qualityservice" value="<?php echo $qualityservice; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
	<tr>
		<td>Responsiveness</td>
		<td><select name="responsiveness" value="<?php echo $responsiveness; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
	<tr>
		<td>Ease of Use</td>
		<td><select name="easeofuse" value="<?php echo $easeofuse; ?>"><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option></select></td>
	</tr>
</table>
Comments:<br>
<textarea name="comments" cols="100" rows="10"><?php echo $comments; ?></textarea>
<br>
<table>
	<tr>
		<td>Would you like to be contacted regarding this survey?</td>
		<td><select name="contact" value="<?php echo $contact; ?>"><option>No</option><option>Yes</option></select></td>
	</tr>
</table>
<input type="submit" value="Submit"><input type="reset" value="Reset">
</form>
<?
}
?>
