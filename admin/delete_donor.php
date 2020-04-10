
<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_donor.php';</script>";
}
else
{
	$q="delete from donor where donar_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('Donor Deleted Successfully'); window.location='manage_donor.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_donor.php';</script>";
	}
}
?>