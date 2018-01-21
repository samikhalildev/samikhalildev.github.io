<!DOCTYPE html>

<html>

<head>

	<title> Page Not Found </title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108743415-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-108743415-1');
	</script>
	
	  <meta charset="utf-8">

	<link rel="stylesheet" href="style.css">

	<link rel="icon" href="images/logo.png">

	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Noto+Sans" rel="stylesheet">
	
	<!-- Social media icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVB5HRL"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="topside">

	</div>

	<ul>

	<img src="images/logo.png" class="logo" alt="logo">

	<li><a href="resume.html" class="nav-link">RESUME</a></li>
	<li><a href="projects.html" class="nav-link">PROJECTS</a></li>
	<li><a href="experience.html" class="nav-link">WORK &amp; SKILLS</a></li>
	<li><a href="index.html" class="nav-link">HOME</a></li>

	</ul>	

	<?php 

	$user_name = $_POST["name"];
    $user_email = $_POST["email"];
    $from = "sami.khalil.dev@gmail.com";

	if (isset($_POST["submit"])) {

    //$message = $_POST["message"];

    //$message = wordwrap($message, 70);

    mail($user_email, $user_name,"From: $from\n");

	    echo "Resume has been sent! Check your email, $user_name.";

	    } else {

	    	echo "There was an error sending the mail.";
	    }

?>

	<p class="title resume"> YOUR FORM HAS BEEN SUBMITTED </p> <br>	

		<div class="getresume-BG">

			<p class="pp"> Thank you for filling out the form, please check your email for the resume.

		</div>

		<div class="footer">

		    <h3 class="footer-heading">Thanks for visiting!</h3> 
		    <p class="footer-info"> Email: <a href="mailto:sami.khalil.dev@gmail.com" class="contact-link">
		    sami.khalil.dev@gmail.com </a> </p>

			<center> <img src="images/logo.png" alt="logo" class="footer-logo"> </center>

			<center>
			<a href="https://www.linkedin.com/in/sami-khalil-8aa127149/" target="_blank" class="fa fa-linkedin"></a>
			<a href="https://github.com/samikhalildev" target="_blank" class="fa fa-github"></a>
			<a class="fa fa-twitter"></a>
			</center>

		</div>

		<div class="endblack">
			<p class="copyright"> <i> Copyright &copy; 2017 Sami Khalil. All Rights Reserved. </i> </p>
	</div>

</body>

</html>
