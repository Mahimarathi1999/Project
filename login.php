<html>
<head>
<style>
.container
{
border-radius: 5px;
padding: 110px;
}
.label{
font-size: 50px;
}
input[type=text]
{
width:30%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border-radius: 10px;
}
input[type=password]
{
width:30%;
padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
border-radius: 10px;
}
input[type=submit]
{

font-size: 30px;
border-radius: 5px;
background-color: green;
}
</style>
<button onclick="back()">BACK</button>
<script>
function back()
{
window.history.back();
}
</script>
</head>
<body>
<div class="container" align="center">
<div class="label"><label><u><b>LOGIN</b></u></label>
</div>
<br>
<br>
<br>
<br>
<br>
<form action="links.php" method="post">
Username<input type="text" class="text" name="name">
<br><br>
<div class="password">
Password<input type="password" name="password"></div>
<br>
<br>
<div class="submit"><input type="submit" value="Login"></div>
</form>
</div>
</body>
</html>

