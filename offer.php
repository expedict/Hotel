<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<title>Hotel CZĘSTOCHOWA - Projekt Zespołowy</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="shortcut icon" href="./images/favicon.ico" />
		<link rel="stylesheet" href="style/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1', width:"75%", height:"75%"});
				$(".group2").colorbox({rel:'group2', width:"75%", height:"75%"});
				$(".group3").colorbox({rel:'group3', width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', width:"75%", height:"75%"});

				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
	</head>

	<body>
		<div class="container">
			<div class="header">
			</div>
			<?php
				include('./include/menu.php');
			?>
			
			<div class="content">
			<h1>Oferta</h1>
			<hr>
			<p class="content">Poniżej znajdują się zdjęcia pokoji z naszej oferty hotelowej. Zapraszamy do zapoznania się z naszymi standardami!<br/></p>
			<h3>Pokój 2-osobowy</h3>
			<hr>
			<a class="group1" href="images/gallery/2os1.jpg" title="Pokój 2-osobowy"><img src="images/thumb/2os1.jpg"/></a>
			<a class="group1" href="images/gallery/2os2.jpg" title="Pokój 2-osobowy"><img src="images/thumb/2os2.jpg"/></a>
			<a class="group1" href="images/gallery/2os3.jpg" title="Pokój 2-osobowy"><img src="images/thumb/2os3.jpg"/></a><br/>
			Cena: 120zł / dobę
			<h3>Pokój 3-osobowy</h3>
			<hr>
			<a class="group2" href="images/gallery/3os1.jpg" title="Pokój 3-osobowy"><img src="images/thumb/3os1.jpg"/></a>
			<a class="group2" href="images/gallery/3os2.jpg" title="Pokój 3-osobowy"><img src="images/thumb/3os2.jpg"/></a>
			<a class="group2" href="images/gallery/3os3.jpg" title="Pokój 3-osobowy"><img src="images/thumb/3os3.jpg"/></a><br/>
			Cena: 180zł / dobę
			<h3>Pokój 4-osobowy</h3>
			<hr>
			<a class="group3" href="images/gallery/4os1.jpg" title="Pokój 4-osobowy"><img src="images/thumb/4os1.jpg"/></a>
			<a class="group3" href="images/gallery/4os2.jpg" title="Pokój 4-osobowy"><img src="images/thumb/4os2.jpg"/></a>
			<a class="group3" href="images/gallery/4os3.jpg" title="Pokój 4-osobowy"><img src="images/thumb/4os3.jpg"/></a>
			<br/>
			Cena: 220zł / dobę
			<h3>Apartament</h3>
			<hr>
			<a class="group4" href="images/gallery/apa1.jpg" title="Apartament"><img src="images/thumb/apa1.jpg"/></a>
			<a class="group4" href="images/gallery/apa2.jpg" title="Apartament"><img src="images/thumb/apa2.jpg"/></a>
			<a class="group4" href="images/gallery/apa3.jpg" title="Apartament"><img src="images/thumb/apa3.jpg"/></a><br/>
			Cena: 360zł / dobę
			</div>
			
			<?php
				include('./include/footer.php');
			?>
		</div>
	</body>
</html>