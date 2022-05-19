<?php
$root = $_SERVER['DOCUMENT_ROOT'];

// require('./models/Tour.php');
// require('./models/Cost.php');
// require('./models/AdditionalCost.php');
// require('./models/TravelRoute.php');

require_once("$root/models/Tour.php");
require_once("$root/models/Cost.php");
require_once("$root/models/AdditionalCost.php");
require_once("$root/models/TravelRoute.php");

$toursArray = array(
    new Tour(
        0,
        "Armas Kaplan Paradise 5",
        "Turkey",
        "7 nights",
        "From seafaring histories to fantastic fjords, there’s a lot to love about Scandinavia. Marvel at Norway’s amazing green cliffs and blue water, then set sail from Oslo to Denmark’s waterside capital. Hit the remaining Nordic capitals—Stockholm and Helsinki, two of the world’s most livable cities—and explore their maritime pasts and modern architecture.",
        new Cost(3400, 4200),
        "25.07.2022",
        "Tour",
        7.5,
        array(
            'https://images.wallpaperscraft.ru/image/single/otel_palmy_bassejn_172426_1920x1080.jpg',
            'https://images.wallpaperscraft.ru/image/single/otel_nomer_postel_stilno_sovremennyy_39745_1920x1080.jpg',
            'https://images.wallpaperscraft.ru/image/single/okean_otel_ekzotika_otdyh_priroda_82779_1920x1080.jpg',
            'https://images.wallpaperscraft.ru/image/single/kurort_otel_bassejn_otdykh_laksheri_palmy_110912_1920x1080.jpg',
            'https://images.wallpaperscraft.ru/image/single/gavayi_otel_palmy_basseyn_more_cvety_790_1920x1080.jpg',
            'https://images.wallpaperscraft.ru/image/single/tropiki_basseyn_bungalo_otel_53974_1920x1080.jpg',
        ),
        false,
        array(
            new TravelRoute("City of Gagra, Colonnade, restaurant 'Gagrips', Park of Prince of Oldenburg", "https://cf.bstatic.com/xdata/images/hotel/max1024x768/22443294.jpg?k=fc9d8a13beb15e92eb0479d21af7e66ae55f8da78f5b45b1b63a2937a52fb3d0&o=&hp=1"),
            new TravelRoute("Observation deck 'Farewell Motherland', 'Chabgarsky' cornice, Suspension bridge over the river 'Bzyb'", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi5SQ8yfC3qOg1riS6UtzySyURj3astfT_H_LXUUj0dYR86OBo7yGs0dbr5UG4am36apE&usqp=CAU"),
            new TravelRoute("Tasting of cheese, honey, wine, chacha (included in the price of the tour), Blue Lake, Yupsharsky canyon", "https://www.cbh-cyprus.com/app/uploads/sites/30/2021/06/1-ATHENA-BEACH-HOTEL.jpg"),
            new TravelRoute("Термальный источник в с. Приморское.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBukolx5xeFh5fAKnPYax82vpxDVQtKH09ske3T8fGr0YxxBx2Pd2Ji-sEuo8uSuZiGg&usqp=CAU"),
        ),
        array(
            new AdditionalCost("Parachute", 1512),
            new AdditionalCost("Car", 750),
            new AdditionalCost("Alcohol ", 650),
            new AdditionalCost("Diving", 786),
            new AdditionalCost("Rafting", 2000)
        )
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
        array(
            new TravelRoute("City of Gagra, Colonnade, restaurant 'Gagrips', Park of Prince of Oldenburg", "https://cf.bstatic.com/xdata/images/hotel/max1024x768/22443294.jpg?k=fc9d8a13beb15e92eb0479d21af7e66ae55f8da78f5b45b1b63a2937a52fb3d0&o=&hp=1"),
            new TravelRoute("Observation deck 'Farewell Motherland', 'Chabgarsky' cornice, Suspension bridge over the river 'Bzyb'", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi5SQ8yfC3qOg1riS6UtzySyURj3astfT_H_LXUUj0dYR86OBo7yGs0dbr5UG4am36apE&usqp=CAU"),
            new TravelRoute("Tasting of cheese, honey, wine, chacha (included in the price of the tour), Blue Lake, Yupsharsky canyon", "https://www.cbh-cyprus.com/app/uploads/sites/30/2021/06/1-ATHENA-BEACH-HOTEL.jpg"),
            new TravelRoute("Термальный источник в с. Приморское.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBukolx5xeFh5fAKnPYax82vpxDVQtKH09ske3T8fGr0YxxBx2Pd2Ji-sEuo8uSuZiGg&usqp=CAU"),
        ),
        array(
            new AdditionalCost("Parachute", 1512),
            new AdditionalCost("Car", 750),
            new AdditionalCost("Alcohol ", 650),
            new AdditionalCost("Diving", 786),
            new AdditionalCost("Rafting", 2000)
        )
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
        array(
            new TravelRoute("City of Gagra, Colonnade, restaurant 'Gagrips', Park of Prince of Oldenburg", "https://cf.bstatic.com/xdata/images/hotel/max1024x768/22443294.jpg?k=fc9d8a13beb15e92eb0479d21af7e66ae55f8da78f5b45b1b63a2937a52fb3d0&o=&hp=1"),
            new TravelRoute("Observation deck 'Farewell Motherland', 'Chabgarsky' cornice, Suspension bridge over the river 'Bzyb'", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi5SQ8yfC3qOg1riS6UtzySyURj3astfT_H_LXUUj0dYR86OBo7yGs0dbr5UG4am36apE&usqp=CAU"),
            new TravelRoute("Tasting of cheese, honey, wine, chacha (included in the price of the tour), Blue Lake, Yupsharsky canyon", "https://www.cbh-cyprus.com/app/uploads/sites/30/2021/06/1-ATHENA-BEACH-HOTEL.jpg"),
            new TravelRoute("Термальный источник в с. Приморское.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBukolx5xeFh5fAKnPYax82vpxDVQtKH09ske3T8fGr0YxxBx2Pd2Ji-sEuo8uSuZiGg&usqp=CAU"),
        ),
        array(
            new AdditionalCost("Parachute", 1512),
            new AdditionalCost("Car", 750),
            new AdditionalCost("Alcohol ", 650),
            new AdditionalCost("Diving", 786),
            new AdditionalCost("Rafting", 2000)
        )
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
        array(
            new TravelRoute("City of Gagra, Colonnade, restaurant 'Gagrips', Park of Prince of Oldenburg", "https://cf.bstatic.com/xdata/images/hotel/max1024x768/22443294.jpg?k=fc9d8a13beb15e92eb0479d21af7e66ae55f8da78f5b45b1b63a2937a52fb3d0&o=&hp=1"),
            new TravelRoute("Observation deck 'Farewell Motherland', 'Chabgarsky' cornice, Suspension bridge over the river 'Bzyb'", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi5SQ8yfC3qOg1riS6UtzySyURj3astfT_H_LXUUj0dYR86OBo7yGs0dbr5UG4am36apE&usqp=CAU"),
            new TravelRoute("Tasting of cheese, honey, wine, chacha (included in the price of the tour), Blue Lake, Yupsharsky canyon", "https://www.cbh-cyprus.com/app/uploads/sites/30/2021/06/1-ATHENA-BEACH-HOTEL.jpg"),
            new TravelRoute("Термальный источник в с. Приморское.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBukolx5xeFh5fAKnPYax82vpxDVQtKH09ske3T8fGr0YxxBx2Pd2Ji-sEuo8uSuZiGg&usqp=CAU"),
        ),
        array(
            new AdditionalCost("Parachute", 1512),
            new AdditionalCost("Car", 750),
            new AdditionalCost("Alcohol ", 650),
            new AdditionalCost("Diving", 786),
            new AdditionalCost("Rafting", 2000)
        )
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
        array(
            new TravelRoute("City of Gagra, Colonnade, restaurant 'Gagrips', Park of Prince of Oldenburg", "https://cf.bstatic.com/xdata/images/hotel/max1024x768/22443294.jpg?k=fc9d8a13beb15e92eb0479d21af7e66ae55f8da78f5b45b1b63a2937a52fb3d0&o=&hp=1"),
            new TravelRoute("Observation deck 'Farewell Motherland', 'Chabgarsky' cornice, Suspension bridge over the river 'Bzyb'", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi5SQ8yfC3qOg1riS6UtzySyURj3astfT_H_LXUUj0dYR86OBo7yGs0dbr5UG4am36apE&usqp=CAU"),
            new TravelRoute("Tasting of cheese, honey, wine, chacha (included in the price of the tour), Blue Lake, Yupsharsky canyon", "https://www.cbh-cyprus.com/app/uploads/sites/30/2021/06/1-ATHENA-BEACH-HOTEL.jpg"),
            new TravelRoute("Термальный источник в с. Приморское.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBukolx5xeFh5fAKnPYax82vpxDVQtKH09ske3T8fGr0YxxBx2Pd2Ji-sEuo8uSuZiGg&usqp=CAU"),
        ),
        array(
            new AdditionalCost("Parachute", 1512),
            new AdditionalCost("Car", 750),
            new AdditionalCost("Alcohol ", 650),
            new AdditionalCost("Diving", 786),
            new AdditionalCost("Rafting", 2000)
        )
    )
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
