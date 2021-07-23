<?php
$email = $_POST['email'];
$password = $_POST['psw'];
echo $email . " " .$password;
include "databaseconfig.php";
$query = "select * from fee_managers where ((manager_email='$email') and (manager_pswd='$password'))";

$sql = mysqli_query ($con , $query);
$total = mysqli_num_rows($sql);

if($total==0){
	$query1 = "select * from student where Std_user ='$email' and Std_pswd='$password'";
	echo $query;
	//die;
	$sql1 = mysqli_query($con, $query1);
	$total1 = mysqli_num_rows($sql1);
	if($total1==0){
		echo "invalid credentials";
		echo "<script> alert('invalid credentials'); 
		window.location.href='userlogin.php'</script>";
	}
	else{
		echo "<script> window.location.href='Home.php'</script>";
	}
}
else{
	$feemanger = 0;
	while($res=mysqli_fetch_assoc($sql))s
	{
		$feemanager=$res['Feemanager_id'];
	}

	?>
		<script>
	var id = '<?php echo $feemanager; ?>';
		window.location.href="feemanagersdashboard.php?fid="+id</script>
	<?php
}
?>