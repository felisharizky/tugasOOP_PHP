<?php
require_once "Frog.php";
require_once "Ape.php";

$sheep = new Animal("Shaun");
echo "Name: " . $sheep->name . "<br/>";
echo "Legs: " . $sheep->legs . "<br/>";
echo "Cold blooded: " . $sheep->cold_blooded . "<br/>";
echo "<br/>";

$kodok = new Frog("Buduk");
echo "Name: " . $kodok->name . "<br/>";
echo "Legs: " . $kodok->legs . "<br/>";
echo "Cold blooded: " . $kodok->cold_blooded . "<br/>";
echo "Jump: " . $kodok->get_jump() . "<br/>";
echo "<br/>";

$ape = new Ape("kera sakti");
echo "Name: " . $ape->name . "<br/>";
echo "Legs: " . $ape->legs . "<br/>";
echo "Cold blooded: " . $ape->cold_blooded . "<br/>";
echo "Yell: " . $ape->get_yell() . "<br/>";
echo "<br/>";
?>
