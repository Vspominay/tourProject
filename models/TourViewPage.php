<?php

class TourViewPage extends APage
{
    private $tour;

    public function __construct(
        $title,
        $scripts,
        $stylePath,
        $tour
    ) {
        $this->tour = $tour;
        parent::__construct($title, $scripts, $stylePath);
    }


    public function generateBody()
    {
        $activeTour = $this->tour;
        $activeTourPrices = $activeTour->cost;

        $routeBlock = $this->generateTourRouting();
        $galleryBlock = $this->generateGallery();
        $formBlock = $this->generateForm();
        $additionalCostBlock = $this->generateAdditionalCost();

        echo <<< EOT
        <body>
            <div class="wrapper">
                <header class="header">
                    <div class="container">
                        <div class="header__inner">
                            <div class="header__logo">
                                <img src="../../images/logo.png" width="40" height="60" alt="logo" />
                            </div>
                            <div class="header__menu">
                                <nav class="header__menu-nav">
                                    <ul class="header__list">
                                        <li class="header__list-item"><a href="/pages/HomePage"> Home</a></li>
                                        <li class="header__list-item"><a href="/pages/HomePage"> Tours</a></li>
                                        <li class="header__list-item"><a href="/pages/HomePage"> My tours</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header__menu-mob-block">
                                <div class="header__menu-mob__inner">
                                    <span class="header__menu-close">+</span>
                                </div>
                                <nav class="header__menu-burg">
                                    <ul class="header__menu-items-burg">
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/pages/homePage"> Home</a>
                                        </li>
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/pages/homePage"> Tours</a>
                                        </li>
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/pages/homePage"> My tours</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header__burger">
                                <span class="burger-item"></span>
                            </div>
                        </div>
                    </div>
                </header>
                <section class="title">
                    <div class="title-background">
                        <div class="backgrount-filter"></div>
                        <img src="https://images.wallpaperscraft.ru/image/single/gavayi_otel_palmy_basseyn_more_cvety_790_1920x1080.jpg" alt="title">
                    </div>
                    <div class="container">

                        <div class="title-inner">
                            <div class="title-content">
                                <h2>$activeTour->type</h2>
                                <h1>$activeTour->title</h1>
                                <div class="description__interact">
                                    <a href="/pages/HomePage" class="btn">
                                        Other tours
                                    </a>

                                    <a href="#" class="favorite">
                                        <span class="icon-heart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="description">
                    <div class="container">
                        <div class="description__inner ">
                            <div class="description__text _anim-items">
                                <h3 class="description-title">
                                    Tour description
                                </h3>
                                <p class="description-article">
                                    $activeTour->description
                                </p>
                            </div>

                            <div class="description__price _anim-items">
                                <div class="description-price__items">
                                    <div class="description-price__item">
                                        <div class="price__item-cost">
                                            <span class="icon-coins"></span>
                                            <span>
                                                $activeTourPrices->normalPrice$
                                            </span>
                                        </div>
                                        <div class="price__item-age">
                                            Adult ticket
                                        </div>

                                    </div>

                                    <div class="description-price__item">
                                        <div class="price__item-cost">
                                            <span class="icon-coins"></span>
                                            <span>
                                                $activeTourPrices->childPrice$
                                            </span>
                                        </div>
                                        <div class="price__item-age">
                                            Child ticket
                                        </div>

                                    </div>

                                    <div class="description-price__item description__during">
                                        <span class="icon-time"></span>
                                        <span>
                                            $activeTour->during
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                $routeBlock
                $additionalCostBlock
                $galleryBlock
                $formBlock
        EOT;
    }

    private function generateGallery()
    {

        $resultGallery = '';
        $imageNumber = 1;


        foreach ($this->tour->tourImages as $image) {
            if ($imageNumber >= 7) {
                break;
            }
            $resultGallery .= "<div class='gallery-item$imageNumber _anim-items'>
                    <img src='$image' height='550' width='120' alt='gallery-photo'>
                </div>";

            $imageNumber++;
        }

        return <<< EOT
        <section class="gallery">
            <div class="container">
                <div class="gallery-text _anim-items">
                    <h3>Tour gallery</h3>
                </div>
            </div>

            <div class="gallery-content">
                $resultGallery
            </div>

        </section>
        EOT;
    }

    private function generateTourRouting()
    {

        $tourList = $this->tour->travelRoute;

        $placeNames = '';
        $slider = '';

        foreach ($tourList as $route) {
            $placeNames .= "<li class='route-item _anim-item'>$route->routeTitle</li>";
            $slider .= "<div class='slide'>
                            <img src='$route->image' width='280' height='450' alt='hotel-photo'>
                        </div>";
        }


        return <<< EOT
        <section class="route">
                    <div class="container">
                        <div class="route__inner">
                            <div class="route-block">
                                <div class="route-title _anim-items">
                                    <h3>
                                        Tour route description
                                    </h3>
                                </div>
                                <ul class="route-items">
                                    $placeNames
                                </ul>
                            </div>
                            <div class="route-gallery">
                                <div class="gallery-slider _anim-items">
                                    $slider
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        EOT;
    }

    private function generateAdditionalCost()
    {

        $costString = $this->tour->additionalSpends;
        $resultAdditionalString = '';

        foreach ($costString as $cost) {
            $resultAdditionalString .= "
                <div class='additional-col _anim-items'>
                    <div class='description-price__item'>
                        <div class='price__item-cost'>
                            <span class='icon-coins'></span>
                            <span>
                                $cost->value$
                            </span>
                        </div>
                        <div class='rice__item-age'>
                            $cost->title
                        </div>
                    </div>
                </div>
            ";
        }

        return <<< EOT
                <section class="additional">
                    <div class="container">
                        <div class="additional__inner">
                            <div class="additional-text _anim-items">
                                <h3>Additional expenses </h3>
                            </div>
                            <div class="additional-row">
                                $resultAdditionalString
                            </div>
                        </div>
                    </div>
                </section>    
        EOT;
    }

    private function generateForm()
    {
        return <<< EOT
        <section class="booking">
                    <div class="booking__conent">

                        <div class="booking-image _anim-items">
                            <img src="https://images.wallpaperscraft.ru/image/single/gavayi_otel_palmy_basseyn_more_cvety_790_1920x1080.jpg" width="450" height="380" alt="form image">
                        </div>
                        <div class="container">
                            <div class="booking__inner _anim-items">
                                <form action="../check/check.php" method="post">

                                    <div class="booking-title">
                                        <h3>
                                            Book the tour
                                        </h3>
                                    </div>

                                    <div class="search-input-block">
                                        <input name="name" type="text" class="input-field" placeholder="Your name">
                                    </div>

                                    <div class="search-input-block">
                                        <span class="icon-calendar"></span>
                                        <input name="date" type="date" class="input-field" placeholder="Date">
                                    </div>

                                    <div class="search-input-block">
                                        <span class="icon-people"></span>
                                        <input name="email" type="email" class="input-field" placeholder="Your email">
                                    </div>

                                    <div class="description__interact">
                                        <button type="submit" class="btn">
                                            Book
                                        </button>

                                        <a href="#" class="favorite">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
        EOT;
    }
}
