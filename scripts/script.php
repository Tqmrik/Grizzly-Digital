<?php
$numbers = require 'data/Array_RegEx.php';
// require_once 'Array.php';
if (array_key_exists('phoneNumber', $_POST)) {

    $phoneNumber = $_POST["phoneNumber"];
    $foundSomething = false;
    foreach ($numbers as $arr) {
        if (preg_match("/" . $arr["mask"] . "/i", $phoneNumber)) {
            echo $arr["name_ru"];
            $foundSomething = true;
            break;
        }
    }
    if (!$foundSomething) {
        echo "Совпадений не найдено";
    }
}
?>