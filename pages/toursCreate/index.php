<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/Update Tour</title>

    <link rel="stylesheet" href="../../pages/toursCreate/style.css">
    <script defer src="../../pages/toursCreate/script.js"></script>
</head>

<body>

    <div class="wrapper">
        <form action="/" method="POST" enctype="multipart/form-data">
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

            <section class="mainInfo">
                <div class="container">
                    <div class="mainInfo__inner">
                        <div class="mainInfo-imagePreviwe ">
                            <h2>Title Image</h2>
                            <div class="mainInfo-image flyingBlock">
                                <img src="http://flxtable.com/wp-content/plugins/pl-platform/engine/ui/images/image-preview.png" width="368" height="250" alt="title image">
                            </div>
                        </div>

                        <div class="mainInfo-general">
                            <div class="general-headersInfo">
                                <div class="titleInfo">
                                    <div class="">
                                        <label for="titleName" class="search-input-title">
                                            <h3>Title name</h3>
                                        </label>
                                        <div class="search-input-block flyingBlock">
                                            <span class="icon-update"></span>
                                            <input type="text" name="titleName" class="input-field" placeholder="Canada perfect place...">
                                        </div>
                                    </div>

                                    <div class="">
                                        <label for="type" class="search-input-title">
                                            <h3>Tour type</h3>
                                        </label>
                                        <div class="search-input-block flyingBlock">
                                            <span class="icon-type"></span>
                                            <input type="text" name="type" class="input-field" placeholder="Tour...">
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="description" class="search-input-title">
                                        <h3>Description</h3>
                                    </label>
                                    <textarea name="description" class="flyingBlock" cols="30" placeholder="The best tour in your life..." rows="10"></textarea>
                                </div>
                            </div>

                            <div class="mainInfo-cost">
                                <h3>
                                    Cost&Time
                                </h3>
                                <div class="description-price__items">
                                    <div class="description-price__item">
                                        <div class="col-background flyingBlock">
                                            <div class="price__item-cost">
                                                <span class="icon-coins"></span>
                                                <input name="adultPrice" class="price-control" type="text" placeholder="0">
                                            </div>
                                            <label for="adultPrice" class="price__item-age">
                                                Adult ticket
                                            </label>
                                        </div>
                                    </div>

                                    <div class="description-price__item">
                                        <div class="col-background flyingBlock">

                                            <div class="price__item-cost">
                                                <span class="icon-coins"></span>
                                                <input name="childPrice" class="price-control" type="text" placeholder="0">

                                            </div>
                                            <label for="childPrice" class="price__item-age">
                                                Сhild ticket
                                            </label>

                                        </div>
                                    </div>

                                    <div class="description-price__item description__during">
                                        <div class="col-background flyingBlock">

                                            <span class="icon-time"></span>
                                            <span>
                                                <input class="price-control" name="nights" type="text" placeholder="0">
                                                <label for="nights">nights</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="gallery">
                <div class="container">

                    <div class="gallerty-title">
                        <h2>Gallery</h2>
                    </div>

                    <div class="gallery-row">
                        <div class="gallery-col">
                            <div class="gallery-item">
                                <label for="file-upload1" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="file-upload1" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="gallery-col">
                            <div class="gallery-item">
                                <label for="file-upload2" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="file-upload2" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="gallery-col">
                            <div class="gallery-item">
                                <label for="file-upload3" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="file-upload3" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="gallery-col">
                            <div class="gallery-item">
                                <label for="file-upload4" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="file-upload4" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="gallery-col">
                            <div class="gallery-item">
                                <label for="file-upload5" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="file-upload5" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="gallery-col">
                            <div class="gallery-item">
                                <label for="file-upload6" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="file-upload6" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="route">
                <div class="container">

                    <div class="route-title">
                        <h2>Tour route</h2>
                    </div>

                    <div class="route-row">
                        <div class="route-col">
                            <div class="route-item">
                                <div class="search-input-block flyingBlock">
                                    <span class="icon-route"></span>
                                    <input type="text" name="route1-value" class="input-field" placeholder="Route text...">
                                </div>

                                <label for="route1-path" class="custom-file-upload">
                                    Tour route
                                </label>
                                <input id="route1-path" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="route-col">
                            <div class="route-item">
                                <div class="search-input-block flyingBlock">
                                    <span class="icon-route"></span>
                                    <input type="text" name="route2-value" class="input-field" placeholder="Route text...">
                                </div>

                                <label for="route2-path" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="route2-path" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div class="route-col">
                            <div class="route-item">
                                <div class="search-input-block flyingBlock">
                                    <span class="icon-route"></span>
                                    <input type="text" name="route3-value" class="input-field" placeholder="Route text...">
                                </div>

                                <label for="route3-path" class="custom-file-upload">
                                    Select image
                                </label>
                                <input id="route3-path" type="file" accept=".jpg, .jpeg, .png" />
                            </div>
                        </div>
                        <div id="createdBlock" class="route-col">
                            <div class="route-item flyingBlock">
                                <div class="generate-route">
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="expenses">
                <div class="container">

                    <div class="expenses-title">
                        <h2>Additional expenses</h2>
                    </div>

                    <div class="expenses-row">
                        <div class="expenses-col">
                            <div class="expenses-item">
                                <div class="col-background flyingBlock">
                                    <div class="price__item-cost">
                                        <span class="icon-coins"></span>
                                        <input name="expense1-value" class="price-control" type="text" placeholder="0">
                                    </div>
                                    <input name="expense1-name" class="price__item-age price-control" type="text" placeholder="Car">
                                </div>
                            </div>
                        </div>
                        <div id="createExpense" class="expenses-col">
                            <div class="route-item flyingBlock">
                                <div class="generate-route">
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <button type="submit" class="btn confirm-btn">
                Confirm
            </button>
        </form>
    </div>
</body>

</html>