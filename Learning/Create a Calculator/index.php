<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css"> <!-- Used Bootstrap for the pagestyle -->
    <title>Document</title>
</head>
<body class="bg-black">
    <div class="container mt-5 text-center">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<!--        /*$_SERVER["PHP_SELF"]; this it is going to send the data to the same page.*/-->
        
        <div class="mb-3">
        <label class="form-label" for="num01"></label>
        <input type="number" name="num01" placeholder="Number one">
        </div>
        <div class="mb-3">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        </div>
        <div class="mb-3">
        <label class="form-label" for="num02"></label>
        <input type="number" name="num02" placeholder="Number two">
        </div>

        <button>Calculate</button>
    </form>
    </div>

    <?php
        // Grab data from inputs.
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            // error handlers
            $errors = false;

            if (empty($num01) || empty($num02) || empty($operator)){
                echo "<p class='mb-3 text-danger text-center'>Fill in all fields!</p>";
                $errors = true;
            }

            if (!is_numeric($num01) || !is_numeric($num02)){
                echo "<p class='mb-3 text-danger text-center'>Only write numbers!</p>";
                $errors = true;
            }

            // Calculate the number if not errors
            if (!$errors){
                $value = 0;

                switch ($operator){
                    case "add":
                        $value = $num01 + $num02;
                        break;
                    case "subtract":
                        $value = $num01 - $num02;
                        break;
                    case "multiply":
                        $value = $num01 * $num02;
                        break;
                    case "divide":
                        $value = $num01 / $num02;
                        break;
                    default:
                        echo "<p class='mb-3 text-danger text-center'>Something went wrong!</p>";
                }

                echo "<p class='mb-3 text-white text-center'>Result = " . $value . "</p>";
            }
        }
    ?>

</body>
</html>
