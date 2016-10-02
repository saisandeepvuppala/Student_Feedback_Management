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

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
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
$k++;
}
echo "<h3>No. of participants:-".$k."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmployee Name:-".$name."</h3>";
if($k!=0)
{
$sql="select * from feedback where id=$id";
$b=mysqli_query($con,$sql);
echo "<center><table><tr><th>I Liked</th><th>I Recommended Changes</th><th>Suggestions/Comments</th></tr>";
while($row=mysqli_fetch_row($b))
{
echo"<tr><td>".$row[18]."</td><td>".$row[19]."</td><td>".$row[20]."</td></tr>";
}
echo "</table></center>";
}
else
{
echo "<center><h2>There no comments in the database</h2></center>";
}



?>
</body>
</html>