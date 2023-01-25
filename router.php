<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// echo $uri;
$router = [
    "/" => "controllers/home/index.controller.php",    
    "/about" => "controllers/about.php",    
    "/contact" => "controllers/contact.php",    
    "/login" => "controllers/forms/register.controller.php",    
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
