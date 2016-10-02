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
//for($i=1;$i<=5;$i++)
{
$sql="UPDATE `fullanalysis` SET `a`=0,`b`=0,`c`=0,`d`=0 WHERE id=9";
$result=mysqli_query($con,$sql);
if (!$result)
 {
    die('Invalid query: ' . mysql_error());
}
}
?>

</body>
</html>

