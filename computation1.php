<!DOCTYPE>
<html>
<head>
<style>
.register-button:active {
  background: #eee;
  border-color: #c3c3c3 #d1d1d1 #d8d8d8;
  background-image: -webkit-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: -moz-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: -o-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: linear-gradient(to bottom, #eeeeee, #fcfcfc);
  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
}
.register-button:focus {
  outline: 0;
}
.register-button {
  display: block;
  width: 10%;
  height: 42px;
  margin-top: 25px;
  font-size: 16px;
  font-weight: bold;
  color: #494d59;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
  background: #fcfcfc;
  border: 1px solid;
  border-color: #d8d8d8 #d1d1d1 #c3c3c3;
  border-radius: 2px;
  cursor: pointer;
  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
  -webkit-box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
  box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
}
</style>
</head>
<?php

$con=mysqli_connect("localhost","root","root","survey");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  require_once 'employeelist_storing_the_details_in_array.php';
  
$value1=$_POST["a"];
$value2=$_POST["b"];
$value3=$_POST["c"];
$value4=$_POST["d"];
$value5=$_POST["e"];
$value6=$_POST["f"];
$value7=$_POST["g"];
$value8=$_POST["h"];
$value9=$_POST["i"];
$value10=$_POST["j"];
$value11=$_POST["k"];
$value12=$_POST["l"];
$value13=$_POST["m"];
$value14=$_POST["n"];


$id=$_POST["teacher"];
$id=(int)$id;

$i=1;
while(isset($b[$i][0]))
{
if($b[$i][0]==$id)
{
$name=$b[$i][1];
break;
}
$i++;
}
//echo $name."<br>";
$course=$_POST["course"];
$period=$_POST["period"];
$liked=$_POST["liked"];
$changes=$_POST["changes"];
$comments=$_POST["comments"];

$sql="INSERT INTO `feedback`(`id`, `name`, `course`, `period`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`, `m`, `n`, `liked`, `changes`, `comments`) VALUES ('$id','$name','$course','$period','$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13','$value14','$liked','$changes','$comments')";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo "error while inserting into the database Please go back And write only alphbets and numbers in the dialogue box";
}
else
{
echo "<center><h2>Thanks for Answering</h2>";
echo "<br><br>";
echo "<a href='analysis_emp.php' style='text-decoration: none;'> <input type='button' value='Full Analysis' class='register-button'></a>";
}
mysqli_close($con);
?> 
</body>
</html>

