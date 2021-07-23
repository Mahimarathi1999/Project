<?php 
include "databaseconfig.php";
$Std_id = $_POST['studentid'];
$Std_name =$_POST['studentname'];
$Class = $_POST['class'];
$Address = $_POST['address'];
$Std_username = $_POST['susername'];
$Std_pswd = $_POST['spassword'];
$Email_address = $POST['email'];
$Contact_no =$_POST['mobileno'];
$query = "update student set Std_name ='$Std_name' , Class='$Class' , Address='$Address' ,
Std_user='$Std_username', Std_pswd='$Std_pswd' , Email_address='$Email_address' , Contact_no='$Contact_no' where Std_id='$Std_id' ";
$sql = mysqli_query($con , $query);
if($sql){
	echo "<script>alert('Data updates successfully');
	window.location.href='edit2.php';
	</script>";
}
else{
	echo "<script>alert('Data updation failed');
	window.location.href='editprofile.php';
	</script>";
}

?>