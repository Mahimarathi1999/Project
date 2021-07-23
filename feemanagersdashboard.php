<?php 
include 'databaseconfig.php';
$fid = $_GET['fid'];
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- jquery link -->
<!-- jquery link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- ajax link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width:190px;;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  display:none;
  background-color: #1ab2ff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: bl9ock;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-lef9t: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
* {box-sizing: border-box;}



.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav input[type=text] {
 margin-lef9t: 400px;
  width: 600px;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
table {
  border-collapse: collapse;
  width: 95%;
  margin-left:65px;
  overflow-x:auto;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){
	background-color: #f2f2f2
	}

th {
  background-color: #4da6ff;
  color: white;
}
.stat{
	background-color:white;
	border:none;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="feemanagersdashboard.php">My dashboard</a>
    <a href="edit2.php">Edit Profile</a>
  <a href="userlogin.php">LogOut</a>
  <a href="#">Help and support</a>
</div>
<!--<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <input type="text" placeholder="Search.."><img src="assets/images/search.png">
</div>-->
<!--<h2>Animated Sidenav Example</h2>
<p>Click on the element below to open the side navigation menu.</p>
--><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; </span>
<div class="add">
    <p style="margin-left:1100px;marging-top:10px;color:#0006FA" ><a href="i2.php"> + Add records</a></p>

  </div>
<script>

function openNav() {
	document.getElementById("mySidenav").style.display="block";
  document.getElementById("mySidenav").style.width = "190px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>

<?php
/*$db = "*";  //masked for security
$con_server = "*"; //masked for security
$con_user = "*";//masked for security
$con_password = "*"; //masked for security
*/$con = mysqli_connect($con_server , $con_user ,$con_password , $db);
if (!$con) {
	echo"Connecton failed";
    die('Could not connect: ' . mysqli_error($con));
}

$sql= "SELECT * from fee_details inner join student on fee_details.Std_id =student.Std_id where Feemanager_id='$fid'";
if($result = mysqli_query($con , $sql)){
	if(mysqli_num_rows($result)>0){
		echo "<table id='myTable' class='display'>
		<thead>
<tr>
<th>Std_id</th>
<th>Std_name</th>
<th>Class</th>
<th>Total_fee</th>
<th>Paid_fee</th>
<th>Balance_amt</th>
<th>Status</th>
</tr></thead><tbody>";
while($rows= mysqli_fetch_assoc($result)){
	echo "<tr>";
    echo "<td>" . $rows['Std_id'] . "</td>";
    echo "<td>" . $rows['Std_name'] . "</td>";
   	echo "<td>" . $rows['Class'] . "</td>";
    echo "<td>" . $rows['Total_fee'] . "</td>";
    echo "<td>" . $rows['Paid_fee'] . "</td>";
    echo "<td>" . $rows['Balance_amt'] . "</td>";
	?>
		<td><input type="text" class="stat" id="<?php echo($rows['Std_id']); ?>" readonly></td>
	<?php
	if($rows['Balance_amt']>0)
	{
	?>
	<script>
	var stdid = '<?php echo($rows['Std_id']); ?>';
	document.getElementById(stdid).value="Unpaid";
	</script>
	<?php
	}
	else{
		?>
	<script>
	var stdid = '<?php echo($rows['Std_id']); ?>';
	document.getElementById(stdid).value="Paid";
	</script>
	<?php
	}
    echo "</tr>";
        }
		echo"</tbody></table>";
		 //mysqli_fetch_assoc($result);	
		}
		/*else{
			echo "No recordmatching your query";
		}*/
	}
	else{
		echo"Erroor :could notable to execute $sql.".mysqli_error($con);
	}
	
	mysqli_close($con);

?>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );/*
$(document).ready(function() {
    $('#myTable').DataTable( {
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );*/
  </script>
</body>
</html> 
