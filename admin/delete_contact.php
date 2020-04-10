
<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_contact.php';</script>";
}
else
{
	$q="delete from contact where row_id='$id'";
	if($conn->query($q))
	{
		echo "<script>alert('Contact Deleted Successfully'); window.location='manage_contact.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again'); window.location='manage_contact.php';</script>";
	}
}
?>




