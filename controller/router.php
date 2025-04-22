<?php 
$router = new AltoRouter();

$router->map('GET', '/', function() {
    require_once 'view/partials/header.html';
    require_once 'view/home/home.php';
    require_once 'view/partials/footer.php';
}, 'home');

$router->map('GET', '/contact', function() {
    require_once 'view/partials/header.html';
    require_once 'view/contact/contact.php';
    require_once 'view/partials/footer.php';
}, 'contact');

$router->map('GET', '/realisations', function() {
    require_once 'view/partials/header.html';
    require_once 'view/realisations/partials/realisations.html';
    require_once 'view/partials/footer.php';
}, 'realisations');

$router->map('GET', '/realisations/[*:slug]', function($slug) {
    require_once 'view/partials/header.html';
    if(file_exists("view/realisations/{$slug}/{$slug}.php")) {
        require_once("view/realisations/{$slug}/{$slug}.php");
    } else {
        require_once("view/404/404.php");
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        exit;
    }
    require_once 'view/partials/footer.php';
}, 'realisations.project');

$router->map('GET', '/competences', function() {
    require_once 'view/partials/header.html';
    require_once 'view/competences/competences.html';
    require_once 'view/partials/footer.php';
}, 'competences');

$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // 404
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo 'Page non trouvée';
}