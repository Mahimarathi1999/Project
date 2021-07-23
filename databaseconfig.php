<?php
$con_server = "localhost";
$con_user ="root";
$con_password ="";
$db = "fee_manage";
$con = mysqli_connect($con_server , $con_user ,$con_password , $db );
if(!$con ){
	echo "Connection failed";
	
}
//echo" Successfully connected";
?>