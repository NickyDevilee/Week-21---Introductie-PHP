<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 21 - Introductie PHP -->

<?php

function FunctionName($value)
{
	for ($i=1; $i <= 10; $i++) { 
	echo $i, ' x ', $value, ' = ', $i*$value, '<br>';
}
}

$array = [3, 5, 8, 12];

foreach ($array as $value) {
	FunctionName($value);
}

?>