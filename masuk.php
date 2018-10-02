<?php
session_start();
date_default_timezone_set("Asia/Jakarta");//menentukan waktu server
?>
<!DOCTYPE html>
<html>
<head>
<title>Logged In</title>
<meta charset="UTF-8">
<style>
a
{
	margin: auto;
}
body
{
	background-color: #87CEFA;
}
h2
{
	text-align: center;
}
.masukform
{
	margin: auto;
	margin-top: 250px;
    width: 360px;
    background-color: white;
    border-style: solid;
    border-color: black;
    padding: 10px;

    
}
</style>
</head>
<body>
<?php

$nama=$password=$waktu="";//inisiasi variabel

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  	$nama=test_input($_POST["nama"]);
 	$password=test_input($_POST["password"]);
  
}

function test_input($data) 
{
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}


if($nama=="admin")
{
	if($password=="1234")
	{
		$_SESSION["status"]=1;
	}
	else
	{
		$_SESSION["status"]=0;
		header ("Location: login.html");//redirect
	}
}
else
{
	$_SESSION["status"]=0;
	header ("Location: login.html");//redirect
}
?>
<div class="masukform">
	<?php
	echo "Waktu Server adalah: " . date("h:i a");
	$time=date("H");//waktu dalam format 24 jam
	if($time>"18")
	{
		echo "<h2>Selamat Malam</h2>";
	}
	else if("15"<$time&&$time<="18")
	{
		echo "<h2>Selamat Sore</h2>";
	}
	else if("12"<$time&&$time<="15")
	{
		echo "<h2>Selamat Siang</h2>";
	}
	else 
	{
		echo "<h2>Selamat Pagi</h2>";
	}

	?>
	<a href="login.php">Log Out</a>
</div>



</body>
</html>
