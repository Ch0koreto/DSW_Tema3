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
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            printf("%d<br>", $i . $j);
        }
    } ?>

    <?php
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            if ($i > 5 || $j > 5)
                continue;
            if ($i > 2)
                break;
            printf("%d<br>", $i . $j);
        }
    } ?>
</body>

</html>