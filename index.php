<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require("Tour.php");

    $iamgeArray = array(1, 2, 3, 4);

    $tour1 = new Tour(
        "Club Hotel",
        "Italy",
        20,
        "о. Сардиния Club Hotel 4* пямой перелет",
        21000,
        "2011-01-01",
        "bus",
        4.2,
        $iamgeArray
    );

    ?>
</body>

</html>