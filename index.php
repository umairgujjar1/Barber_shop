	<?php
	if (isset($_POST['register'])) {
		header("location:register.php");
	} else {

		if (isset($_POST['name']) && isset($_POST['password'])) {

			$name = $_POST['name'];
			$pass = $_POST['password'];
			include "conn.php";
			$sql = "SELECT  * FROM `member` where name='$name' AND password='$pass' ";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
			if ($row) {

				session_start();
				if (!isset($_SESSION['name'])) {



					if (isset($_POST['name']) && isset($_POST['password'])) {
						$name = $_POST['name'];
						$pass = $_POST['password'];
						$name = $_POST['name'];
						$pass = $_POST['password'];
						$_SESSION['name'] = $name;
						$_SESSION['password'] = $password;
						header("location:home.php");
					}
				}
			} else {
				echo '<script type ="text/JavaScript">';
				echo 'alert("PLEASE ENTER THE CORRECT NAME AND PASSWORD")';
				echo '</script>';
			}
		}
	}

	// session_start();
	// if (!isset($_SESSION['name'])) {



	// 	if (isset($_POST['name']) && isset($_POST['password'])) {
	// 		$name = $_POST['name'];
	// 		$pass = $_POST['password'];
	// 		$name = $_POST['name'];
	// 		$pass = $_POST['password'];
	// 		$_SESSION['name'] = $name;
	// 		$_SESSION['password'] = $password;
	// 		header("location:home.php");
	// 	}
	// }
	// 
	?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
		<title>Document</title>
	</head>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: Raleway, sans-serif;
		}

		h1 {
			color: #6969cddb;
			text-shadow: 3px 7px 5px #0aa374;
			margin-bottom: 8px;
		}

		body {
			background: linear-gradient(90deg, #C7C5F4, #776BCC);
		}

		.container {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}

		.screen {
			background: linear-gradient(90deg, #5D54A4, #7C78B8);
			position: relative;
			height: 600px;
			width: 360px;
			box-shadow: 0px 0px 24px #5C5696;
		}

		.screen__content {
			z-index: 1;
			position: relative;
			height: 100%;
		}

		.screen__background {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 0;
			-webkit-clip-path: inset(0 0 0 0);
			clip-path: inset(0 0 0 0);
		}

		.screen__background__shape {
			transform: rotate(45deg);
			position: absolute;
		}

		.screen__background__shape1 {
			height: 520px;
			width: 520px;
			background: #FFF;
			top: -50px;
			right: 120px;
			border-radius: 0 72px 0 0;
		}

		.screen__background__shape2 {
			height: 220px;
			width: 220px;
			background: #6C63AC;
			top: -172px;
			right: 0;
			border-radius: 32px;
		}

		.screen__background__shape3 {
			height: 540px;
			width: 190px;
			background: linear-gradient(270deg, #5D54A4, #6A679E);
			top: -24px;
			right: 0;
			border-radius: 32px;
		}

		.screen__background__shape4 {
			height: 400px;
			width: 200px;
			background: #7E7BB9;
			top: 420px;
			right: 50px;
			border-radius: 60px;
		}

		.login {
			width: 320px;
			padding: 30px;
			padding-top: 156px;
		}

		.login__field {
			padding: 20px 0px;
			position: relative;
		}

		.login__icon {
			position: absolute;
			top: 30px;
			color: #7875B5;
		}

		.login__input {
			border: none;
			border-bottom: 2px solid #D1D1D4;
			background: none;
			padding: 10px;
			padding-left: 24px;
			font-weight: 700;
			width: 75%;
			transition: .2s;
		}

		.login__input:active,
		.login__input:focus,
		.login__input:hover {
			outline: none;
			border-bottom-color: #6A679E;
		}

		.login__submit {
			background: #fff;
			font-size: 14px;
			margin-top: 30px;
			padding: 16px 20px;
			border-radius: 26px;
			border: 1px solid #D4D3E8;
			text-transform: uppercase;
			font-weight: 700;
			display: flex;
			align-items: center;
			width: 100%;
			color: #4C489D;
			box-shadow: 0px 2px 2px #5C5696;
			cursor: pointer;
			transition: .2s;
		}

		.login__submit1 {

			background: #EF9;
			font-size: 15px;
			margin-top: 14px;
			padding: 10px 15px;
			border-radius: 26px;
			border: 3px solid #D4D3E8;
			text-transform: uppercase;
			font-weight: 700;
			display: flex;
			align-items: center;
			width: 58%;
			color: #4C48B8;
			box-shadow: 0px 2px 2px #5C5696;
			cursor: pointer;
			transition: .2s;
		}

		.login__submit1:active,
		.login__submit1:focus,
		.login__submit1:hover {
			border-color: #6A679E;
			outline: none;
		}

		.login__submit:active,
		.login__submit:focus,
		.login__submit:hover {
			border-color: #6A679E;
			outline: none;
		}

		.button__icon {
			font-size: 24px;
			margin-left: auto;
			color: #7875B5;
		}

		.social-login {
			position: absolute;
			height: 140px;
			width: 160px;
			text-align: center;
			bottom: 0px;
			right: 0px;
			color: #fff;
		}

		.social-icons {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.social-login__icon {
			padding: 20px 10px;
			color: #fff;
			text-decoration: none;
			text-shadow: 0px 0px 8px #7875B5;
		}

		.social-login__icon:hover {
			transform: scale(1.5);
		}

		b {
			color: red;
		}
	</style>

	<body>

		<div class="container">
			<div class="screen">
				<div class="screen__content">
					<form class="login" action="" onsubmit="return myfunction()" method="post">
						<h1>WELCOME</h1>
						<div class="login__field">
							<i class="login__icon fa fa-user"></i>
							<input type="text" class="login__input" name="name" id="name" placeholder="User name / Email">
							<b id="nerror"></b>

						</div>
						<div class="login__field">
							<i class="login__icon fa fa-lock"></i>
							<input type="password" class="login__input" name="password" id="password" placeholder="Password">
							<b id="perror"></b>
						</div>

						<input type="submit" class="button login__submit" name="btn" value="LOG IN NOW">
						<input type="submit" class="button1 login__submit1" name="register" value="REGISTER NOW">

						</button>
					</form>
					<div class="social-login">
						<h3>log in via</h3>
						<div class="social-icons">
							<a href="https://www.instagram.com/" class="social-login__icon fa fa-instagram"></a>
							<a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjgxNjcyMzQ5LCJjYWxsc2l0ZV9pZCI6MjY5NTQ4NDUzMDcyMDk1MX0%3D" class="social-login__icon fa fa-facebook"></a>
							<a href="https://twitter.com/?lang=en" class="social-login__icon fa fa-twitter"></a>
						</div>
					</div>
				</div>
				<div class="screen__background">
					<span class="screen__background__shape screen__background__shape4"></span>
					<span class="screen__background__shape screen__background__shape3"></span>
					<span class="screen__background__shape screen__background__shape2"></span>
					<span class="screen__background__shape screen__background__shape1"></span>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function myfunction() {
				var name = document.getElementById("name").value;
				var password = document.getElementById("password").value;


				document.getElementById("perror").innerHTML = "";
				document.getElementById("nerror").innerHTML = "";
				if (name.trim() == "") {
					document.getElementById("nerror").innerHTML = "ivalid";
				}

				if (name.length.trim() < 3) {
					document.getElementById("nerror").innerHTML = "its short"
				}


				if (password.trim() == "") {
					document.getElementById("perror").innerHTML = "ivalid";
				}
				if (password.length.trim() < 6) {
					document.getElementById("perror").innerHTML = "its short"

				}

				if (name != '' && password != '') {
					alert("here");
					return true;
				} else {
					alert("else");
					return false;
				}




			}
		</script>
	</body>

	</html>