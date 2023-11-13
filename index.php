<?php require_once("scripts/script.php") ?>

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
            <label for="phoneNumberInput" class="form-label">Номер телефона</label>
            <input type="tel" class="form-control w-25" id="phoneNumberInput" name="phoneNumber">
        </div>
        <input type="submit" class="btn btn-primary" value="Проверить"></input>
    </form>


    <div class="container border shadow-sm my-5 p-5 bg-transparent rounded">
        <div class="row p-3">
            <div class="col-7">
                <div class="row h2 mb-5">Lorem ipsum</div>
                <div class="row mb-5">
                    <div class="col-5 px-0">
                        <div class="h5">Kostzy</div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5 px-0">
                        <div class="h5">Black Friday?</div>
                        <div>Nam interdum erat non risus vulputate.</div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-5 px-0">
                        <div class="h5">Maecenas euismod</div>
                        <div>Praesent ac eleifend dui, a eleifend justo.</div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5 px-0">
                        <div class="h5">Sed felis sem</div>
                        <div>Duis rhoncus nibh at metus ultricies tempor.</div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-5 px-0">
                        <div class="h5">Sed sollicitudin</div>
                        <div>Fusce quam ligula, sagittis eget rutrum et.</div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5 px-0">
                        <div class="h5"> Sed in vulputate</div>
                        <div>Morbi ultrices quam nec ipsum tincidunt.</div>
                    </div>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="https://picsum.photos/300/300" alt="" class="rounded w-50 h-50">
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

</body>

</html>


<?php

if (!array_key_exists('popupTimeInterval', $_COOKIE)) {
    require_once "CookiesPopUp.php";
}

?>