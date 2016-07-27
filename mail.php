<?php

	$email	= trim($_POST['email']);

// Add the recipient email to a variable
	$to	= "justinwines@hotmail.com";

	// Create a subject
	$subject = "BODYBUILDING GURUS";

	// Construct the message
	$message .= "Email: $email\r\n\r\n";

  mail($to, $subject, $message);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Body Building Gurus | Coming Soon...</title>
     <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="css/main.css">
   </head>
   <body>

     <section>
       <h1>BodyBuilding Gurus</h1>
       <h2>Site coming soon</h2>
       <h2>· · ·</h2>
       <h3>Thanks for signing up!</h3>
     </section>

   </body>
 </html>
