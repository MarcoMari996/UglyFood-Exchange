<?php
	session_start();
    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $birth = $_SESSION['birth'];
    $email = $_SESSION['email'];
    $profileImg = $_SESSION['profileImg'];

    if (isset($_POST["submit"])){
    	include "updateImage.php";
    }


?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Private Area</title>
	<link href="privateAreaStyle.css" rel="stylesheet" type="text/css">
	<script src="privateBehavior.js" type="text/javascript"></script>
</head>
<body onload="makeActive(document.getElementById('profile'));">
	<nav class="sidebar" id="sidebar">
		<img src="../images/Logo.png" title="logo of Uglyfood exchange" alt="logo">
		<button class="closebtn" onclick="closeNav()">&times;</button>
		<a href="#" class="mainlinks" id="profile" onclick="makeActive(this)">Profile</a>
		<a href="#" class="mainlinks" id="products" onclick="makeActive(this)">Products</a>
		<a href="#" class="mainlinks" id="contact" onclick="makeActive(this)">Contact us</a>
	</nav>
	<span onclick="openNav()">&#9776; menu</span>

	<div class="main" id="main">
		<div class="maincontent" id="profileContent">
			<button class="logout" value="log out" onclick="logout()">Logout</button>
			<h2>Profile</h2>
			<div class="imageContainer">
				<img src="data:image/*;base64,<?php echo $profileImg?>" id="profileImg" alt="profile Image">
				<div class="changeImg" onclick="triggerImgUpdating()" >
					Change<br>Image
					<form action="updateImage.php" style="display: none" enctype="multipart/form-data" method="post">
						<input type="file" name="fileToUpload" id="fileToUpload" accept="image/*" onchange="triggerSubmit()">
						<input type="submit" name="submit" id="submit">
					</form>
				</div>
			</div>
			<table>
				<tr>
					<td>
						<b>Name:</b>
					</td>
					<td>
						 <?php echo $name ?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Surname:</b>
					</td>
					<td>
                        <?php echo $surname ?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Birth day:</b>
					</td>
					<td>
                        <?php echo $birth ?>
					</td>
				</tr>
				<tr>
					<td>
						<b>E-mail:</b>
					</td>
					<td>
                        <?php echo $email ?>
					</td>
				</tr>

			</table>
		</div>
		<div class="maincontent" id="productsContent" style="text-align: center">
			<h2>Products</h2>
			<div class="card">
				<img src="../images/products/melanzana.jpg" alt="product">
				<h5>Eggplant</h5>
				<p class="price">0.69 €/kg</p>
				<p>Seller: Carrefour</p>
				<p><button>Add to Cart</button></p>
			</div>
			<div class="card">
				<img src="../images/products/carota.jpg" alt="product">
				<h5>Carrots</h5>
				<p class="price">0.39 €/kg</p>
				<p>Seller: Esselunga</p>
				<p><button>Add to Cart</button></p>
			</div>
			<div class="card">
				<img src="../images/products/zucchina.jpg" alt="product">
				<h5>Zucchini</h5>
				<p class="price">0.25 €/kg</p>
				<p>Seller: Le delizie </p>
				<p><button>Add to Cart</button></p>
			</div>
			<div class="card">
				<img src="../images/products/mela.jpg" alt="product">
				<h5>Apples</h5>
				<p class="price">0.79 €/kg</p>
				<p>Seller: Iper, la grande I</p>
				<p><button>Add to Cart</button></p>
			</div>
			<div class="card">
				<img src="../images/products/banana.jpg" alt="product">
				<h5>Banana</h5>
				<p class="price">0.49 €/kg</p>
				<p>Seller: miniMarker</p>
				<p><button>Add to Cart</button></p>
			</div>
			<div class="card">
				<img src="../images/products/patata.jpg" alt="product">
				<h5>Potatos</h5>
				<p class="price">0.47 €/kg</p>
				<p>Seller: Esselunga</p>
				<p><button>Add to Cart</button></p>
			</div>
			<!-- altre card di prodotti -->
		</div>
		<div class="maincontent" id="contactContent">
			<h2>Conctacts</h2>
			<img src="../images/Logo.png" style="width: 300px; object-fit: scale-down; border: 1px solid silver">
			<div class="contacts">
				<p>phone number: +39 348 *** ****</p>
				<p>email: uglyfoodex@info.com</p>
				<p>location: via Adolfo Ferrata,9 @ Pavia, Italy.</p>
				<p>leave a comment:</p>
				<textarea placeholder="write here!"></textarea><br>
				<input type="submit" value="send">
			</div>
		</div>

	</div>
</body>
</html>