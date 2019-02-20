<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 21 - Introductie PHP -->

<!DOCTYPE html>
<html>
<head>
	<title>GoodDay</title>
	<link rel="stylesheet" type="text/css" href="goodmorning.css">
</head>
<body>
	<?php

		date_default_timezone_set("Europe/Amsterdam");
		$tijd = date("H:i:s");
		$uur = date("H");

		if ($uur >= '6' && $uur <= '11') {
			$image_url='img/morning.png';
			echo '<div class="tekst">'. "Goede morgen!". '<br>'. "Het is nu ". $tijd. '</div>';
		} 
		elseif ($uur >= '12' && $uur <= '17') {
			$image_url='img/afternoon.png';
			echo '<div class="tekst">'. "Goede middag!". '<br>'. "Het is nu ". $tijd. '</div>';
		}
		elseif ($uur >= '18' && $uur <= '23') {
			$image_url='img/evening.png';
			echo '<div class="tekst">'. "Goede avond!". '<br>'. "Het is nu ". $tijd. '</div>';
		}
		elseif ($uur >= '00' && $uur <= '5') {
			$image_url='img/night.png';
			echo '<div class="tekst">'. "Goede nacht!". '<br>'. "Het is nu ". $tijd. '</div>';
		}

	?>
<img src="<?php echo $image_url;?>" id="image">

</body>
</html>