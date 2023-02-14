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
];
$roleUser =[];
if (isset($_COOKIE['id'])) {
    $roleUser = getRole($_COOKIE['id']);
    if ($roleUser['role'] === 'seller') {
        $router['/seller'] = "controllers/pages/seller/seller.controller.php";
        $router['/createShow'] = "controllers/pages/seller/create_show.controller.php";
        $router['/add-ticket'] = "controllers/pages/seller/create_ticket.controller.php";
        $router['/actionShow'] = "controllers/pages/seller/action_shwo.controller.php";
        $router['/edit-show'] = "controllers/pages/seller/edit_show.controller.php";
    } elseif ($roleUser['role'] === 'admin') {
        $router['/seller'] = "controllers/pages/seller/seller.controller.php";
        $router['/createShow'] = "controllers/pages/seller/create_show.controller.php";
        $router['/add-ticket'] = "controllers/pages/seller/create_ticket.controller.php";
        $router['/actionShow'] = "controllers/pages/seller/action_shwo.controller.php";
        $router['/edit-show'] = "controllers/pages/seller/action/edit_show.controller.php";
        $router['/admin'] = "controllers/pages/admin/admin.controller.php";
        $router['/venueDetele'] = "controllers/pages/seller/venue_action/delete_venue.controller.php";
    }
};
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
