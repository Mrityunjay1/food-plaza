<table border="1" cellspacing="0" align="center">
<title> DETAILS OF REGISTERED USER</title>
<h1><center style="color:#fb6e14">REGISTERED USER</center></h1>
<tr>
	<th>NAME</th>
	<th>EMAILID</th>
	<th>OCCASION</th>
	<th>TABLE NUMBER</th>
	<th>HOME DELIVERY</th>
	<th>ADDRESS</th>
	<th>PHONE NUMBER</th>
	</tr>
<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
		
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
	$sql = "select * from admin_data where name='$username'";
	$status = mysqli_query($con,$sql);
	
	if($status)
	{
		$sql_1 = "select * from user_data";
		
		$status_1 = mysqli_query($con,$sql_1);
		
		$rec_count = mysqli_num_rows($status_1);
		
		if($rec_count > 0)
		{
			$data = mysqli_fetch_array($status_1);
			
			while($data)
			{
				$name = $data['name'];
				$emailid = $data['emailid'];
				$occasion = $data['occasion'];
				$table_no = $data['table_no'];
				$home_delivery = $data['home_delivery'];
				$address = $data['address'];
				$phoneno = $data['phoneno'];
				
				
				?>
				<tr>
					<td><?php echo $name; ?></td>
					<td><?php echo $emailid; ?></td>
					<td><?php echo $occasion; ?></td>
					<td><?php echo $table_no; ?></td>
					<td><?php echo $home_delivery; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $phoneno; ?></td>
				</tr>
				<?php
				$data = mysqli_fetch_array($status_1);
			}
			
			//header("Location:index.php?data1=$name & data2=$emaitdd & data3=$occassion & data4=$table_no & data5=$home_detdvery & data6=$address & data7=$phoneno");
		}
	}
	else
	{
		echo "Try Again";
	}
	mysqli_close($con);
?>
</table>