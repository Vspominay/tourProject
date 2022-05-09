<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExuForce</title>

    <link rel="stylesheet" href="../../styles/title-screen.css">
    <link rel="stylesheet" href="../../styles/button.css">
    <link rel="stylesheet" href="../../styles/search.css">
    <link rel="stylesheet" href="../../styles/footer.css">


    <link rel="stylesheet" href="./style.css">


    <!-- slick slider -->
    <link rel="stylesheet" href="../../slick/slick.css">
    <link rel="stylesheet" href="../../slick/slick-theme.css">

    <script defer src="../../scripts/jquery.js"></script>
    <script defer src="../../slick/slick.min.js"></script>
    <script defer src="./script.js"></script>
    <script defer src="../../scripts/animation.js"></script>

</head>

<body>

    <?php
    require('.../../services/dummyData.php');
    $tour = getTourById($_GET['id']);
    ?>

    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="header__logo">
                        <img src="../../images/logo.png" width="40" height="60" alt="logo" />
                    </div>
                    <div class="header__menu">
                        <nav class="header__menu-nav">
                            <ul class="header__list">
                                <li class="header__list-item"><a href="#main"> Главная</a></li>
                                <li class="header__list-item"><a href="#trips"> Экскурсии</a></li>
                                <li class="header__list-item"><a href="#cabinet"> Личный кабинет</a></li>
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
                                    <a class="btn" href="#main"> Главная</a>
                                </li>
                                <li class="header__menu-item-burg">
                                    <a class="btn" href="#trips"> Экскурсии</a>
                                </li>
                                <li class="header__menu-item-burg">
                                    <a class="btn" href="#cabinet"> Личный кабинет</a>
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
        <section class="title">
            <div class="title-background">
                <div class="backgrount-filter"></div>
                <img src="../../images/title-bg.jpg" alt="title">
            </div>
            <div class="container">

                <div class="title-inner">
                    <div class="title-content">
                        <h2><?php echo $tour->type ?></h2>
                        <h1><?php echo $tour->title ?></h1>
                        <div class="description__interact">
                            <a href="#" class="btn">
                                Другие туры
                            </a>

                            <a href="#" class="favorite">
                                <span class="icon-heart"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="description ">
            <div class="container">
                <div class="description__inner ">
                    <div class="description__text _anim-items">
                        <h3 class="description-title">
                            Описание экскурсии
                        </h3>
                        <p class="description-article">
                            <?php echo $tour->description ?>
                        </p>
                    </div>

                    <div class="description__price _anim-items">
                        <div class="description-price__items">
                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        <?php echo $tour->cost->normalPrice ?>$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Взрослый билет
                                </div>

                            </div>

                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        <?php echo $tour->cost->childPrice ?>$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Детский билет
                                </div>

                            </div>

                            <div class="description-price__item description__during">
                                <span class="icon-time"></span>
                                <span>
                                    <?php echo $tour->during ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="route">
            <div class="container">
                <div class="route__inner">
                    <div class="route-block">
                        <div class="route-title _anim-items">
                            <h3>
                                Описание маршрута
                            </h3>
                        </div>
                        <ul class="route-items">
                            <li class="route-item _anim-items">Город Гагра, Колоннада, ресторан "Гагрипш", Парк принца Ольденбурского;</li>
                            <li class="route-item _anim-items">Смотровая площадка "Прощай Родина", "Чабгарский" карниз, Подвесной мост через реку "Бзыбь";</li>
                            <li class="route-item _anim-items">Дегустация сыра, меда, вина, чачи (входит в стоимость экскурсии), Голубое Озеро, Юпшарский каньон ("Каменный мешок"), Озеро "Рица", Водопады "Девичьи и мужские слезы".</li>
                            <li class="route-item _anim-items">Монастырь "Новый Афон", Новоафонская Пещера, "Рукотворный" водопад, храм "Симона Кананита", Лебединое озеро.</li>
                            <li class="route-item _anim-items">Термальный источник в с. Приморское. </li>
                        </ul>
                    </div>
                    <div class="route-gallery">
                        <div class="gallery-slider _anim-items">
                            <div class="slide">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/22443294.jpg?k=fc9d8a13beb15e92eb0479d21af7e66ae55f8da78f5b45b1b63a2937a52fb3d0&o=&hp=1" width="280" height="450" alt="hotel1">
                            </div>
                            <div class="slide">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi5SQ8yfC3qOg1riS6UtzySyURj3astfT_H_LXUUj0dYR86OBo7yGs0dbr5UG4am36apE&usqp=CAU" width="280" height="450" alt="hotel1">
                            </div>
                            <div class="slide">
                                <img src="https://www.cbh-cyprus.com/app/uploads/sites/30/2021/06/1-ATHENA-BEACH-HOTEL.jpg" width="280" height="450" alt="hotel1">
                            </div>
                            <div class="slide">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlBukolx5xeFh5fAKnPYax82vpxDVQtKH09ske3T8fGr0YxxBx2Pd2Ji-sEuo8uSuZiGg&usqp=CAU" width="280" height="450" alt="hotel1">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="additional">
            <div class="container">
                <div class="additional__inner">
                    <div class="additional-text _anim-items">
                        <h3>Дополнительные расходы</h3>
                    </div>
                    <div class="additional-row">
                        <div class="additional-col _anim-items">
                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        1618$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Взрослый билет
                                </div>

                            </div>
                        </div>
                        <div class="additional-col _anim-items">
                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        1618$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Взрослый билет
                                </div>

                            </div>
                        </div>
                        <div class="additional-col _anim-items">
                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        1618$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Взрослый билет
                                </div>

                            </div>
                        </div>
                        <div class="additional-col _anim-items">
                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        1618$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Взрослый билет
                                </div>

                            </div>
                        </div>
                        <div class="additional-col _anim-items">
                            <div class="description-price__item">
                                <div class="price__item-cost">
                                    <span class="icon-coins"></span>
                                    <span>
                                        1618$
                                    </span>
                                </div>
                                <div class="price__item-age">
                                    Взрослый билет
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <div class="gallery-text _anim-items">
                    <h3>Галерея тура</h3>
                </div>
            </div>

            <div class="gallery-content">
                <div class="gallery-item1 _anim-items">
                    <img src="https://images.pexels.com/photos/1268855/pexels-photo-1268855.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="550" width="120" alt="gallery-photo">
                </div>
                <div class="gallery-item2 _anim-items">
                    <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="550" width="120" alt="gallery-photo">
                </div>
                <div class="gallery-item3 _anim-items">
                    <img src="https://images.pexels.com/photos/1004584/pexels-photo-1004584.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="550" width="120" alt="gallery-photo">
                </div>
                <div class="gallery-item4 _anim-items">
                    <img src="https://images.pexels.com/photos/1285625/pexels-photo-1285625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="550" width="120" alt="gallery-photo">
                </div>
                <div class="gallery-item5 _anim-items">
                    <img src="https://images.pexels.com/photos/1450340/pexels-photo-1450340.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="550" width="120" alt="gallery-photo">
                </div>
                <div class="gallery-item6 _anim-items">
                    <img src="https://images.pexels.com/photos/2087391/pexels-photo-2087391.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="550" width="120" alt="gallery-photo">
                </div>
            </div>

        </section>

        <section class="booking">
            <div class="booking__conent">

                <div class="booking-image _anim-items">
                    <img src="../../images/title-bg.jpg" width="450" height="380" alt="form image">
                </div>
                <div class="container">
                    <div class="booking__inner _anim-items">
                        <form action="../check/check.php" method="post">

                            <div class="booking-title">
                                <h3>
                                    Забронировать тур
                                </h3>
                            </div>

                            <div class="search-input-block">
                                <input name="name" type="text" class="input-field" placeholder="Your name">
                            </div>

                            <div class="search-input-block">
                                <span class="icon-calendar"></span>
                                <input name="date" type="date" class="input-field" placeholder="Date">
                            </div>

                            <div class="search-input-block">
                                <span class="icon-people"></span>
                                <input name="email" type="email" class="input-field" placeholder="Your email">
                            </div>

                            <div class="description__interact">
                                <button type="submit" class="btn">
                                    Забронировать
                                </button>

                                <a href="#" class="favorite">
                                    <span class="icon-heart"></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require('./modules/footer.php');
        ?>
    </div>

</body>

</html>