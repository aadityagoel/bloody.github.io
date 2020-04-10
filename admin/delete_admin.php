
<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_patient.php';</script>";
}
else
{
	$q="delete from request where req_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('Patient Deleted Successfully'); window.location='manage_patient.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_patient.php';</script>";
	}
}
?>