<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <br>

    <form class="container" action = "index.php" method ="post">
        <div class="mb-3">
          <label for="phoneNumberInput" class="form-label ">Номер телефона</label>
          <input type="text" class="form-control" id="phoneNumberInput" name="phoneNumber">
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

</html>

<?php
    // require_once 'Array.php';
    // $phoneNumber = $_POST["phoneNumber"];
    $numbers = [
        array( "mask"=> "+247-####", "cc"=> "AC", "name_en"=> "Ascension", "desc_en"=> "", "name_ru"=> "Остров Вознесения", "desc_ru"=> "" ),
        array( "mask"=> "+376-###-###", "cc"=> "AD", "name_en"=> "Andorra", "desc_en"=> "", "name_ru"=> "Андорра", "desc_ru"=> "" )];
    echo $numbers[0]["mask"];
    $phone = $numbers[1];

?>  