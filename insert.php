<?php 
include "databaseconfig.php";
$Std_id = $_POST['studentid'];
$Std_name =$_POST['studentname'];
$Class = $_POST['class'];
$Email_address = $POST['email'];
$Contact_no =$_POST['mobileno'];
$query = "insert into student (Std_id , Std_name ,Class, Email_address, Contact_no) values('$Std_id' , '$Std_name' , 
'$Class' ,'$Email_address' , '$Contact_no')";
$sql = mysqli_query($con , $query);
if($sql){
	echo "<script>alert('Data insert successfully');
	window.location.href='i2.php';
	</script>";
}
else{
	echo "<script>alert('Data insertion failed');
	window.location.href='i2.php';
	</script>";
}
?>