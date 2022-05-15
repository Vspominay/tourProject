<?php
require('./models/APage.php');
require('./models/404.php');

$notFound = new NotFound('NOT FOUND', array(), '../pages/errors/style.css');
$notFound->generatePage();
