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
$value1=$_POST["1"];
$value2=$_POST["2"];
$value3=$_POST["3"];
$value4=$_POST["4"];
$value5=$_POST["5"];

$table=$_POST["teacher"];
$table=(int)$table;
//echo $table;

for($j=1;$j<=5;$j++)
{
$a=$_POST[$j];
switch($a)
{
case "a":
		//echo "a<br>";
		$sql="select a from fullanalysis where question=$j and id=$table";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['a']+1;
		$sql="UPDATE fullanalysis SET a=$i WHERE question=$j and id=$table";
		mysqli_query($con,$sql);
		break;
case "b":
		//echo "b<br>";
		$sql="select b from fullanalysis where question=$j and id=$table";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['b']+1;
		$sql="UPDATE fullanalysis SET b=$i WHERE question=$j and id=$table";
		mysqli_query($con,$sql);
		break;
case "c":
		//echo "c<br>";
		$sql="select c from fullanalysis where question=$j and id=$table";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['c']+1;
		$sql="UPDATE fullanalysis SET c=$i WHERE question=$j and id=$table";
		mysqli_query($con,$sql);
		break;
case "d":
		//echo "d<br>";
		$sql="select d from fullanalysis where question=$j and id=$table";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['d']+1;
		$sql="UPDATE fullanalysis SET d=$i WHERE question=$j and id=$table";
		mysqli_query($con,$sql);
		break;
}
}/*
switch($value2)
{
case "a":
		$sql="select a from $table where id=2";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['a']+1;
		$sql="UPDATE $table SET a=$i WHERE id=2";
		mysqli_query($con,$sql);
		break;
case "b":
		$sql="select b from $table where id=2";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['b']+1;
		$sql="UPDATE $table SET b=$i WHERE id=2";
		mysqli_query($con,$sql);
		break;
case "c":
		$sql="select c from $table where id=2";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['c']+1;
		$sql="UPDATE $table SET c=$i WHERE id=2";
		mysqli_query($con,$sql);
		break;
case "d":
		$sql="select d from $table where id=2";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['d']+1;
		$sql="UPDATE $table SET d=$i WHERE id=2";
		mysqli_query($con,$sql);		
		break;
}

switch($value3)
{
case "a":
		$sql="select a from $table where id=3";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['a']+1;
		$sql="UPDATE $table SET a=$i WHERE id=3";
		mysqli_query($con,$sql);
		break;
case "b":
		$sql="select b from $table where id=3";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['b']+1;
		$sql="UPDATE $table SET b=$i WHERE id=3";
		mysqli_query($con,$sql);
		break;
case "c":
		$sql="select c from $table where id=3";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['c']+1;
		$sql="UPDATE $table SET c=$i WHERE id=3";
		mysqli_query($con,$sql);
		break;
case "d":
		$sql="select d from $table where id=3";
		$i=mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($i);
		$i=$row['d']+1;
		$sql="UPDATE $table SET d=$i WHERE id=3";
		mysqli_query($con,$sql);
		break;
}*/
echo "<center><h2>Thanks for Answering</h2>";
echo "<br><br>";
echo "<a href='analysis.php' style='text-decoration: none;'> <input type='button' value='Full Analysis' class='register-button'></a>";
mysqli_close($con);
?> 
</body>
</html>

