<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Edit Profile</title>
	<style>
	
	     body{
	  height:100%;
	  width:60%;
  }
  body {font-family: Arial, Helvetica, sans-serif;
color: white;
//padding: 0px 160px 0 0px;
height: 1000px;
//background:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
//background-image: url('reg1.jpg' );
//background-size:cover;

}
.form-container{
	//align:center;
	width: 80%;
	height: 100%;
	//background-color: #9BACBA;
	background-color: #5E5E5E;
   opacity: 0.9;
   margin-left:350px;
   
	
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
  //.insert{
	  height:100%;
	  width:100%;
  }
  
  .input-field {
  width: 100%;
  padding: 7px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}
.btn {
  background-color:#0073e6;
  color: white;
  font-size:20px;
  margin: 2px 0px 2px 0px;
  //padding: 16px 25px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  width: 80%;
  height:30px;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
	</style>
</head>
  
<body>
    <center>
        <!--<h1>Edit Profile</h1>
  
        <form id="insert" method="post">
            <div class="input"> 
            <p>
                <label for="firstName">First Name: </label>
                <input type="text" name="first_name" id="firstName" placeholder="Enter first name">
            </p>
			
			<p>
                <label for="firstName">Middle Name: </label>
                <input type="text" name="first_name" id="firstName" placeholder="Enter first name">
            </p>
			
			<p>
                <label for="firstName">Last Name: </label>
                <input type="text" name="first_name" id="firstName" placeholder="Enter first name">
            </p>
			
			<p>
                <label for="firstName">Father Name: </label>
                <input type="text" name="first_name" id="firstName" placeholder="Enter father name">
            </p>
         
            <p>
                <label for="lastName"> Mother Name: </label>
                <input type="text" name="last_name" id="lastName" placeholder="Enter mother name">
            </p>
  
            <p>
			     <label for="Contact">Contact: </label>
			     <input type="number" name="mobileno" id="Contact" placeholder ="Enter mobile no">
			</p>
                
            <p>
                <label for="emailAddress">Email Address: </label>
                <input type="text" name="email" id="emailAddress"  placeholder ="Enter email">
            </p> 
			
			<p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress"  placeholder ="Enter email">
            </p> 
			
			<p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress"  placeholder ="Enter email">
            </p>
                
							
            <input type="submit" value="Submit" onclick="Submit()">
			</div>
        </form>
		<script>
		function  Submit(){
			document.getElementById("insert").action="checklogin.php";
		}
		</script>-->

<div class= "form-container">
  <h2>Edit profile</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder=" Fee manager name" name="managername">
  </div>
  
  <!--<div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Father Name" name="fathername">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Mother Name" name="mothername">
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Class" name="class">
  </div>-->
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Fee manager Email" name="email">
  </div><div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="mobileno" placeholder="Mobile No" name="mobileno">
  </div>
  <!--<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="address">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Student Username" name="susername">
  </div>-->
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Password" name="password">
  </div>
  
  <!--<button type="submit" id="insert" class="btn">Insert</button>-->
  <button type="submit" id="update" class="btn">Update</button>
    </div>
</form>
</center>
<script>
function register(){
	document.getElementById("formwork").action="checklogin.php";
	}
</script>
    </center>
</body>
  
</html>