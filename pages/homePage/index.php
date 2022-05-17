<?php
$root = $_SERVER['DOCUMENT_ROOT'];

require("$root/models/APage.php");
require("$root/models/HomePage.php");
require("$root/services/dummyData.php");
$tours = $toursArray;

$homePage = new HomePage('ExuForce', array('../../scripts/filter.js', '../../scripts/animation.js'), '../../styles/style.css', $tours);
$homePage->generatePage();
