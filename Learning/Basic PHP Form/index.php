<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body class="bg-primary-subtle">

    <main class="col-md">
        <div class="container mt-5 text-center">
        <form action="includes/formhandler.php" method="post">
            <div class="mb-3">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname">
            </div>

            <div class="mb-3">
            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname">
            </div>

            <div class="mb-3">
            <label for="favoritepet">Favorite Pet?</label>
            <select id="favoritepet" name="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            </div>

            <button type="submit">Submit</button>
        </form>
        </div>
    </main>

</body>
</html>
