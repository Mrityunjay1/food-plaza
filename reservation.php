<?php
	$name = $_POST['name'];
	$emailid = $_POST['emailid'];
	$password = $_POST['password'];
	$occasion = $_POST['occasion'];
	$table_no = $_POST['table_no'];
	$home_delivery = $_POST['home_delivery'];
	$address = $_POST['address'];
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
	$sql = "insert into user_data values('$name','$emailid','$password','$occasion','$table_no','$home_delivery','$address','$phoneno')";
	$status = mysqli_query($con,$sql);
	if($status)
	{
		header("Location:index.php?msg=you Have successfully Booked");
	}
	else
	{
		echo "Try Again";
	}
	mysqli_close($con);
?>