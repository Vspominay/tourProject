<?php
$root = $_SERVER['DOCUMENT_ROOT'];

require_once("$root/models/APage.php");
require_once("$root/models/HomePage.php");
require_once("$root/services/dummyData.php");

$tours = getTours();

$homePage = new HomePage('ExuForce', array('../../scripts/filter.js', '../../scripts/animation.js'), '../../styles/style.css', $tours);
$homePage->generatePage();
