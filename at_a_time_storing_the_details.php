<!DOCTYPE html>
<html>
<head>
<style>
</style>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","root","survey");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
require_once 'employeelist_storing_the_details_in_array.php';
for($i=2;$i<=2;$i++)
{
for($j=1;$j<=5;$j++)
{
$id=$b[$i][0];
$name=$b[$i][1];
$sql="INSERT INTO fullanalysis(id,name,question,a,b,c,d) VALUES ($id,'$name',$j,0,0,0,0)";
$result=mysqli_query($con,$sql);
if (!$result)
 {
    die('Invalid query: ' . mysql_error());
}
}
}
?>

</body>
</html>

