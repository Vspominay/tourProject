
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

class Tour implements ITour
{
    private $title;
    private $country;
    private $during;
    private $description;
    private $cost; // object which contains the next: {childCost: number, defaultCost: number}
    private $date;
    private $type;
    private $rate;
    private $tourImages;

    public function __construct(
        $title,
        $country,
        $during,
        $description,
        $cost,
        $date,
        $type,
        $rate,
        $tourImages
    ) {
        $this->title = $title;
        $this->country = $country;
        $this->during = $during;
        $this->description = $description;
        $this->cost = $cost;
        $this->date = $date;
        $this->type = $type;
        $this->rate = $rate;
        $this->tourImages = $tourImages;
    }
    function __get($property)
    {
        switch ($property) {
            case 'title':
                return $this->title;
            case 'country':
                return $this->country;
            case 'during':
                return $this->during;
            case 'description':
                return $this->description;
            case 'cost':
                return $this->cost;
            case 'date':
                return $this->date;
            case 'type':
                return $this->type;
            case 'rate':
                return $this->rate;
            case 'tourImages':
                return $this->tourImages;
        }
    }

    function __set($property, $value)
    {
        switch ($property) {
            case 'title':
                $this->title = $value;
                break;
            case 'country':
                $this->country = $value;
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
            case 'rate':
                $this->rate = $value;
                break;
            case 'tourImages':
                $this->tourImages = $value;
                break;
        }
    }

    function getGallery()
    {
        return $this->tourImages;
    }

    function getShotrInformation()
    {
        return array(
            $this->title,
            $this->cost,
            $this->during,
            $this->date,
            $this->type,
            $this->rate
        );
    }
}

class luxuryTour extends Tour implements ILuxuryTour
{
    private $trips = array();
    private $rentCars = array();

    function __construct(
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
        $tourImages
    ) {

        $this->trips = $trips;
        $this->rentCars = $rentCars;
        parent::__construct(
            $title,
            $country,
            $during,
            $description,
            $cost,
            $date,
            $type,
            $rate,
            $tourImages
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
?>
