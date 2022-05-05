<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExuForce</title>

    <!-- scripts -->
    <script defer src="./scripts/filter.js"></script>

    <!-- // components styles -->
    <link rel="stylesheet" href="./styles/title-screen.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/card.css">
    <link rel="stylesheet" href="./styles/button.css">
    <link rel="stylesheet" href="./styles/search.css">
    <link rel="stylesheet" href="./styles/filter.css">

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="wrapper">

        <?php
        require('./modules/title-screen.php');
        ?>

        <main class="main">
            <div class="container">

                <?php
                require('./modules/search.php');
                ?>

                <section class="content">
                    <div class="filter-block">
                        <?php
                        require('./modules/filter.php');
                        ?>
                    </div>
                    <section class="tours">
                        <div class="tours__list">
                            <div class="tours__list-title">
                                <h2>Наши туры</h2>
                            </div>
                            <div class="row">

                                <?php
                                require('./modules/tour-card.php');
                                ?>

                            </div>
                        </div>
                    </section>
                </section>

            </div>

        </main>
        <?php
        require('./modules/footer.php');
        ?>

    </div>
</body>

</html>