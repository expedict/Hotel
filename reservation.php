<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<title>Hotel CZĘSTOCHOWA - Projekt Zespołowy</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="shortcut icon" href="./images/favicon.ico" />
		<link rel="stylesheet" href="style/bootstrap.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="header">
			</div>
			<?php
				include('./include/menu.php');
			?>
			
			<div class="content">
			<h1>Rezerwacje</h1>
			<hr>
			<p class="content">Wypełnij poniższy formularz a my skontaktujemy się z Tobą w celu przedstawienia naszej oferty!!<br/><br/>
			<?php
			if (empty($_POST['submit'])) { 
			echo'<form method="POST" action="reservation.php"><br/>
				<table>
				<tr>
					<td>Typ pokoju:</td>
					<td><select class="type" name="typ" size="1"><option>2-osobowy</option>
					<option>3-osobowy</option>
					<option>4-osobowy</option>
					<option>Apartament</option>
					</select></td>
				</tr>
				<tr>
					<td>Data rozpoczęcia wizyty:</td>
					<td><input class="data" name="data" id="datepicker-example2" type="text" data-zdp_direction="true" placeholder="RRRR-MM-DD"></td>
				</tr>
				<tr>
					<td>Data zakończenia wizyty:</td>
					<td><input class="data" name="data2" id="datepicker-example1" type="text" data-zdp_direction="true" placeholder="RRRR-MM-DD"></td>
				</tr>
				<tr>
					<td>Śniadania:</td>
					<td><select class="type" name="sniadania" size="1"><option>TAK</option>
					<option>NIE</option>
					</select></td>
				</tr>
				<tr>
					<td>Obiadokolacje:</td>
					<td><select class="type" name="obiadokolacje" size="1"><option>TAK</option>
					<option>NIE</option>
					</select></td>
				</tr>
				<tr>
					<td><br/><b>Dane kontaktowe</b></td>
				</tr>
				<tr>
					<td>Imię i nazwisko:</td>
					<td><input type="text" class="name_2" name="name" placeholder="Imię i nazwisko" maxlength="50" />
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input type="text" class="email_2" name="email" placeholder="Adres e-mail" maxlength="50" />
				</tr>
				<tr>
					<td>Numer telefonu:</td>
					<td><input type="text" class="phone_2" name="telefon" placeholder="Numer telefonu" maxlength="20" />
				</tr>
				<tr>
					<td><button type="submit" name="submit" class="login" value="submit">Rezerwuj</button></td>
				</tr>
				</table>
			</form>';
			}
			elseif(!empty($_POST['typ']) && !empty($_POST['data']) && !empty($_POST['data2']) && !empty($_POST['sniadania']) && !empty($_POST['obiadokolacje']) && !empty($_POST['telefon']) && !empty($_POST['name']) && !empty($_POST['email']))
			{
				 $message = "Nowe zgłoszenie rezerwacji!\n
				 ----------------------------------------------\n
				 Imię i nazwisko:\t$_POST[name]\n
				 Numer telefonu kontaktowego:\t$_POST[telefon]\n
				 Email:\t$_POST[email]\n
				 ----------------------------------------------\n
				 Dane dotyczące rezerwacji:\n
				 Data rozpoczęcia wizyty:\t$_POST[data]\n
				 Data zakończenia wizyty:\t$_POST[data2]\n
				 Śniadania:\t$_POST[sniadania]\n
				 Obiadokolacje:\t$_POST[obiadokolacje]\n\n\n";
				 $header = "From: $_POST[name] <$_POST[email]>";
				 @mail("franas.pawel@gmail.com","Hotel CZĘSTOCHOWA - Zgłoszenie nowej rezerwacji","$message","$header") or die('Nie udało się złożyć rezerwacji'); 
				 echo "<strong>Rezerwacja zgłoszona poprawnie!<br/><br/>Skontaktujemy się z Tobą w celu przedstawienia naszej oferty!</strong>";
				 header('refresh: 4');
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