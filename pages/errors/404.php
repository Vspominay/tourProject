<?php

$root = $_SERVER['DOCUMENT_ROOT'];

require("$root/models/APage.php");
require("$root/models/404.php");

$notFound = new NotFound('NOT FOUND', array(), "../../pages/errors/style.css");
$notFound->generatePage();
