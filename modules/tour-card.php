<?php
require './services/dummyData.php';
$tours = $toursArray;

foreach ($tours as $tour) : ?>
    <?php $tour->generatePost() ?>
<?php endforeach; ?>
