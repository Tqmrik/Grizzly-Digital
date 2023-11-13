<div class="fixed-bottom align-items-center" style="height: 75px; background-color: #17202A;">
    <div class="container">
        <div class="row d-flex align-items-center ">
            <div class="col-10 " style="color: white;">
                <p>We use cookies to ensure you get the best experience on our website. By continuing to browse, you
                    consent to our use of cookies. <a href="#">Learn more</a></p>
            </div>
            <div class="col-2 d-flex justify-content-center my-2">
                <form action="index.php" method="post">
                    <input type="submit" class="btn btn-primary" name="acceptButton" value='Accept'></input>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (array_key_exists('acceptButton', $_POST)) {
        $acceptBtn = "style='display:none;'";
    }

    $acceptBtn = "";
    setcookie("popupTimeInterval", "1", time() + (86400), "/");

?>
