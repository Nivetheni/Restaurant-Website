<?php

try{
	$db = new mysqli("localhost", "root", "", "contact");
} catch (Exception $exc) {
	echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
	$first_name = $_POST['name'];
	$last_name = $_POST['surname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['message'];
	
	$is_insert = $db->query("INSERT INTO `contact_us`(`first_name`, `last_name`, `email`, `phone`, `message`) VALUES ('$first_name','$last_name','$email','$phone','$msg')");
	
	if($is_insert == TRUE){
		echo "Query successfully Submitted.Thank you";
		 header( "Location: http://localhost/Sri-Erode-Punjabi/" );
		exit();
    }
	
}

?>


<html>
    <head>
        <title>Contact Form</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    </head>
    <body>

    <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Drop us a line</h2>
				<form id="contact-form" method="post" role="form" action="">
					<input id="form_name" type="text" name="name" class="field" placeholder="Your First Name" required="required" data-error="Firstname is required.">
					<input id="form_lastname" type="text" name="surname" class="field" placeholder="Your Last Name" required="required" data-error="Lastname is required.">
					<input id="form_email" type="email" name="email" class="field" placeholder="Your Email" required="required" data-error="Valid email is required.">
					<input id="form_phone" type="tel" name="phone" class="field" placeholder="Your Phone">
					<textarea id="form_message" name="message" class="field" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
					<input type="submit" name="ok" class="btn" value="Send">
					<!--<button class="btn">Send</button>*/-->
				</form>
            </div>
        </div>
    </div>
        
    </body>
</html>
