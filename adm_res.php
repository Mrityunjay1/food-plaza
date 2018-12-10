<?php
	$name = $_POST['name'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$phoneno = $_POST['phoneno'];
		
	$con = mysqli_connect("localhost","root","");
	if(!$con)
	{
		die("Connection Error");
	}
	$dbstatus = mysqli_select_db($con,"reservation");
	if(!$dbstatus)
	{
		die("Database not found");
	}
	$sql = "insert into admin_data values('$name','$emailid','$phoneno','$password')";
	$status = mysqli_query($con,$sql);
	if($status)
	{
		header("Location:admin.php?msg=you Have successfully Booked");
	}
	else
	{
		echo "Try Again";
	}
	mysqli_close($con);
?>