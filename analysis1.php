<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>
<?php
echo "<center><h1>ANALYSIS</h1></center>";
$con=mysqli_connect("localhost","root","root","survey");
require_once 'employeelist_storing_the_details_in_array.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$id=$_POST["teacher"];
$id=(int)$id;
$i=1;
while(isset($b[$i][0]))
{
if($b[$i][0]==$id)
{
$name=$b[$i][1];
}
$i++;
}
$sql="select * from feedback where id=$id";
$b=mysqli_query($con,$sql);
$k=0;
while($row=mysqli_fetch_row($b))
{
for($l=0;$l<14;$l++)
{
$value[$k][$l]=$row[$l+4];
}
$k++;
}

echo "<h3>No. of participants:-".$k."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmployee Name:".$name."</h3>";

if($k!=0)
{
for($i=0;$i<14;$i++)
{
$a[1]=0;
$a[2]=0;
$a[3]=0;
$a[4]=0;
$a[5]=0;
		for($j=0;$j<$k;$j++)
		{
		$a[$value[$j][$i]]++;
		}
		$option1=$a[5]/$k;
		$option1=(round($option1*100));
		$option2=$a[4]/$k;
		$option2=(round($option2*100));
		$option3=$a[3]/$k;
		$option3=(round($option3*100));
		$option4=$a[2]/$k;
		$option4=(round($option4*100));
		$option5=$a[1]/$k;
		$option5=(round($option5*100));
		echo "<h4 style='text-decoration:underline'>Question ".($i+1)."</h4>";
		echo "Most Satisfied ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option1,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option1,"% '>
		",$option1,"%
		</div>
		</div>";
		echo "4";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option2,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option2,"%'>
		",$option2,"%
		</div>
		</div>";
		echo "3 ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option3,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option3,"%'>
		",$option3,"%
		</div>
		</div>";
		echo "2 ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option4,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option4,"%'>
		",$option4,"%
		</div>
		</div>";
		echo "least Satisfied ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option5,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option5,"%'>
		",$option5,"%
		</div>
		</div>";
		echo "<br><br><br><br><br>";
}
}
else
{
echo "<h3>Progress bar cannot shown because of NO participants";
}
?>
</body>
</html>