<?php

interface ITour
{
    public function getGallery();
    public function getShotrInformation();
}

interface ILuxuryTour
{
    public function getTrips();
    public function getRentCars();
}

class Tour
{
    private $id;
    private $title;
    private $country;
    private $during;
    private $description;
    private $cost;
    private $date;
    private $type;
    private $tourImages;
    private $liked;
    private $travelRoute;
    private $additionalSpends;

    public function __construct(
        $id,
        $title,
        $country,
        $during,
        $description,
        $cost,
        $date,
        $type,
        $tourImages,
        $liked,
        $travelRoute,
        $additionalSpends
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->country = $country;
        $this->during = $during;
        $this->description = $description;
        $this->cost = $cost;
        $this->date = $date;
        $this->type = $type;
        $this->tourImages = $tourImages;
        $this->liked = $liked;
        $this->travelRoute = $travelRoute;
        $this->additionalSpends = $additionalSpends;
    }
    function __get($property)
    {
        switch ($property) {
            case 'id':
                return $this->id;
            case 'title':
                return $this->title;
            case 'country':
                return $this->country;
            case 'during':
                return $this->during;
            case 'liked':
                return $this->liked;
            case 'description':
                return $this->description;
            case 'cost':
                return $this->cost;
            case 'date':
                return $this->date;
            case 'type':
                return $this->type;
            case 'tourImages':
                return $this->tourImages;
            case 'travelRoute':
                return $this->travelRoute;
            case 'additionalSpends':
                return $this->additionalSpends;
        }
    }

    function __set($property, $value)
    {
        switch ($property) {
            case 'id':
                $this->id = $value;
            case 'title':
                $this->title = $value;
                break;
            case 'country':
                $this->country = $value;
                break;
            case 'liked':
                $this->liked = $value;
                break;
            case 'during':
                $this->during = $value;
                break;
            case 'description':
                $this->description = $value;
                break;
            case 'cost':
                $this->cost = $value;
                break;
            case 'date':
                $this->date = $value;
                break;
            case 'type':
                $this->type = $value;
                break;
            case 'tourImages':
                $this->tourImages = $value;
                break;
            case 'travelRoute':
                $this->travelRoute = $value;
                break;
            case 'additionalSpends':
                $this->additionalSpends = $value;
                break;
        }
    }

    private function getGallery()
    {
        return $this->tourImages;
    }

    private function generateShortDescription()
    {
        $cropLength = 326;
        $resultString = $this->description;
        if (strlen($this->description) >= $cropLength) {
            $resultString = substr($this->description, 0, $cropLength) . "...";
        }
        return $resultString;
    }

    private function getTitlePicture()
    {
        return $this->getGallery()[0];
    }

    public function generatePost()
    {
        $normalPrice = $this->cost->normalPrice;
        $childPrice = $this->cost->childPrice;
        $titlePicture = $this->getTitlePicture();
        $shortDescription = $this->generateShortDescription();

        return <<< EOT
        <div class="col _anim-items">
            <div class="col-content">
                <div class="content-image">
                    <img src="$titlePicture" alt="$this->title">
                </div>

                <div class="content__description">
                    <div class="description-title">
                        <h5>
                            $this->type
                        </h5>
                        <h3>
                            $this->title
                        </h3>
                    </div>

                    <div class="description-price__items">
                        <div class="description-price__item">
                            <div class="price__item-cost">
                                <span class="icon-coins"></span>
                                <span>
                                    $normalPrice
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
                                    $childPrice
                                </span>
                            </div>
                            <div class="price__item-age">
                                Сhild ticket
                            </div>

                        </div>

                        <div class="description-price__item description__during">
                            <span class="icon-time"></span>
                            <span>
                                $this->date
                            </span>
                        </div>
                    </div>



                    <div class="description__specification">
                        $shortDescription
                    </div>

                    <div class="description__interact">
                        <a href="/pages/tour-view/index.php?id=$this->id" class="btn">
                            Detail
                        </a>

                        <a href="#" class="favorite">
                            <span class="icon-heart"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
        EOT;
    }
}

class luxuryTour extends Tour implements ILuxuryTour
{
    private $trips = array();
    private $rentCars = array();

    function __construct(
        $id,
        $title,
        $country,
        $during,
        $description,
        $cost,
        $date,
        $type,
        $rate,
        $trips,
        $rentCars,
        $tourImages,
        $liked,
        $travelRoute,
        $additionalSpends
    ) {

        $this->trips = $trips;
        $this->rentCars = $rentCars;
        parent::__construct(
            $id,
            $title,
            $country,
            $during,
            $description,
            $cost,
            $date,
            $type,
            $rate,
            $tourImages,
            $liked,
            $travelRoute,
            $additionalSpends,
        );
    }

    public function __set($property, $value)
    {
        switch ($property) {
            case 'trips':
                $this->trips = $value;
                break;
            case 'rentCars':
                $this->rentCars = $value;
                break;
        }
    }


    public function __get($property)
    {
        switch ($property) {
            case 'trips':
                return $this->trips;
            case 'rentCars':
                return $this->rentCars;
        }
    }

    function getTrips()
    {
        return $this->trips;
    }

    public function getRentCars()
    {
        return $this->rentCars;
    }
}
