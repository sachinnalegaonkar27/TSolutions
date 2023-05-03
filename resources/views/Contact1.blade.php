

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact to Treasure Solution</title>
</head>
<body>
<section id="header" style="margin-bottom: 50px;">
@include('header')
</section>
    <main>
    <section id="contact">
			<h2>Contact Me</h2>
			<form action="" method="post">
			@csrf
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<label for="message">Message:</label>
				<textarea id="message" name="message"></textarea>
				<input type="submit" value="Send">
			</form>

			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$message = test_input($_POST["message"]);


			$to = "sachin27nalegaonkar@gmail.com";
			$subject = "New Contact Message";
			$body = "Name: $name\nEmail: $email\nMessage:\n$message";
			$headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Return-Path: $email\r\n";

			if (mail($to, $subject, $body,$headers, "-f$email")) {
				echo "<p>Thank you for contacting me. I will get back to you soon!</p>";
			} else {
				echo "<p>There was an error sending your message. Please try again later.</p>";
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>
	</section>
</main>
</body>
</html>