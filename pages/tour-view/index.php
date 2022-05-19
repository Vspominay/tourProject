<?php
$root = $_SERVER['DOCUMENT_ROOT'];

require_once(__DIR__ . '/../../models/APage.php');
require_once(__DIR__ . '/../../models/TourViewPage.php');
require_once(__DIR__ . '/../../services/dummyData.php');

$tour = getTourById($_SESSION['id']);

$tourPage = new TourViewPage('ExuForce', array('/scripts/jquery.js', '/slick/slick.min.js', '/pages/tour-view/script.js', '/scripts/animation.js'), '/pages/tour-view/style.css', $tour);
$tourPage->generatePage();
