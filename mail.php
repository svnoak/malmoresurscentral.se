<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dropdown = $_POST['service'];
$message = $_POST['message'];
$formcontent="Namn: $name \nKontaktmejl: $email \nTjänst: $dropdown \nMeddelande: $message";
$recipient = "recipient_email";
$subject = "Mejl ang: $dropdown";
$mailheader = "From: $email \r\n";
if(!empty($_POST['website'])) die();
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<head>
    <link rel="stylesheet" href="./mvp.css">
    <meta charset="utf-8">
    <meta name="description" content="Malmö Resurscentral">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resurscentralen</title>
</head>
<body>
<section>
	<aside>
		<h3>Ditt meddelande har skickats &#10003;</h3>
		<a href="index.html"><b>Gå tillbaka</b></a>
	</aside>
</section>
</body>
<footer>
</footer>
