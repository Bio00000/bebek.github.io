<html>
	<head>
		<title>Login admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<style>
		body{
			background-color: black;
			text-align: center;
			}
		h1{
			background-color: black;
			color:  cyan;
			text-align: center;
			border: 2px solid cyan;
			border-radius: 10px;
			padding : 2px;
			box-shadow: 0px 0px 15px #4195fc;
			-moz-box-shadow: 0px 0px 15px #4195fc;
			-webkit-box-shadow: 0px 0px 15px #4195fc;
		}
		input{
			background-color: transparent;
			color: cyan;
			height: 30px;
			width: 200px;
			outline: none;
			border: 2px solid cyan;
			border-radius: 15px;
			padding: 5px;
			box-shadow: 0px 0px 15px #4195fc;
			-moz-box-shadow: 0px 0px 15px #4195fc;
			-webkit-box-shadow: 0px 0px 15px #4195fc;
		}
		
		button{
			width: 120px;
			height: 25px;
			background-color: black;
			color: cyan;
			border-radius: 7px;
			border: 2px solid cyan;
			outline: none;
			box-shadow: 0px 0px 15px #4195fc;
			-moz-box-shadow: 0px 0px 15px #4195fc;
			-webkit-box-shadow: 0px 0px 15px #4195fc;
		}
		</style>
		</head>
	<body>
		<h1>LOGIN BIO00000</h1>
		    <br><br>
			<?php
			if($_GET["id"]){
			if($_GET["id"] == "failed"){
				echo "<font color='red'>Login gagal";
				}
				}
				?>
			<form action="proses.php" method="post">
		<input type="user" name="email" placeholder="Masukan Email">
			<br><br>
		<input type="password" name="password" placeholder="Masukan Password">
			<br><br>
		<button type="submit" name="enter">Login</button>
		</form>
	</body>
	</html>