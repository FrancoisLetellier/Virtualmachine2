<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 09/05/17
 * Time: 10:00
 */

require_once __DIR__ . "/../vendor/autoload.php";

$laptop = new wcs\Laptop("Core 17", "16 Go");
$laptop->setModele("Asus AP36");
$laptop->setWeight("2.5");
$laptop->display();

$nano = new \wcs\NanoComputer("Caore I3", "2 Go");
$nano->setModele("Rasbery");
$nano->setWeight("300");
$nano->display();

$case = new \wcs\DesktopComputer("Double cool", "32 Go");
$case->setModele("Le big");
$case->setCase("Big one");
$case->display();