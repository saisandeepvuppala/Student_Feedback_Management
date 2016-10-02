<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
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
for($i=1;$i<=5;$i++)
{
  $sql="select name,a,b,c,d from fullanalysis where id=9 and question=$i";
  $b=mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($b);
		$total=$row['a']+$row['b']+$row['c']+$row['d'];
		$option1=$row['a']/$total;
		$option1=(round($option1*100));
		$option2=$row['b']/$total;
		$option2=(round($option2*100));
		$option3=$row['c']/$total;
		$option3=(round($option3*100));
		$option4=$row['d']/$total;
		$option4=(round($option4*100));
		
	
		
		if($i==1)
		{
		echo "<h2>Total No. of Participants :".$total."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmployee_Name: ".$row['name']."</h2>";
		}
		echo "<h4 style='text-decoration:underline'>Question ".$i."</h4>";
		echo "Excellent ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option1,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option1,"% '>
		",$option1,"%
		</div>
		</div>";
		echo "Good ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option2,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option2,"%'>
		",$option2,"%
		</div>
		</div>";
		echo "Fair ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option3,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option3,"%'>
		",$option3,"%
		</div>
		</div>";
		echo "Poor ";
		echo "<div class='progress'>
		<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='",$option4,"' aria-valuemin='0' aria-valuemax='100' style='width:",$option4,"%'>
		",$option4,"%
		</div>
		</div>";
		echo "<br><br><br><br><br>";
}

?>
</body>
</html>