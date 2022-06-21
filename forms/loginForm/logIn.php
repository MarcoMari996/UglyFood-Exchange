<?php
	session_start();
    if(isset($_POST["submit"])) {
        include '../../actions_db/loginProcedure.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In Form</title>
	<script type="text/javascript" src="../formAnimations.js"></script>
	<link href="../formsStyle.css" rel="stylesheet" type="text/css">
	<link href="../../navbarStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	<nav id="navbar">
		<div style="display: inline-block; width: 35%; float: left">
			<a href="../../home.html">Home</a>
		</div>
		<img src="../../images/Logo.png" title="logo of Uglyfood exchange" alt="site logo">
	</nav>
	<div class="box">
		<form id = "form" name="loginForm" method="post" action="../../actions_db/loginProcedure.php">
			Email<br>
			<label for="email">
				<input id="email" name="email" onfocusin="enlarge(this)" onfocusout="resize(this)" placeholder="Insert your email"
				       required type="email">
			</label><br>
			Password<br>
			<label for="password">
				<input id="password" name="psw" type="password" placeholder="Insert your password" onfocusin="enlarge(this)"
				       onfocusout="resize(this)" required>
			</label><br><hr>
			<button id = "login" type="submit" style="float: left"
			        onmouseover="enlarge(this)" onmouseleave="resize(this)">Log In</button>
			<span>otherwise, if you don't have an account <a href="../signinForm/signIn.php">Sing In</a></span>
		</form>
	</div>
</body>
</html>