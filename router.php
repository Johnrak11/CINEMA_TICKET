<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$router = [
    "/" => "controllers/home/index.controller.php",    
    "/about" => "controllers/about.php",    
    "/contact" => "controllers/contact.php",    
    "/register" => "controllers/forms/register.controller.php",    
    "/show" => "controllers/pages/show.controller.php",    
    "/detail" => "controllers/pages/detail.controller.php",    
    "/login" => "controllers/forms/login.controller.php",    
    "/logout" => "controllers/forms/logout.controller.php",    
];

function not_found($code = 404) 
{
    require_once("views/$code.php");
}

function router($uri, $router) 
{
    if (array_key_exists($uri, $router)) {
        require_once($router[$uri]);
    }
    else
    {
        not_found();
    }
}
router($uri, $router);

?>
