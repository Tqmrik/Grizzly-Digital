<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <br>

    <form class="container" action="index.php" method="post">
        <div class="mb-3">
            <label for="phoneNumberInput" class="form-label ">Номер телефона</label>
            <input type="tel" class="form-control" id="phoneNumberInput" name="phoneNumber">
           
        </div>
        <input type="submit" class="btn btn-primary" value="Send"></button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</body>


<?php
            $numbers = require 'Array_copy2.php';
            // require_once 'Array.php';
            if (array_key_exists('phoneNumber', $_POST)) {
                
                $phoneNumber = $_POST["phoneNumber"];
                $foundSomething = false;
                foreach ($numbers as $arr) {
                    if (preg_match("/" . $arr["mask"] . "/i", $phoneNumber)) {
                        echo $arr["name_ru"];
                        $foundSomething = true;
                    }
                }
                if (!$foundSomething) {
                    echo "No matches found";
                }
            }
            ?>

</html>