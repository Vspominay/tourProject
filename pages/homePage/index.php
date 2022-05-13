<?php

require('../../models/APage.php');
require('../../models/HomePage.php');
require('../../services/dummyData.php');
$tours = $toursArray;

$homePage = new HomePage('ExuForce', array('../../scripts/filter.js', '../../scripts/animation.js'), '../../styles/style.css', $tours);
$homePage->generatePage();
