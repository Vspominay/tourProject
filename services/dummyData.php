<?php
require './models/Tour.php';
require './models/Cost.php';

$toursArray = array(
    new Tour(
        0,
        "Armas Kaplan Paradise 5",
        "Туреччина",
        "7 діб",
        "From seafaring histories to fantastic fjords, there’s a lot to love about Scandinavia. Marvel at Norway’s amazing green cliffs and blue water, then set sail from Oslo to Denmark’s waterside capital. Hit the remaining Nordic capitals—Stockholm and Helsinki, two of the world’s most livable cities—and explore their maritime pasts and modern architecture.",
        new Cost(3400, 4200),
        "25.07.2022",
        "Курорт",
        7.5,
        array('https://www.fairmont.com/assets/0/104/1785/1790/5059/5067/ba5c8a82-6dd5-4635-8ac8-f29dc63c9e9a.jpg'),
        false,
        array('')
    ),
    new Tour(
        1,
        "Kleopatra Micador Hotel, 4",
        "Норвегія",
        "5 діб",
        "The 4 * hotel is located 120 km from the airport of Antalya, 800 m from the center of Alanya, 200 m from the city beach, on the second shoreline. It is a 6-storey building",
        new Cost(2700, 3100),
        "18.04.2022",
        "Курорт",
        8.2,
        array('https://img.poehalisnami.ua/static/hotels/turciya/alanya/h2559/orig/booking2559_12559_637378446796584300.jpg'),
        false,
        array('')
    ),
    new Tour(
        2,
        "Santana Hotel",
        "Туреччина",
        "14 діб",
        "The hotel is located on the seafront 12 km from the center of Hurghada. Opened in 1995, the last partial renovation was carried out in 2018, there are buildings in 2015. It consists of a main one-storey building (reception only), and 18 3-storey buildings and three 2-storey villas. The hotel has a large area with its own ranch, one of the best beaches in the region and buildings built in oriental style. ",
        new Cost(4500, 5200),
        "05.04.2022",
        "Тур",
        7.5,
        array('https://img2.storyblok.com/1000x1100/filters:format(webp)/f/53624/1600x2400/4da2ee576e/sga_nymphenburg-palace_shutterstock_1600x2400.jpg'),
        false,
        array('')
    ),
    new Tour(
        3,
        "Armas Kaplan Paradise 5",
        "Туреччина",
        "7 діб",
        "From the history of navigation to fantastic fjords - Scandinavia has something to love. Admire the amazing green cliffs of Norway and blue water, and then travel from Oslo to the coastal capital of Denmark. Visit the rest of the Northern capitals - Stockholm and Helsinki. maritime past and modern architecture. ",
        new Cost(3400, 4200),
        "25.07.2022",
        "VPI Пансіонат",
        9.2,
        array('https://www.otpusk.com/foto/3/1200x900/00/04/34/95/4349532.jpg'),
        false,
        array('')
    ),
    new Tour(
        4,
        "A Week in Greece",
        "Греція",
        "7 діб",
        "Paved streets, arched white facades, blue ocean roofs and windmills are more than just life - these are just some of the picturesque Greek landscapes you can expect during this tour. Experience ancient history and open-air museums in the capital of Athens. Then on the islands Mykonos and Santorini bring to life the quintessential beautiful Greek islands you've been dreaming of. ",
        new Cost(9000, 14000),
        "13.05.2022",
        "Екскурсія",
        10,
        array('https://img2.storyblok.com/800x600/filters:format(webp)/f/53624/4096x1260/ecc918f1b4/git_4096x1260.png'),
        false,
        array('')
    ),
);


function getTourById($id)
{
    global $toursArray;
    foreach ($toursArray as $tour) {
        if ($tour->id == $id) {
            return $tour;
        }
    }
}
