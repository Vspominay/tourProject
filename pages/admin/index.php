<?php
require('./models/APage.php');
require('./models/Statistic.php');

$adminStatistic = new Statistic('Admin Statistic', array(), '../pages/admin/style.css', array(new Stat("Total visitors", 2600), new Stat("Total tours", 160), new Stat("Hot tours", 15), new Stat("Blocked users", 10), new Stat("Working days", 19), new Stat("Available countries", 20)));

$adminStatistic->generatePage();
