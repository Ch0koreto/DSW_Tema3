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
    function nPares($start, $end = 10)
    {
        for ($start = 1; $start < $end; $start++) {
            if ($start % 2 == 0) echo $start ;
        }
    }
    nPares(0,15);
    ?>
</body>

</html>