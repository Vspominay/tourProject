<?php

class AdminTours extends APage
{

    private $tours;

    public function __construct(
        $title,
        $scripts,
        $stylePath,
        $tours
    ) {
        $this->tours = $tours;
        parent::__construct($title, $scripts, $stylePath);
    }

    function getState()
    {
        return $this->tours;
    }

    function setState($value)
    {
        $this->tours = $value;
    }

    public function generateBody()
    {
        $toursList = $this->generateToursList();
        $searchBar = $this->generateSearch();

        echo <<< EOT
        <div class="wrapper">
            <div class="container">
                <header class="header">
                    <div class="container">
                        <div class="header__inner">
                            <div class="header__logo">
                                <h3>Admin panel</h3>
                            </div>
                            <div class="header__menu">
                                <nav class="header__menu-nav">
                                    <ul class="header__list">
                                        <li class="header__list-item"><a href="/admin"> Statistic</a></li>
                                        <li class="header__list-item"><a href="/admin/users"> Users</a></li>
                                        <li class="header__list-item"><a href="/admin/tours"> Tours</a></li>
                                        <li class="header__list-item"><a href="/"> Exit</a></li>
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
                                            <a class="btn" href="/admin/users"> Users</a>
                                        </li>
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/admin/tours"> Tours</a>
                                        </li>
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/">Exit</a>
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

                $searchBar

                <div class="search-input-block">
                    <span class="icon-search"></span>
                    <input type="text" class="input-field" placeholder="Tour name...">
                </div>

                $toursList
            </div>
        </div>
        </div>
        EOT;
    }

    private function generateSearch()
    {
        return <<< EOT
        <section class="search">
            <div class="search__inner">
                <div class="search-types">
                    <ul class="types-items">
                        <li class="types-item active">Hotel</li>
                        <li class="types-item">Tour</li>
                        <li class="types-item">Camping</li>
                        <li class="types-item">Hot tours</li>
                    </ul>
                </div>

                <div class="search-config">

                    <div class="search__input-col">
                        <div class="search-input-block">
                            <span class="icon-location"></span>
                            <input type="text" class="input-field" placeholder="City...">
                        </div>
                    </div>

                    <div class="search__input-col">
                        <div class="search-input-block">
                            <span class="icon-calendar"></span>
                            <input type="date" class="input-field" placeholder="DD.MM.YYYY">
                        </div>
                    </div>

                    <div class="search__input-col">
                        <div class="search-input-block">
                            <span class="icon-people"></span>
                            <input type="text" class="input-field" placeholder="People count..">
                        </div>
                    </div>

                    <div class="search__input-col">
                        <a href="/pages/HomePage" class="btn search-btn">
                            Show
                        </a>
                    </div>

                </div>
            </div>
        </section>
        EOT;
    }

    private function generateToursList()
    {
        $tourItems = '';

        foreach ($this->tours as $tour) {
            $tourItems .= $tour->generateAdminPost();
        }

        return <<< EOT
        <section class="tours">
            <div class="container">
                <div class="tours-row">
                    <div class="tours-col">
                        <div class="tours-item">
                            <a href="#" class="tours-create">
                                +
                            </a>
                        </div>
                    </div>
                    $tourItems
                </div>
            </div>
        </section>
        EOT;
    }
}
