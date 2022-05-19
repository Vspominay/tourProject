<?php

class AdminUsers extends APage
{

    private $users;

    public function __construct(
        $title,
        $scripts,
        $stylePath,
        $users
    ) {
        $this->users = $users;
        parent::__construct($title, $scripts, $stylePath);
    }

    function getState()
    {
        return $this->users;
    }

    function setState($value)
    {
        $this->users = $value;
    }

    public function generateBody()
    {
        $usersList = '';

        $idUser = 0;
        foreach ($this->users as $user) {
            $usersList .= "
                <li class='user-item'>
                    <ul class='user-info'>
                        <li class='user-info__item'>
                            <span>
                                id:
                            </span>
                            $idUser
                        </li>
                        <li class='user-info__item'>
                            <span>
                                name:
                            </span>
                            $user->name
                        </li>
                        <li class='user-info__item'>
                            <span>
                                login:
                            </span>
                            $user->login
                        </li>
                        <li class='user-info__item'>
                            <span>
                                phone:
                            </span>
                           $user->telNumber
                        </li>
                    </ul>

                    <div class='user-control'>
                        <span class='icon-delete user-delete'></span>
                    </div>
                </li>
            ";
            $idUser++;
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
                </div>

                <section class="users">
                    <div class="container">
                        <div class="users-title">
                            <h1>Users list</h1>
                        </div>
                        <div class="search-input-block">
                            <span class="icon-search"></span>
                            <input type="text" class="input-field" placeholder="User login...">
                        </div>
                        <div class="users__inner">
                            <ul class="users-items">
                                $usersList
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        EOT;
    }
}
