<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExuForce</title>

    <!-- // components styles -->
    <link rel="stylesheet" href="./styles/title-screen.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/card.css">
    <link rel="stylesheet" href="./styles/button.css">



    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="wrapper">

        <?php
        require('./modules/title-screen.php');
        ?>

        <main class="main">
            <div class="container">
                <div class="row">
                    <?php
                    require('./modules/tour-card.php');
                    ?>
                </div>
            </div>

        </main>
        <?php
        require('./modules/footer.php');
        ?>

    </div>
</body>

</html>