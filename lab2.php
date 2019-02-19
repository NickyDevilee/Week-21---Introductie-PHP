<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 21 - Introductie PHP -->

<?php

echo "<h1> Hello World! </h1>";

define('Constant', 'Hello World!');
echo Constant;

$leren = "Learning PHP";
$hello = "hello world!";
echo "<br>", $leren, "<br>", $hello;

$hello = 'hello';
$world = ' world!';
echo '<h1>', $hello . $world, '</h1>';

$array = ['hello ', 'world!'];
echo $array[0], $array[1];

?>