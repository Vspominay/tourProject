<?php
$root = $_SERVER['DOCUMENT_ROOT'];

require("$root/models/SQLiteDB.php");
require("$root/models/Tour.php");
require("$root/models/Cost.php");
require("$root/models/AdditionalCost.php");
require("$root/models/TravelRoute.php");

$db = new SQLiteDB("$root/database/DB_tour.db");
//$db->addDataIntoTable('Tour', ['title' => 'test', 'country' => 'test', 'during' => 'test', 'description' => 'test', 'date' => '22.10.2222', 'type' => 'test', 'rate' => 'false']);
$tableTour = $db->getDataFromIdTour();
$toursArray = array();


for ($i = 0; $i < count($tableTour); $i++) {

    $Image = array();
    $AdditionalCost = array();
    $travelRoute = array();
    $tableImage = $db->createArrayImageTour(intval($tableTour[$i]['id_tour']));
    $tableAdditional = $db->createArrayAdditionalTour(intval($tableTour[$i]['id_tour']));
    $tableRoute = $db->createArrayTravelRouteTour(intval($tableTour[$i]['id_tour']));

    for ($index_image = 0; $index_image < count($tableImage); $index_image++) {
        $Image[$index_image] = $tableImage[$index_image]['url_img'];
    }
    for ($index_additional = 0; $index_additional < count($tableAdditional); $index_additional++) {
        $AdditionalCost[$index_additional] = new AdditionalCost($tableAdditional[$index_additional]['Name_additional'], intval($tableAdditional[$index_additional]['cost_Additional']));
    }
    for ($index_route = 0; $index_route < count($tableRoute); $index_route++) {
        $travelRoute[$index_route] = new TravelRoute($tableRoute[$index_route]['travelRoute'], $tableRoute[$index_route]['imgRoute']);
    }

    $toursArrayTemp = array(
        new Tour(
            $tableTour[$i]['id_tour'],
            $tableTour[$i]['title'],
            $tableTour[$i]['country'],
            $tableTour[$i]['during'],
            $tableTour[$i]['description'],
            new Cost($tableTour[$i]['childPrice'], $tableTour[$i]['normalPrice']),
            $tableTour[$i]['date'],
            $tableTour[$i]['type'],
            $Image,
            $tableTour[$i]['rate'],
            $travelRoute,
            $AdditionalCost
        ),
    );
    $toursArray = array_merge($toursArray, $toursArrayTemp);
}

$db->closeConnection();

function getTourById($id)
{
    global $toursArray;
    foreach ($toursArray as $tour) {
        if ($tour->id == $id) {
            return $tour;
        }
    }
}

function getTours()
{
    global $toursArray;
    return $toursArray;
}
