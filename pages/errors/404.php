<?php
require('./models/APage.php');
require('./models/404.php');

$notFound = new NotFound('NOT FOUND', array(), '../errors/style.css');
$notFound->generatePage();
