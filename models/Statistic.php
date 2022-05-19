<?php

class Stat
{
    private $title;
    private $value;

    public function __construct(
        $title,
        $value
    ) {
        $this->value = $value;
        $this->title = $title;
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
                break;
            case 'value':
                $this->value = $value;
                break;
        }
    }
}

class Statistic extends APage
{

    private $statistic;

    public function __construct(
        $title,
        $scripts,
        $stylePath,
        $statistic
    ) {
        $this->statistic = $statistic;
        parent::__construct($title, $scripts, $stylePath);
    }

    function getState()
    {
        return $this->statistic;
    }

    function setState($value)
    {
        $this->statistic = $value;
    }

    public function generateBody()
    {
        $statisticList = '';

        foreach ($this->statistic as $stat) {
            $statisticList .= "
            <div class='statistic-col'>
                <div class='statistic-item'>
                    <div class='item-title'>
                        <h3>
                            $stat->title
                        </h3>
                    </div>
                    <div class='item-value'>
                        <h3>
                            $stat->value
                        </h3>
                    </div>
                </div>
            </div>
            ";
        }

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
                                                <a class="btn" href="/"> Tours</a>
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
                </div>

                <section class="statistic">
                    <div class="container">
                        <div class="statistic-title">
                            <h1>Site statistic</h1>
                        </div>
                        <div class="statistic__inner">
                            <div class="statistic-row">
                                $statisticList
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        EOT;
    }
}
