<?php
require('../../models/APage.php');
require('../../models/TourViewPage.php');
require('../../services/dummyData.php');

$tour = getTourById($_GET['id']);
$tourPage = new TourViewPage('ExuForce', array('../../scripts/jquery.js', '../../slick/slick.min.js', './script.js', '../../scripts/animation.js'), './style.css', $tour);
$tourPage->generatePage();
