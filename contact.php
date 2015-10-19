<?php include 'validation.php';?>
<!DOCTYPE html>
<html lang = "en">

<head>
	<title>BuddyNest</title>
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
						<li><a href = "#">Travel</a></li>
					</ul><!--end inner UL -->
				</li>
				<li><a href="contact.php">Contact</a></li>	
			</ul><!-- end main UL -->
			
			<br class = "clearFloat">
		</nav>
	</header>
	<div class = "mainContent">
			<div id = "contentWrap">
				<div class = "profileContent">
						<img id = "profile_image"src = "img/profile_image.jpg"/>
				</div>
				<br class = "clearFloat">
				<b>You are welcome to contact me :)</b>
				<br class = "clearFloat">
				<span class = "show"><?php echo $successMessage;?><br></span>
				<form method="post" action="contact.php">
					<div id = "form">
						<div class = "row">
							<div class = "label">
								Your Name*:
							</div> <!-- end .label -->
							
							<div class = "input">
								<input type = "text" id = "fullname" class = "detail" name = "name" value = ""/>
								<span class="error"><?php echo $nameError;?></span>
							</div> <!-- end .input -->
							
							<div class = "context">
								e.g. Mohammad Wahedul Haque
							</div> <!-- end .context -->
						</div> <!-- end of .row -->
						
						<div class = "row">
							<div class = "label">
								Email Address*:
							</div> <!-- end .label -->
							
							<div class = "input">
								<input type = "text" id = "email" class = "detail" name = "email" value = ""/>
								<span class="error"><?php echo $emailError;?></span>
							</div> <!-- end .input -->
							
							<div class = "context">
								I will not share your email with anyone or spam you with message either
							</div> <!-- end .context -->
						</div> <!-- end of .row -->
						
						<div class = "row">
							<div class = "label">
								Purpose*:
							</div> <!-- end .label -->
							
							<div class = "input">
								<input id = "purpose" class = "detail"name = "purpose" value=""/>
								<span class="error"><?php echo $purposeError;?></span>
							</div> <!-- end .input -->
						</div> <!-- end of .row -->
						
						<div class = "row">
							<div class = "label">
								Message*:
							</div> <!-- end .label -->
							
							<div class = "input">
								<textarea id = "comment" name = "message" class = "mess"></textarea>
								<span class="error"><?php echo $messageError;?></span>
								<span>* required fields</span>
							</div> <!-- end .input -->
						</div> <!-- end of .row -->
						
						<div class = "submit">
							<input type = "submit" id = "submit" name = "submit" value = "Send Message" onClick = "myFunction();">
						</div> <!-- end .submit -->
					</div> <!-- end of #form -->
				</form>
			</div> <!-- end of formWrap -->
	</div>
	
	<footer class = "mainFooter">
		<p>Copyright &copy; Mohammad Wahedul Haque</p>
	</footer>
	<br class = "clearFloat">
</body>
</html>