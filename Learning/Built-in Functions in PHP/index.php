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
        $string = "Hello World!";
        //Built-in functions
        //String
        echo strlen($string); //The strlen() function returns the length of a string.
        echo strpos($string, "Wo"); //The strrpos() function finds the position of the last
                             // occurrence of a string inside another string.
        echo str_replace("World", "Job", $string); //The substr_replace() function replaces a
                                                                // part of a string with another string.
        echo strtolower($string); //The strtolower() function converts a string to lowercase.
        echo strtoupper($string); //The strtoupper() function converts a string to uppercase.
        echo substr($string, 2, -2); //The substr() function returns a part of a string.
        print_r(explode(" ", $string));//The explode() function breaks a string into an array.

        //Math function
        $number = -5.5;

        echo abs($number); //Returns the absolute (positive) value of a number
        echo round($number); //Rounds a floating-point number
        echo pow(2 ,3); //Returns x raised to the power of y
        echo sqrt(4);//Returns the square root of a number
        echo rand(1,100); //Generates a random integer

        //Arrays
        $array = [
            "apple",
            "banana",
            "cherry"
        ];

        echo count($array); //Returns the number of elements in an array
        echo is_array($array);
        print_r(array_reverse($array));

    //Dates  and Time
    echo date("Y-m-d H:i:s");//Formats a local date and time
    echo time(); //Returns the current time as a Unix timestamp

    $date = "2024-02-19 17:30:00";
    echo strtotime($date);//Parses an English textual datetime into a Unix timestamp
    ?>

</body>
</html>
