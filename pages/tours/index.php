<?php
$root = $_SERVER['DOCUMENT_ROOT'];

require('./models/APage.php');
require('./models/AdminTours.php');
require("$root/services/dummyData.php");
$tours = $toursArray;

$adminTours = new AdminTours('Admin Tours', array(), '../pages/tours/style.css', $tours);

$adminTours->generatePage();
