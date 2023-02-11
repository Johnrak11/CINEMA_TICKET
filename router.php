<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = [
    "/" => "controllers/pages/home/index.controller.php",
    "/contact" => "controllers/pages/contact/contact.controller.php",
    "/register" => "controllers/pages/forms/register.controller.php",
    "/show" => "controllers/pages/show/show.controller.php",
    "/detail" => "controllers/pages/detail/detail.controller.php",
    "/login" => "controllers/pages/forms/login.controller.php",
    "/logout" => "controllers/pages/forms/logout.controller.php",
    "/seller" => "controllers/pages/seller/seller.controller.php",
    "/actionShow" => "controllers/pages/seller/action_shwo.controller.php",
    "/createShow" => "controllers/pages/seller/create_show.controller.php",
    "/createVenue" => "controllers/pages/seller/create_venue.controller.php",
    "/sellerVenue" => "controllers/pages/seller/venue.controller.php",
    "/venueDetele" => "controllers/pages/seller/venue_action/delete_venue.controller.php",
    "/user-profile" => "views/pages/users/profile.view.php",
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
