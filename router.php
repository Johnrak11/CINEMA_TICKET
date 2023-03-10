<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = [
    "/" => "controllers/pages/home/index.controller.php",
    "/contact" => "controllers/pages/contact/contact.controller.php",
    "/about" => "controllers/pages/about/about.controller.php",
    "/register" => "controllers/pages/forms/register.controller.php",
    "/show" => "controllers/pages/show/show.controller.php",
    "/detail" => "controllers/pages/detail/detail.controller.php",
    "/booking" => "controllers/pages/booking/booking.controller.php",
    "/login" => "controllers/pages/forms/login.controller.php",
    "/logout" => "controllers/pages/forms/logout.controller.php",
    "/purchese" => "controllers/pages/printable/printable.controller.php",
    "/select-seat" => "controllers/pages/booking/seat/seat.controller.php",
    "/view-ticket" => "controllers/pages/printable/printable_detail.controller.php",
    "/profile" => "controllers/pages/profile/profile.controller.php",
];
$roleUser =[];
if (isset($_COOKIE['id'])) {
    $roleUser = getRole($_COOKIE['id']);
    if ($roleUser['role'] === 'seller') {
        $router['/seller'] = "controllers/pages/seller/seller.controller.php";
        $router['/createShow'] = "controllers/pages/seller/create_show.controller.php";
        $router['/add-ticket'] = "controllers/pages/seller/create_ticket.controller.php";
        $router['/actionShow'] = "controllers/pages/seller/action_shwo.controller.php";
        $router['/edit-show'] = "controllers/pages/seller/action/edit_show.controller.php";
        $router['/select-seat'] = "controllers/pages/booking/seat/seat.controller.php";
        $router['/ticketDelete'] = "controllers/pages/booking/seat/seat.controller.php";

        // $router['/edit'] = "controllers/pages/seller/action/edit_new_show.controller.php";
        // $router['/edit-view'] = "views/pages/seller/action/edit_show.view.php";



    } elseif ($roleUser['role'] === 'admin') {
        $router['/seller'] = "controllers/pages/seller/seller.controller.php";
        $router['/createShow'] = "controllers/pages/seller/create_show.controller.php";
        $router['/add-ticket'] = "controllers/pages/seller/create_ticket.controller.php";
        $router['/actionShow'] = "controllers/pages/seller/action_shwo.controller.php";
        $router['/edit-show'] = "controllers/pages/seller/action/edit_show.controller.php";
        $router['/admin'] = "controllers/pages/admin/admin.controller.php";
        $router['/venueDetele'] = "controllers/pages/admin/venue_action/delete_venue.controller.php";
        $router['/userEdit'] = "controllers/pages/admin/user_action/user_action.controller.php";
        $router['/select-seat'] = "controllers/pages/booking/seat/seat.controller.php";
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
