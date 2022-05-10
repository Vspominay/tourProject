<?php

class AdditionalCost
{
    private $title;
    private $value;


    public function __construct(
        $title,
        $value,

    ) {
        $this->title = $title;
        $this->value = $value;
    }
    function __get($property)
    {
        switch ($property) {
            case 'title':
                return $this->title;
            case 'value':
                return $this->value;
        }
    }

    function __set($property, $value)
    {
        switch ($property) {
            case 'title':
                $this->title = $value;
            case 'value':
                $this->value = $value;
                break;
        }
    }
}
