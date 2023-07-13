<?php

    var_dump($_SERVER['REQUEST_URI']);
$routes = [
    '/socialdev.com' => 'Controllers@index',
    '/connexion' => 'Controllers@login',
    '/contact' => 'Controllers@logup',
    '/hello' => 'Controllers@index'
];

$currentUrl = $_SERVER['REQUEST_URI'];

if (array_key_exists($currentUrl, $routes)) {
    $route = $routes[$currentUrl];
    $parts = explode('@', $route);
    
    // Obtenir le nom du contrôleur et de l'action
    $controllerName = $parts[0];
    $actionName = $parts[1];
    
    require "controllers/$controllerName.php";

    // Instancier le contrôleur
    $controller = new $controllerName();
    
    // Appeler l'action du contrôleur
    $controller->$methodName();
} else {
    // Gérer les routes non trouvées
    echo "404 Page non trouvée";
}
