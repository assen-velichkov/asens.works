<?php
if($_POST["submit"]) {
    $recipient="assens.velichkov@gmail.com";
    $subject="Message from asens.works";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZ3QWLR');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<title>Contacts - Asen Velichkov, Freelance Web Designer & Front End Developer</title>
<meta name="description" content="Wanna talk about your next project? To share your project ideas or check my availability, please drop me a line down here...">
<meta name="author" content="Asen Velichkov">
<meta name="Copyright" content="Copyright Asen Velichkov 2017, All Rights Reserved">
<link rel="shortcut icon" href="images/awfav.png">
<link rel="apple-touch-icon" href="images/av_photo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="Contacts - Asen Velichkov, Freelance Web Designer & Front End Developer">
<meta property="og:description" content="Wanna talk about your next project? To share your project ideas or check my availability, please drop me a line down here...">
<meta property="og:url" content="https://asens.works">	
<meta property="og:image" content="images/awfav.png">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Wanna talk about your next project? To share your project ideas or check my availability, please drop me a line down here...">
<meta name="twitter:title" content="Contacts - Asen Velichkov, Freelance Web Designer & Front End Developer">
<meta name="twitter:image" content="images/awfav.png">
<link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ3QWLR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>   
    <div class="container">
		<div class="oneThird">
			<div id="logo">
				<a href="/home.html">
					<div><h5>asens</h5></div>
					<div><h5>'</h5></div>
					<div><h5>works</h5></div>				
				</a>
			</div>
    	</div>
    	<div class="twoThirds">
			<nav>
				<ul>
					<li><a href="/about.html">about</a></li>
					<li><a href="/skills.html">skills</a></li>
					<li><a href="/projects.html">projects</a></li>
					<li><a href="/contacts.html">contacts</a></li>
				</ul>
			</nav>
		</div>
	</div> 
</header>
<article>
	<section id="contacts">
		<div class="container">
			<div class="oneThird">
				<h2>Contacts</h2>
			</div>
			<div class="twoThirds">
				<p>Wanna talk about your next project? To share your project ideas or check my availability, please drop me a line...</p>		
				<form  method="post" action="contacts.php">
					<div class="formGroup">
						<label for="nameInput"><h3>Name</h3></label>
						<input name="name" id="nameInput" type="text" placeholder="your name...">
					</div>
					<div class="formGroup">
						<label for="emailInput"><h3>Email</h3></label>
						<input name="email" id="emailInput" type="text" placeholder="your email...">
					</div>
					<div class="formGroup">
						<label for="messageInput"><h3>Message</h3></label>
						<textarea name="message" id="messageInput" placeholder="your message..."></textarea>	
					</div>
					<input name="submit" type="submit" value="Send">
				</form>
				<?=$thankYou ?>
			</div>
		</div>
	</section>
</article>
<a href="#" class="backTop">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</a>
<footer>
	<div class="container row">
		<div id="copy" class="twoThirds">asen velichkov <span class="currentYear"></span> &copy; all rights reserved</div>
		<div id="social" class="oneThird">
			<ul>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" async></script>
<script src="js/main.js" async></script>
</body>
</html>