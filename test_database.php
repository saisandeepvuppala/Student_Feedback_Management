<?php
session_start();
$con=mysqli_connect("localhost","root","root","survey");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
		$sql="select a from polling where id=1";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		echo $row['a'];
		$i=$row['a']+1;
		$sql="UPDATE polling SET a=0 WHERE id=1";
		mysqli_query($con,$sql);
mysqli_close($con);
?> 


