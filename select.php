<html>
<head>
<button onclick="back()">BACK</button>
<script>
function back()
{
window.history.back();
}
</script>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root", "" , "fee_manage");
if(!$con)
{
	die("couldnt connect");
}
else{
echo "connected";
}

$sql_query="select * from student";
$query_result=mysqli_query($con,$sql_query);
$c=mysqli_num_rows($query_result);
if($c>0)
{
	echo"<table border=1 width=100% bgcolor=white <tr><th>Id</th><th>Itemname</th><th>Price</th><th>Image</th></tr>";
	while($record=mysqli_fetch_array($query_result))

{
echo  "<tr align=center><td>",$record["Id"],"</td><td>";
echo $record["ItemName"],"</td><td>";
echo $record["Price"],"</td><td>";
echo '<img src="data:image;base64,'.$record["Image"].'" style="height:100px; width:100px"/>';
echo "</td> </tr>";
	 }
	 echo "</table>";
}
mysqli_close($con);
?>
</body>
</html>