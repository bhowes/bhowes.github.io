<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width" >
		<title>Brittany Howes Portfolio</title>
		<link rel="stylesheet" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>




	</head>

<body>
		<div id="wrap">
			<div id="main">
				<header>

					<div id="navigation">
							<div class="centeredlogo">
								<div class="logo">
									<a href=index.html></a>
								</div>
							</div>

							<div>
								<ul class="navbuttons">
									<li>
										<a class="activebutton" href="#">Work</a>
									</li>
									<li>
										<a class="button" href= "about.html">About</a>
									</li>
									<li>
										<a class="button" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>
					</div>
				</header>



<?php 
$ToEmail = 'brittany.howes@gmail.com'; 
$EmailSubject = 'Bhowes contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"].""; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
    echo ("<p class=\"response\">Thank you for contacting me!</br> Your message has been recieved and I'll get back with you as soon as possible.</br> Have a wonderful day!</p>");
     
?>

				</div>
						</div>

					</body>

					<footer>
						<div id="footer">
						  
					            <p class="copyright">Designed and developed by &copy; Brittany Howes 2014. All Rights Reserved.</p>
					    </div>
				             
				    </footer>


					</html>

