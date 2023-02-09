<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = [
    "/" => "controllers/pages/home/index.controller.php",
    "/contact" => "controllers/pages/contact/contact.controller.php",
    "/register" => "controllers/pages/forms/register.controller.php",
    "/show" => "controllers/pages/show/show.controller.php",
    "/detail" => "controllers/pages/detail/detail.controller.php",
    "/booking" => "controllers/pages/booking/booking.controller.php",
    "/login" => "controllers/pages/forms/login.controller.php",
    "/logout" => "controllers/pages/forms/logout.controller.php",
    "/seller" => "controllers/pages/seller/seller.controller.php"
];

function not_found($code = 404)
{
    require_once("views/pages/errors/$code.php");
}

function router($uri, $router)
{
    if (array_key_exists($uri, $router)) {
        require_once($router[$uri]);
    } else {
        not_found();
    }
}
router($uri, $router);
