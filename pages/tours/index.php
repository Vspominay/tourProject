<?php
$root = $_SERVER['DOCUMENT_ROOT'];

require_once("$root/models/APage.php");
require_once("$root/models/AdminTours.php");
require_once("$root/services/dummyData.php");

$tours = getTours();

$adminTours = new AdminTours('Admin Tours', array(), '../pages/tours/style.css', $tours);

$adminTours->generatePage();
