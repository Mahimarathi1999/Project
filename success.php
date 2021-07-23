<!DOCTYPE html>
<html>
<title>Sucess</title>
<body>

<p>Suceess</p>

</body>
</html> <!--
<!DOCTYPE html>
<html>
<head>
<title> OTP SMS Mobile Verification </title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
body {
    background:#99ccff;
	//opacity :0.9;
}

.card {
    width: 450px;
	height: 290px;
	margin: 150px 150px 0 400px;
    padding: 20px 20px 0 20px;
    border-radius: 20px;
    background: #fff;
    border: none;
    //position: relative;
}

.container {
    height: 500px;
}

.email-text {
    color: #4A464D;
    font-size: 22px
}

.form-control {
	margin: 10px 10px 10px 30px;
	width:50px;
	height: 40px;
	font-size:30px;
	border-radius:10px;
	//border-bottom:50px lightgrey;
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: green;
    outline: 0;
	box-shadow: none;
}

.cursor {
    cursor: pointer;
    color:red;
    font-size: 25px;
	//padding:100px;
	margin:10px 0 0 10px;
}
input[type=submit]
{

font-size: 25px;
border-radius: 5px;
margin-left:160px;
background-color: lightgreen;
}
</style>
</head>

<div class="d-flex justify-content-center align-items-center container">
    <div class="card ">
        <h1 class="m-0">Email verification code</h1><span class="email-text">Enter the code we just send on your email 
		<b class="text-danger">abc@gmail.com</b></span>
        <div class="d-flex flex-row mt-5">
		<input type="text" class="form-control" autofocus="" autocomplete="new_password">
		<input type="text" class="form-control" autocomplete="new_password">
		<input type="text" class="form-control" autocomplete="new_password">
		<input type="text" class="form-control" autocomplete="new_password">
		</div>
		<div class="submit"><input type="submit" value="Submit" href="studentlogin.php"></div>
        <div class="text-center mt-5"><span class="d-block email-text" style="padding:10px">Don't receive the code?</span>
		<span class="font-weight-bold text-danger cursor">Resend</span></div>
    </div>
</div>

</body>
</html>
<<!--body>

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification">
			<div class="form-heading">Mobile Number Verification</div>

			<div class="form-row">
				<input type="number" id="mobile" class="form-input"
					placeholder="Enter the 10 digit mobile">
			</div>

			<input type="button" class="btnSubmit" value="Send OTP"
				onClick="sendOTP();">
		</form>
	</div>

	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>-->
	