
<?php
$conn=new mysqli("localhost","root","","bloody");
if($conn->connect_error)
{
		echo "DB Not Connected";
}
else
{
	//echo "DB Connected";
}
?>