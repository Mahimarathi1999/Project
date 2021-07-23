<?php 
if(isset($_POST['Sub'])){
	//echo"Hello";
	$stdid= $_POST['stdid'];
include 'databaseconfig.php';
$query="SELECT * from fee_details inner join student on fee_details.Std_id =student.Std_id inner join bank_details on 
         bank_details.Std_id= fee_details.Std_id where student.Std_id='$stdid'";
$sql=mysqli_query($con , $query);
$total =mysqli_num_rows($sql);
$std_name="";
$mother ="";
$father ="";
$email="";
$branch_name="";
$mobile =0;
$total_fee =0;

if($total==1){
	while($res=mysqli_fetch_assoc($sql)){
		$mother=$res['Mother_name'];
		$father=$res['Father_name'];
		$branch_name=$res['Branch_name'];
		$total_fee =$res['Total_fee'];
		$std_name =$res['Std_name'];
		$email =$res['Email_address'];
		$branch_name= $res['Branch_name'];
		$mobile =$res['Contact_no'];
		
		}
		//echo($mother);
		}
else{
	echo "<script>alert('no record found');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<!-- Bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<!-- Fontawesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jquery link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- ajax link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<!-- jquery link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- ajax link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
	<title></title>
	<style type="text/css">
		*{
			padding: 0;
			margin:0;
			box-sizing: border-box;
		}
		body{
			background:#C8D7DA;
		}
		.body-content{
			width: 100vw;
			height:20vh;
		}
		.student{
			width:97vw;
			height:20vh;
			margin-left: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 20px #cdcdcd;
		}
		.f1{
			width: 100%;
		display: grid;
		place-items:center;		
		}
		td{
			 padding:0 15px;
		}
		.stud{
			height: 10vh;
			width: 97vw;
			margin-left: 20px;
		background-color: #cdcdcd;
		display: flex;
		align-items: center;
		justify-content: center;
		display: none;	
		}
		h2{
			color: black;
			width: 100vw;
		}
		.fee{
			height: 70vh;
			width: 97vw;
			margin-left: 20px;
			background-color: #cdcd;
			display: none;
		}
		.one{
			background-color: rgba(255,255,255,0.5);
			margin-top: 10px;
			margin-left:90px; 
		}
		.two{
			background-color: rgba(255,255,255,0.5);
			margin-top: 10px;
			margin-left: 50px;
		}
		.text-muted{
			display: none;
		}
		.temp{
			display: none;
		}
		body {margin:0;font-family:Arial}


/*.sidenav {
  height: 100%;
  width:190px;;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
 //background-color: linear-gradient(to top left, #ffffff -2%, #add8e6 41%);
  background-color:white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
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
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}*/
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  //color: #f1f1f1;
   color:white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
    <a href="editprofile.php">Edit Profile</a>
  <a href="userlogin.php">LogOut</a>
  </div>
  <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776; </span>
 
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "190px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="row m-0 p-0 bg-dark body-content">
</div>
<div class="row student">
	<form class="f1" method="POST">
		<table class=" table-borderless"> 
			<tr>
				<td>Student Number : </td>
				<td ><input type="text" name ="stdid" placeholder="Student Number" id="stid"></td>
				<td><button type="button" name="Sub" class="btn btn-primary" id="sub">Submit</button></td>
			</tr>
			
		</table>
		
	</form>
</div>
<div class="row stud">
	<h2><center>Student Information & Fee Particulars</center></h2>
</div>
<div class="row fee">
	<div class="col-6 one ">
		<div class="card-header">Student Information</div>
         <div class="card-body text-primary">
          <div class="row">
          <div class="col-md-4 col-sm-4 col-sm-12">
          <label for="inputCity">Student Name</label>
          <input name="StudentName" type="text" value="<?php if(isset($std_name)){
		  echo ($std_name); }else "No data";?>" readonly="readonly" id="Student_Name"  class="form-control">
          </div>
          <div class="col-md-4 col-sm-4 col-sm-12">
          <label for="inputPostalCode">Mobile Number</label>
          <input name="MobileNumber" type="text" value="<?php if(isset($mobile)){ echo($mobile);} ?>" readonly="readonly"
		  id="MobileNumber" class="form-control">
          </div>
         <div class="col-md-4 col-sm-4 col-sm-12">
         <label for="inputState">Father Name</label>
         <input name="FatherName" type="text" value="<?php if(isset($father)){ echo($father);}?>" readonly="readonly"
		 id="FatherName" class="form-control">
         </div>
         <div class="col-md-4 col-sm-4 col-sm-12">
         <label for="inputPostalCode">Mother Name</label>
         <input name="MotherName" value="<?php  if(isset($mother)){ echo($mother);}?>" 
		 type="text" readonly="readonly" id="MotherName" class="form-control">
         </div>

         <div class="col-md-4 col-sm-4 col-sm-12">
         <label for="inputState">Email Address</label>
         <input name="EmailAddress" type="text" readonly="readonly" id="EmailAddress" value="<?php if(isset($email))
		 { echo ($email);}?>" class="form-control">
         </div>
          <div class="col-md-4 col-sm-4 col-sm-12">
         <label for="inputState">Branch Name</label>
         <input name="BranchName" type="text" value="<?php if(isset($branch_name)){ echo($branch_name);}?>" readonly="readonly" 
		 id="BranchName" class="form-control">
         </div>
        </div>
      </div>
	</div>
	<div class="col-4 two ">
		<div class="card-header">Fee Particulars</div>
         <div class="card-body text-primary">
          <div class="row">
          <div class="col-md-6 col-sm-6 col-sm-12">
          <label>TOTAL FEE</label>
          <input name="Totalfee" type="text" id="totamt" value= "<?php  if(isset($total_fee)){
			 echo($total_fee);}?>"class="form-control" readonly>
          </div>
          <div class="col-md-6 col-sm-6 col-sm-12">
          <label>PAY FEE</label>
          <input name="Paidamt" type="text" id="payamt" class="form-control" onchange= "fn()">
          </div>
          <div class="col-md-6 col-sm-6 col-sm-12">
          <label>BALANCE </label>
          <input name="Remamt" type="text" id="Balamt" class="form-control"readonly>
          </div>

         <!-- <div class="col-md-6 col-sm-6 col-sm-12">
          <label>Uniform Amount</label>
          <input name="ctl00$BodyContent$txtUniformAmount" type="text" readonly="readonly" id="BodyContent_txtUniformAmount" class="form-control">
          </div>
          <div class="col-md-6 col-sm-6 col-sm-12">-->
          <label>PAY THROUGH </label>
		  <label> CASH</label>
          <input id="BodyContent_chkIncludeMaterialAmount" type="radio" name="ctl00$BodyContent$chkIncludeMaterialAmount">
          <!--<input name="ctl00$BodyContent$txtMaterialAmount" type="text" value="0" readonly="readonly" id="BodyContent_txtMaterialAmount" 
		  class="form-control">-->
          <label> CHEQUE</label>
          <input id="BodyContent_chkIncludeMaterialAmount" type="radio" name="ctl00$BodyContent$chkIncludeMaterialAmount">
          <!--<input name="ctl00$BodyContent$txtMaterialAmount" type="text" value="0" readonly="readonly" id="BodyContent_txtMaterialAmount" 
		  class="form-control">-->
		  <!--<label> OTHER</label>
          <input id="BodyContent_chkIncludeMaterialAmount" type="radio" name="ctl00$BodyContent$chkIncludeMaterialAmount">
          <input name="ctl00$BodyContent$txtMaterialAmount" type="text" value="0" readonly="readonly" id="BodyContent_txtMaterialAmount"
		  class="form-control">
		  --></div>
          </div>
          </div>
          </div>
          </div>
          </div>
	</div>
</div>
<div class="col-md-12 col-sm-12 col-sm-12 text-right margin-top-10">
<p class="text-muted" style="margin-top: 10px;margin-left: 120px;text-align:center; margin-bottom: 1rem;">Please select the check box on top of the Material amount, if you wish to pay the material amount also.</p>
                       </div>
                       <br>
                      <div class="text-center temp margin-top-23" id="bottom">
                     <!-- <a id="BodyContent_btnSubmitData" class="btn btn-success" href="javascript:__doPostBack
					  ('ctl00$BodyContent$btnSubmitData','')"><i class="fa fa-save" aria-hidden="true"></i> Pay </a>
                      &nbsp;-->
                      <a id="BodyContent_btnSubmitData" class="btn btn-success" href="javascript:__doPostBack
					  ('ctl00$BodyContent$btnSubmitData','')"><i class="fa fa-save" aria-hidden="true" onclick="Print()"></i> Print recipt </a>
                     &nbsp;											
                     <a id="BodyContent_btnCancel" class="btn btn-danger" href="javascript:__doPostBack
					 ('ctl00$BodyContent$btnCancel','')"><i class="fa fa-close" aria-hidden="true"></i> Cancel</a>
                     </div>
                     </div>
<script type="text/javascript">
	$("#sub").click(function(){
		var studnum = document.getElementById('stid').value;
		var pat = /\d/;
		var length = studnum.length;
		if(studnum=="")
		{
			alert("Field Cannot be empty");
		} 
		else if(!studnum.match(pat)){
			alert("Please enter only numbers");
		}
		else if(length<7 && length>7)
		{
			alert("Only seven digits required");
		}
		/*else if(studnum!='0987654')
		{
			alert("No such Student Number Found");
		}*/
		else{
			$(".stud").css("display","flex");
			$(".fee").css("display","flex");
			$(".text-muted").css("display","block");
			$(".temp").css("display","block");
		}
	});
	function fn(){
		var amt =document.getElementById("payamt").value;
		var total = '<?php  if(isset($total_fee)){echo ($total_fee);}?>';
		var Bal = total - amt;
		var pay = document.getElementById('payamt').value;
		var sid = '<?php echo $stdid; ?>';
		document.getElementById("Balamt").value=Bal;
		$.ajax({
			url:"up.php",
			type:"POST",
			data: { balance:Bal , stdid:sid , payamt:pay }
		});
	}
	function Print(){
		document.getElementById("bottom").action="print.php";
	}
</script>
</body>
</html>