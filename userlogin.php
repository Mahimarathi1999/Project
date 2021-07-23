<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(to right, #33ccff 23%, #ff99cc 100%)
}

* {
  box-sizing: border-box;
}

.form_container {
  /* The image used */
  background-image: url("image.jpg");

  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px ;
  max-width: 450px;
  padding: 10px;
  border-radius:20px;
 // background-color: transparent; 
  background-color: white;
  opacity:0.9;
 
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: inset;
  background:white;
  opacity:0.7;
  
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color:#4EB6F5;
  color: white;
  font-size:20px;
  margin: 10px 0 0 40px;
  padding: 16px 25px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.text-block {
  float:left;
   position: relative;
  text-align: center;
  color: #FDF2F0;
  width:700px;
  height:700px;
  margin-top:100px;
  margin-left:50px;
}
.dropdown {
  position: static;
  display: inline-block;
  width:100%;
}
.dropbtn {
  background-color: #66b3ff;
  color: white;
  width:100%;
  padding: 16px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  border-radius:10px;
}

.dropdown-content {
  display: none;
  position: static;
  background-color: #f9f9f9;
  min-width: 100%;
  text-align:center;
  border-radius: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
	background-color: #f1f1f1
	}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #b3d9ff;
}
.select{
	
}
</style>
<!-- jquery link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!--<h2>Form on Hero Image</h2>-->
<!--<div class="nav">

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="/" class="logo" title="DIGIPAY">
                            <img src="digipaylogo2.jpg" alt="DIGIPAY">
                        </a>
                    </div>
                </div>-->
            </div> 
			
			
<div class="form_conatiner">
<div class="text-block" >
      <h1>Start Using DIGIPAY NOW!<span>Best online payment platform<br>
          for educational campuses</span></h1>
	 <h2>Because of Covid 19, payment gateway and Bank servers have very heavy load. In case you experience a slow response,
	 please try again after some time.</h2>
	 </div>
  <form  class="container" id="f1" method="POST">
    <h1>Login</h1>
     
    <label for="un"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="em" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="pass" placeholder="Enter Password" name="psw" required>
     
    <select name="UserType" style ="width:100%;height:30px;text-color:black;font-size:20px;">
	<option>Fee Manager</option>
	<option>Student<option>
	</select>
    
    <button type="submit" id="login" class="btn">Login</button>
	<p>Forget password? <a href="#"style ="color:#0006FA">Reset</a>.</p>
      <p>Don't have an account? <a href="#"style ="color:#0006FA">Register</a>.</p>	
	</form>
</div>

<script type="text/javascript">
	Rs("#login").click(function(){
		
		var usr_id = document.getElementById("em").value;
		var password = document.getElementById("pass").value;
		if(usr_id=="")
		{
			alert("Username field is empty");
		}
		else if(password=="")
		{
		alert("Password field is empty");	
		}
		/*else if(mahima!="Rathimahima70")
		{
			//alert(mahima + "Rathimahima70");
			alert("Invalid Username");
		}
		else if(password!="Mr12345")
		{
			alert("Invalid Password");
		}*/
		else{
			document.getElementById("f1").action="validate.php";
		}
	});
</script>

</body>

</html>
