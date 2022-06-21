<?php
	session_start();
	if(isset($_POST["submit"])) {
        include '../../actions_db/signin_form_action.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="../../navbarStyle.css">
	<script type="text/javascript" src="../formAnimations.js"></script>
	<script type="text/javascript" src="signInFormValidation.js"></script>
	<link href="../formsStyle.css" rel="stylesheet" type="text/css">

</head>
<body>
	<nav id="navbar">
		<div style="display: inline-block; width: 35%; float: left">
			<a href="../../home.html">Home</a>
		</div>
		<img src="../../images/Logo.png" title="logo of Uglyfood exchange" alt="site logo">
	</nav>
    <div class="box">
        <form action="../../actions_db/signin_form_action.php" style="margin-top: 5%;" id="form" method="post" name="form">
            <table>
                <!-- NAME ROW-->
                <tr>
                    <td>
                        First Name:
                    </td>
                    <td>
                        <label for="name">
                            <input name="name" id="name" type="text" placeholder="Insert your name"
                                   autocomplete="off"
                                   onfocusin="enlarge(this)"
                                   onfocusout="resize(this)" required>
                        </label>
                    </td>
                </tr>
                <!-- SURNAME ROW-->
                <tr>
                    <td>
                        Family Name:
                    </td>
                    <td>
                        <label for="surname">
                            <input name="surname" id="surname" type="text" placeholder="Insert your family name"
                                   autocomplete="off"
                                   onfocusin="enlarge(this)"
                                   onfocusout="resize(this)" required>
                        </label>
                    </td>
                </tr>
                <!-- BIRTH ROW-->
                <tr>
                    <td>
                        Date of Birth:
                    </td>
                    <td>
                        <label for="birth">
                            <input name="birth" id="birth" type="text" placeholder="dd/mm/yyyy" required
                                   autocomplete="off"
                                   onfocusin="enlarge(this)"
                                   onfocusout="resize(this)"
                                   onblur="checkAge(this.value)"
                                   onchange="checkAge(this.value)">
                        </label>
                    </td>
                </tr>
                <!-- EMAIL ROW-->
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <label for="email">
                            <input name="email" id="email" type="email" placeholder="insert your email"
                                   autocomplete="off"
                                   onfocusin="enlarge(this)"
                                   onfocusout="resize(this)">
                        </label>
                    </td>
                </tr>
                <!-- PASSW ROW-->
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <label for="psw">
                            <input name="psw" id="psw" type="password" placeholder="choose a password"
                                   onfocusin="enlarge(this)"
                                   onfocusout="resize(this)" onchange="checkPswLength()"
                                   required>
                        </label>
                    </td>
                </tr>
                <!-- CONFIRM PASSW ROW-->
                <tr>
                    <td>
                        Confirm password:
                    </td>
                    <td>
                        <label for="conf_psw">
                            <input id="conf_psw" name="conf_psw" type="password" placeholder="confirm that password"
                                   onfocusin="enlarge(this)" onfocusout="resize(this)"
                                   onchange="checkPasswords()"
                                   required>
                        </label>
                    </td>
                </tr>
            </table>
            <hr>
            <button id = "login" name="submit" type="submit" style="float: left"
                    onclick="checkAge(document.form.birth.value)"
                    onsubmit="checkAge(document.form.birth.value)"
                    onmouseover="enlarge(this)" onmouseleave="resize(this)">Sing In</button>
        </form>
    </div>
</body>
</html>