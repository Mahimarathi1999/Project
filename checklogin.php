<?php
$email= $_POST['email'];
$schlnm= $_POST['schlnm'];
$pswd= $_POST['psw'];
/*echo $email;
echo $schlnm;
echo $pswd;
*/
if($email=="" || $pswd=="" || $schlnm==""){
	echo "<script>
	alert('Any field cannot be empty');
	window.location.href='registration.php';
	</script>";
}
else if(strlen($pswd)<8){
	echo "<script>
	alert('Password is too small');
	window.location.href='registration.php';
	</script>";
	
}
else {
	include"databaseconfig.php";
	$query="select * from fee_managers where manager_email='$email'";
	$sql = mysqli_query($con , $query);
	$total = mysqli_num_rows($sql);
	if($total==1){
		echo "<script>
	alert('Already registered');
	window.location.href='registration.php';
	</script>";
		}
		else{
			$query1 ="insert into fee_managers (School_name , manager_email , manager_pswd) values ('$schlnm' ,'$email' , '$pswd')";
		$sql1 = mysqli_query($con , $query1);
		if($sql1){
			echo "<script>
	alert('Registered Successfully');
	window.location.href='userlogin.php';
	</script>";
		}
		else{
			echo "<script>
	alert('Registration failed');
	window.location.href='registration.php';
	</script>";
		}
		}
}

?>