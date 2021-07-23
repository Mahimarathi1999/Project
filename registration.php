<!--<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style>
.container
{
border-radius: 5px;
padding: 100px;
width: 1000px;
height:1000px;
}
.label{
font-size: 50px;
margin: 0 0 0 25px;
}
input[type=email]
{
width:20%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border-radius: 10px;
}
input[type=password]
{
width:20%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border-radius: 10px;
}
input[type=submit]
{
width:200px;
margin: 0 0 0 45px;
font-size: 30px;
border-radius: 5px;
background-color: blue;
}
input[type=cancel]
{
width:200px;
margin: 10px 0 0 45px;
font-size: 30px;
border-radius: 5px;
background-color: red;
}
</style>
</head>
<body>
<div class="container" align="center" >
<div class="label"><label><u><b>REGISTRATION</b></u></label>
</div>
<br><br><br>

<form action="links.php" method="post">
Email :-<input type="email" class="email" name="name">
<br><br>
<div class="password">
Password :-<input type="password" name="password"></div>
<br><br>
<div class="submit"><input type="submit" value="Login"></div>
<div class="cancel"><input type="cancel" value="Back"></div>
</form>
</div>-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://www.google.com/recaptcha/api.js"async defer></script>
<script src=""></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;
color: white;
padding: 0px 160px 0 0px;
height: 500px;
//background:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
background-image: url('reg1.jpg' );
background-size:cover;

}
.form-container{
	margin-right: 480px;
	width: 80%;
	height: 100%;
	//background-color: #9BACBA;
	//background-color: #5E5E5E;
   opacity: 0.9;
   
	
}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  background-color: white;
  width: 90%;
  margin-left: 10px;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

.g-recaptcha{
	margin:10px;
	
}
/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  margin-left: 30px;
  border: none;
  cursor: pointer;
  width: 80%;
  border-radius:20px;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.btn1 {
  background-color:#ff4d4d ;
  color: white;
  padding: 15px 20px;
  margin-left: 30px;
  margin-top:3px;
  border: none;
  cursor: pointer;
  width: 80%;
  border-radius:20px;
  opacity: 0.9;
}

.btn1:hover {
  opacity: 1;
}
.status{
	font-size:15px;
	color:green;
	padding:15px;
}
.status span{
	color:red;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<form method="POST" id="formwork" style="max-width:500px;margin:auto">
  <div class= "form-container">
  <h1>Registration Form</h1>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="School Name" name="schlnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Enter Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Enter Password" name="psw">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="psw">
  </div>
  <!--<div  class="g-recaptcha" data-sitekey="6LeVXoYaAAAAAGFONbjKeu5XRCigf6fYcC7OMmNH" ></div>-->
 <hr>
<p style="margin-left:10px">By creating an account you agree to our <a href="#" style="color:#0006FA">Terms & Privacy</a>.</p>
  <button type="submit" class="btn" onclick= "register()">Register</button>
  <button type="cancel" class="btn1"><a href="index.php">Back</a></button>
  
  <div class="container signin">
    <p style="margin-left:30px;font-color:black">Already have an account? <a href="userlogin.php"style ="color:#0006FA">Log in</a>.</p>

  </div>
  </div>
</form>
<script>
function register(){
	document.getElementById("formwork").action="checklogin.php";
	}
</script>
<div class="status">
 
<!--if(isset($POST['submit']))
{
	$Schoolname=$_POST['schlnm'];
	$User_email=$_POST['email'];
	
	$email_from='noreply@digipay.com';
	$email_subject="Registration Code";
	$email_body="Name : $Username.\n".
	             "Email Id: $User_email.\n";
	
$to_email = "rathimahima70@gmail.com";
$headers= "From : $email_from\r\n";
$headers .="Replt to :$User_email\r\n";

$secretkey= "6LeVXoYaAAAAAHYapMwLCT5eWUAU6yZQaEI9fKu2";
$response_key=$_POST['g-recaptcha-response'];
$UserIP= $_SERVER['REMOTE_ADDR'];
$url="http://www.google.com/recaptcha/api/siteverify?secret=$secretkey &response=$responsekey &remoteip= $UserIP";

$response =file_get_contents($url);
$response =json_decode($response);

if($response->success){
	mail($to_email ,$email_subject, $email_body , $headers);
	echo"Registered successfully";
}
else{
	echo"<span>Invalid captcha, Please Try Again </span> ";
?>	}
}-->

</div>
 </body>
<html>
