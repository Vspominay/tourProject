<?php

class Cost
{
    private $childPrice;
    private $normalPrice;

    public function __construct(
        $childPrice,
        $normalPrice
    ) {
        $this->normalPrice = $normalPrice;
        $this->childPrice = $childPrice;
    }

    function __get($property)
    {
        switch ($property) {
            case 'childPrice':
                return $this->childPrice;
            case 'normalPrice':
                return $this->normalPrice;
        }
    }

    function __set($property, $value)
    {
        switch ($property) {
            case 'childPrice':
                $this->childPrice = $value;
                break;
            case 'normalPrice':
                $this->normalPrice = $value;
                break;
        }
    }

    function getPrice()
    {
        return array($this->childPrice, $this->normalPrice);
    }
}
