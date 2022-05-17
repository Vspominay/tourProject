<?php

class TravelRoute
{
    private $routeTitle;
    private $image;


    public function __construct(
        $routeTitle,
        $image,

    ) {
        $this->routeTitle = $routeTitle;
        $this->image = $image;
    }
    function __get($property)
    {
        switch ($property) {
            case 'routeTitle':
                return $this->routeTitle;
            case 'image':
                return $this->image;
        }
    }

    function __set($property, $value)
    {
        switch ($property) {
            case 'routeTitle':
                $this->routeTitle = $value;
            case 'image':
                $this->image = $value;
                break;
        }
    }
}
