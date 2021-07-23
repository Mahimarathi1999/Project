<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Insert / Update Records</title>
</head>
  <style>
  body{
	  height:100%;
	  width:50%;
  }
  //body {font-family: Arial, Helvetica, sans-serif;
color: white;
padding: 0px 160px 0 0px;
height: 500px;
//background:linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
//background-image: url('reg1.jpg');
background-size:cover;

}
.form-container{
	//align:center;
	width: 80%;
	height: 50%;
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
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}
.btn {
  background-color:#0073e6;
  color: white;
  font-size:20px;
  //margin: 10px 30px 0 50px;
  margin: 2px 0px 10px 0px;
  padding: 16px 25px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
  </style>
<body>
<center>
<form id="formwork" method="POST">
<div class= "form-container">
  <h1>Insert /Update Form</h1>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder=" Student Id" name="studentid">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Student Name" name="studentname">
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Class" name="class">
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Student Email" name="email">
  </div><div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="mobileno" placeholder="Mobile No" name="mobileno">
  </div>
  <button type="submit" id="insert" class="btn" onclick="Insert()">Insert</button>
  <button type="submit" id="update" class="btn" onclick="Update()">Update</button>
    </div>
</form>
</center>
<script>
function Insert(){
	//alert("Hello");
	document.getElementById("formwork").action="insert.php";
	}
</script><!--
    <center>
        <h1>Insert/Update Records</h1>
  <div class="insert">
        <form action="insert.php" method="post">
              
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName" class>
            </p>
  
  
              
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
  
  
               <p>
                <label for="lastName">Mother Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
			
			 <p>
                <label for="lastName">Father Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
			
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
  
              
              
            <p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="Address">
            </p>
  
              
              
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
  </div>
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>