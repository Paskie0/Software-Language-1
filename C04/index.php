<?php

/**
 * Server variabelen
 * SERVER
 * GET
 * POST
 */
//var_dump($_SERVER['REQUEST_URI']);

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php"
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    //header("Location: " . $routes[$_SERVER['REQUEST_URI']]);
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    echo "404";
}

/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */




/**
 * PDO - connect to database
 *
 */

//require 'views/index.view.php';
