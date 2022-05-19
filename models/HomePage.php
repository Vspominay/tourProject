<?php

class HomePage extends APage
{
    private $tourList;

    public function __construct(
        $title,
        $scripts,
        $stylePath,
        $tourList
    ) {
        $this->tourList = $tourList;
        parent::__construct($title, $scripts, $stylePath);
    }


    public function generateBody()
    {
        require('Filter.php');
        $filter = new Filter(1000, 15000, array(1, 2, 3, 4, 5, 6, 7), array('Paris', 'Dubai', 'Turkey', 'Austria'));
        $filterBlock = $filter->generateFilter();
        $searchBar = $this->generateSearch();
        $cardList = '';

        foreach ($this->tourList as $tour) {
            $cardList .= $tour->generatePost();
        }

        echo <<< EOT
        <body>
            <div class="wrapper">

            <div class="title-screen">
                <div class="container">
                    <header class="header">
                        <div class="header__inner">
                            <div class="header__logo">
                                <img src="../../images/logo.png" width="40" height="60" alt="logo" />
                            </div>
                            <div class="header__menu">
                                <nav class="header__menu-nav">
                                    <ul class="header__list">
                                        <li class="header__list-item"><a href="/"> Home</a></li>
                                        <li class="header__list-item"><a href="/"> Tours</a></li>
                                        <li class="header__list-item"><a href="/admin"> My Tours</a></li>
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
                                            <a class="btn" href="/"> Home</a>
                                        </li>
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/"> Tours</a>
                                        </li>
                                        <li class="header__menu-item-burg">
                                            <a class="btn" href="/admin"> My Tours</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header__burger">
                                <span class="burger-item"></span>
                            </div>
                        </div>
                    </header>

                    <div class="title-screen__inner">
                        <div class="title-screen__main-text">
                            <h1>
                                ACTIVE TOURS
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <main class="main">
                <div class="container">
                    $searchBar
                    <section class="content">
                        <div class="filter-block">
                            $filterBlock
                        </div>
                        <section class="tours">
                            <div class="tours__list">
                                <div class="tours__list-title _anim-items">
                                    <h2>Our tours</h2>
                                </div>
                                <div class="row">
                                     $cardList
                                </div>
                            </div>
                        </section>
                    </section>

                </div>

            </main>
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
                        <a href="/" class="btn search-btn">
                            Show
                        </a>
                    </div>

                </div>
            </div>
        </section>
        EOT;
    }
}
