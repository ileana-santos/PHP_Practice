<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]); //htmlspecialchars is useful to prevent
    // XSS (Cross-Site Scripting) attacks, where a malicious user could inject HTML
    // or JavaScript code into a web page.
    $lastname = htmlspecialchars($_POST["lastname"]);
    $pets = htmlspecialchars($_POST["favoritepet"]);

    if (empty($firstname)){
        header("Location: ../index.php");
        exit();
    }

/*    if (empty($lastname)){
        header("Location: ../index.php");
        echo "Please fill Lastname";
        exit();
    }

    if (empty($pets)){
        header("Location: ../index.php");
        echo "Please select a Favorite Pet";
        exit();
    }*/

    /*echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $pets;*/

    header("Location: ../index.php");
} else{
    header("Location: ../index.php");
}
