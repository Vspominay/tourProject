<?php
require('./models/APage.php');
require('./models/Authenticate.php');

$state = true;
$auth = new Authenticate('Authenticate', array(), '../pages/auth/style.css', $state);

$auth->generatePage();
