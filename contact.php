<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<title>Hotel CZĘSTOCHOWA - Projekt Zespołowy</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="shortcut icon" href="./images/favicon.ico" />
	</head>

	<body>
		<div class="container">
			<div class="header">
			</div>
			<?php
				include('./include/menu.php');
			?>
			
			<div class="content">
			<h1>Kontakt</h1>
			<hr>
			<p class="content">Chcesz poznać szczegóły naszej oferty? Możesz o nie zapytać w poniższym formularzu!<br/><br/>
			<?php
			if (empty($_POST['submit'])) { 
			echo'<form method="POST" action="contact.php">
				<input type="text" class="name" name="name" placeholder="Imię i nazwisko" maxlength="50" /><br/>
				<input type="text" class="mail" name="email" placeholder="Adres e-mail" maxlength="50" /><br/>
				<input type="text" class="phone" name="phone" placeholder="Numer telefonu" maxlength="20" /><br/>
				<textarea class="question" cols="40" rows="5" name="question" placeholder="Treść zapytania..." maxlength="250" wrap="soft"></textarea><br/>
				<center><button type="submit" name="submit" class="login" value="submit">Wyślij zapytanie</button></center>
			</form>';
			}
			elseif(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])&& !empty($_POST['question']))
			{
				 $message = "Treść wiadomości:\n$_POST[question]\n\n\nWysłał: $_POST[name]\ne-mail: $_POST[email]\ntelefon: $_POST[phone]";
				 $header = "From: $_POST[name] <$_POST[email]>";
				 @mail("franas.pawel@gmail.com","Hotel CZĘSTOCHOWA - Zapytanie","$message","$header") or die('Nie udało się wysłać wiadomości'); 
				 echo "<strong>Wiadomość została wysłana poprawnie!</strong>";
				 header('refresh: 2');
			}
			else 
			{
				echo "<span style=\"color: #FF0000; text-align: center;\">Wypełnij wszystkie pola formularza!</span>"; 
				header('refresh: 2');
			}
			?>
			</p>
			</div>
			
			<?php
				include('./include/footer.php');
			?>
		</div>
	</body>
</html>