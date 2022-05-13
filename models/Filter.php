<?php

interface IFilter
{
    public function generateFilter();
}

class Filter implements IFilter
{
    private $minValue;
    private $maxValue;
    private $peopleCount;
    private $availableCountry;

    public function __construct(
        $minValue,
        $maxValue,
        $peopleCount,
        $availableCountry
    ) {
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
        $this->peopleCount = $peopleCount;
        $this->availableCountry = $availableCountry;
    }

    private function generateRange()
    {
        return <<< EOT
        <div class="range">
            <div class="range-text">Price</div>
                <input type="number" hidden value="$this->minValue" id="minHiddenValue">
                <input type="number" hidden value="$this->maxValue" id="maxHiddenValue">
            <div class="range-output">
                <input type="text" class="range-output__input" id="minPrice" />
                <input type="text" class="range-output__input" id="maxPrice" />
            </div>

            <div class="range-control">
                <input type="range" id="minPriceControl" value="36" step="0.0001" min="0" max="100" class="range-contol" />

                <input type="range" id="maxPriceControl" value="75" step="0.0001" min="0" max="100" class="range-contol" />

                <div class="color-block"></div>
            </div>
        </div>
        EOT;
    }

    private function generatePeopleAmount()
    {
        $peopleinputs = '';

        foreach ($this->peopleCount as $pesronCount) {
            $peopleinputs .= "<li><input type='checkbox' id='checkbox$pesronCount' value='$pesronCount'><label for='checkbox$pesronCount'>$pesronCount pers.</label></li>\r\n";
        }

        return <<< EOT
            <div class="people">
                <div class="range-text">
                    Prople count
                </div>
                <div class="people-count-block">
                    <ul class="ks-cboxtags">
                        $peopleinputs
                    </ul>
                </div>
            </div>
        EOT;
    }

    private function generatePlaces()
    {
        $placesPrepear = '';

        foreach ($this->availableCountry as $country) {
            $placesPrepear .= "
                    <li class='place-item'>
                        <label class='place-name'>
                            <input type='radio' name='place' id='$country'>
                            <span>$country</span>
                        </label>
                    </li>\r\n";
        }

        return <<< EOT
            <div class="place">
                <div class="range-text">
                    Country
                </div>

                <ul class="place-items">
                    $placesPrepear
                </ul>
            </div>
        EOT;
    }

    private function generateSeparator()
    {
        return <<< EOT
        <hr> 
        EOT;
    }

    public function generateFilter()
    {
        $range = $this->generateRange();
        $people = $this->generatePeopleAmount();
        $country = $this->generatePlaces();
        $separator = $this->generateSeparator();

        return <<< EOT
        <div class="filter _anim-items">
            <div class="filter-wrapper">
                <div class="filter-title">
                    <h3>Filters</h3>
                </div>
                <div class="filter-items">
                    $range
                    $separator
                    $people
                    $separator
                    $country
                    <a href="/pages/HomePage" class="btn">
                        Show
                    </a>
                </div>
            </div>
        </div>
        EOT;
    }
}
