<!-- for more: https://mdbootstrap.com/docs/standard/extended/cookie-consent/; https://www.google.com/search?q=cookies-popup+bootstrap&newwindow=1&sca_esv=581345929&sxsrf=AM9HkKk-8vy1W7i8JtrLwvUjriaEZ0fUgQ%3A1699657091070&ei=g7VOZbHqA5n_ptQPnY-yoAo&ved=0ahUKEwjxt5yJxLqCAxWZv4kEHZ2HDKQQ4dUDCBA&uact=5&oq=cookies-popup+bootstrap&gs_lp=Egxnd3Mtd2l6LXNlcnAiF2Nvb2tpZXMtcG9wdXAgYm9vdHN0cmFwMgYQABgWGB4yBhAAGBYYHjIIEAAYCBgeGA1IwxZQpwFYqRVwAXgBkAEAmAGJA6AB2hGqAQcwLjEuNC4zuAEDyAEA-AEBwgIKEAAYRxjWBBiwA8ICBBAAGB7CAgYQABgeGArCAggQABgWGB4YD-IDBBgAIEGIBgGQBgg&sclient=gws-wiz-serp -->
<!-- Button trigger modal -->

<!-- 
    * ! Basically add a cookie with a live of 1 day and check if it's exists and then execute the script to show that
 -->

    <!-- <div class="fixed-bottom" style="height: 100px; background-color: #17202A;">
        <div class="container">
            
        </div>
    </div> -->

<!-- 
<?php   

     setcookie("popupTimeInterval","1",time() + (86400), "/"); 

?> -->

<!-- FILEPATH: /c:/Users/TEMK/Desktop/phpTC/Grizzly-Digital/CookiesPopUp.php -->

<!-- Cookie consent popup -->

<div class="fixed-bottom d-flex align-items-center" style="height: 75px; background-color: #17202A;" <?php echo $acceptButton;?>>
    <div class="container">
        <div class="row d-flex align-items-center " >
            <div class="col-10 " style="color: white;">
                <p>We use cookies to ensure you get the best experience on our website. By continuing to browse, you consent to our use of cookies. <a href="#">Learn more</a></p>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <form action="CookiesPopUp.php" >
                    <input type="button" class="btn btn-primary" name="acceptButton" value='Accept' method="post"></input>
                </form>
                
            </div>
        </div>
    </div>
</div>


<?php 
    $acceptButton = "";
    if(array_key_exists('acceptButton', $_POST)){
        echo "Hello";
    }
?>



<!-- <script>
    function acceptCookies() {
        // Set cookie to expire in 1 year
        document.cookie = "cookieConsent=true; expires=" + new Date(new Date().getTime() + 31536000000).toUTCString() + "; path=/";
        // Hide the popup
        document.querySelector('.fixed-bottom').style.display = 'none';
    }
    
    // Check if cookie exists
    if (document.cookie.indexOf('cookieConsent=true') > -1) {
        // Hide the popup
        document.querySelector('.fixed-bottom').style.display = 'none';
    }
</script> -->
