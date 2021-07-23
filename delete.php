<?php
$con=mysqli_connect("localhost","root","","crudyoutube");
if(!$con)
{
	echo("Not connected");
}
else{
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	echo($id);
	$itemname=$_POST['itemname'];
	echo ($itemname);
$get_record=(mysqli_query($con,"select * from crudtable"));
if(mysqli_num_rows($get_record)>0)
{
$sql_query="delete from crudtable where Id='$id' or ItemName='$itemname'";
$query_run=mysqli_query($con,$sql_query);
if($query_run)
{
echo "record deleted successfully";
}
else
{ echo "record not found";
}
mysqli_close($con);
}
}
}
?>