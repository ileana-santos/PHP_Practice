<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <?php
    $bool = true;
    $a = 1;
    $b = 4;

    //The match expression branches evaluation based on an identity check of a value. Similarly to a switch statement,
    // a match expression has a subject expression that is compared against multiple alternatives.
    // Unlike switch, it will evaluate to a value much like ternary expressions. Unlike switch,
    // the comparison is an identity check (===) rather than a weak equality check (==).
    $result = match ($a) {
        1 => "Variable a is equal to one",
        2 => "Variable a is equal to two",
        default => "None were a match",
    };
    echo $result;
    ?>

</body>
</html>
