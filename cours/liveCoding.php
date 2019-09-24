<?php

$firstName = "François";
$lastName = "LETELLIER";
$myFavorites = array (
    "colors" => array ("Bleu", "vert", "jaune"),
    "towns"  => array ("lyon", "paris", "caen"),
    "movies" => array ("terminator1", "terminator2", "terminator3"),
);



$fullName = $firstName . " " . $lastName;
$totalDays = $age * 365;




echo ("L'age de $fullName est de " . $age . " ans, soit environs $totalDays jours" . PHP_EOL);
echo ("$firstName " . (($age < 18) ? "ne peut pas voter." : "peut voter.") . PHP_EOL);
echo "Ses couleurs préférées sont : " . PHP_EOL;

$totalColors = count($myColors);

foreach ($myFavorites as $key => $favorite){
    echo " $key : " . implode(", ", $favorite) . PHP_EOL;
    }







