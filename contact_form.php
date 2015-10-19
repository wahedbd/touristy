<?php include 'validation.php';?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title>BuddyNest Contact Form</title>
	<meta charset = "utf-8"/>
	
	<link rel = "stylesheet" type = "text/css" href = "css/contact_style.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class = "body">
	<header class = "mainHeader">
		<div class = "logo">
			<a href = "index.html"><img src = "img/BuddNest logo1.png"></a>
		</div>
		
		<nav id = "navMenu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Member</a>
					<ul>
						<li><a href="#">Verified</a></li>
						<li><a href="#">Not Verified</a></li>
						<li><a href="#">Both</a></li>
					</ul><!--end inner UL -->
				</li>
				<li><a href="#">Advertisement</a>
					<ul>
						<li><a href="#">Volunteer</a></li>
						<li><a href="#">Paid Helper</a></li>
						<li><a href="#">Help Seeker</a></li>
					</ul><!--end inner UL -->
				</li><!--end main LI -->
				
				<li><a href="#">Additional Help</a>
					<ul>
						<li><a href = "#">Accommodation</a></li>
						<li><a href = "#">Health</a></li>
						<li><a href = "#">Food</a></li>
						<li><a href = "#">Official</a></li>
						<li><a href = "#">Shopping</a></li>
						<li><a href = "contact_form.php">Travel</a></li>
					</ul><!--end inner UL -->
				</li>
				<li><a href="contact.php">Contact</a></li>	
			</ul><!-- end main UL -->
			
			<br class = "clearFloat">
		</nav>
	</header>
<div class="container">
	<div class="main">
		<h2>PHP Contact Form with Validation</h2>
		<form method="post" action="contact_form.php">
		
			<label>Name :</label>
			<input class="input" type="text" name="name" value=""><br>
			<span class="error"><?php echo $nameError;?></span><br>
			<br>
			<label>Email :</label>
			<input class="input" type="text" name="email" value=""><br>
			<span class="error"><?php echo $emailError;?></span><br>
			<br>
			<label>Purpose :</label>
			<input class="input" type="text" name="purpose" value=""><br>
			<span class="error"><?php echo $purposeError;?></span><br>
			<br>
			<label>Message :</label>
			<textarea name="message" val=""></textarea><br>
			<span class="error"><?php echo $messageError;?></span><br>
			<br>
			<span class="success"><?php echo $successMessage;?></span><br>
			<br>
			<input class="submit" type="submit" name="submit" value="Submit">
		
		</form>
	</div>
</div>

<footer class = "mainFooter">
		<p>Copyright &copy; Mohammad Wahedul Haque</p>
	</footer>
	<br class = "clearFloat">
</body>
</html>