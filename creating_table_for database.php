<?php
$con=mysqli_connect("localhost","root","root","survey");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE feedback(id INT,name varchar(50),course varchar(50),period varchar(20),a INT,b INT,c INT,d INT,e INT,f INT,g INT,h INT,i INT,j INT,k INT,l INT,m INT,n INT,liked varchar(200),changes varchar(200),comments varchar(200))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?> 
