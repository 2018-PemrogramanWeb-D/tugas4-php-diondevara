<?php
session_start();
$_SESSION["status"]=0;
?>
<!DOCTYPE html>
<html lang="id>
<head>
<title>Log in</title>
<meta charset="UTF-8">
<style>
body
{
	background-color: #87CEFA;
}
h2
{
	text-align: center;
}
.loginform 
{
	margin: auto;
	margin-top: 250px;
    width: 360px;
    background-color: white;
    border-style: solid;
    border-color: black;
    padding: 10px;
    
}
input[type=text] 
{
	margin: auto;
	width: 350px;
}
input[type=password] 
{
	margin: auto;
	width: 350px;
}
input[type=submit] 
{
    margin: auto;
    border: 5px black;
    padding: 15px;
    background-color: lime;
}
</style>
</head>
<body>
<form method="post" action="masuk.php">
	<div class="loginform">
		<h2>Log In</h2>
		Nama:<br> 		
		<input type="text" name="nama"><br><br>
		Password:<br> 	
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit">
	</div>

</form>

</body>
</html>