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

$router->map('GET', '/synthese', function() {
    require_once 'view/partials/header.html';
    require_once 'view/synthese/synthese.html';
    require_once 'view/partials/footer.php';
}, 'synthese');

$router->map('GET', '/realisations', function() {
    require_once 'view/partials/header.html';
    require_once 'view/realisations/partials/realisations.html';
    require_once 'view/partials/footer.php';
}, 'realisations');

$router->map('GET', '/realisations/[*:slug]/documentation', function($slug) {
    require_once 'view/partials/header.html';
    if(file_exists("view/realisations/{$slug}/documentation.html")) {
        require_once("view/realisations/{$slug}/documentation.html");
    } else {
        require_once("view/404/404.php");
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        exit;
    }
    require_once 'view/partials/footer.php';
}, 'realisations.project.documentation');




$router->map('GET', '/realisations/[*:slug]/documentation/dictionnaire/[*:file]', function($slug, $file) {
    $path = "doc/{$slug}/dictionnaire/{$file}";

    
    if(file_exists($path)) {
        header("Content-Type: application/pdf");
        header("Content-Disposition: inline; filename=" . $file);
        readfile($path);
    } else {
        echo "File not found";
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        exit;
    }
}, 'realisations.project.documentation.dictionnaire');












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

$router->map('GET', '/mentions-legales', function() {
    require_once 'view/partials/header.html';
    require_once 'view/mentions-legales/mentions-legales.html';
    require_once 'view/partials/footer.php';
}, 'mentions-legales');

$router->map('GET', '/veille', function() {
    require_once 'view/partials/header.html';
    require_once 'view/veille/veille.html';
    require_once 'view/partials/footer.php';
}, 'veille');

$router->map('GET', '/veille/[*:slug]', function($slug) {
  
    if(file_exists("view/veille/{$slug}.html")) {
        require_once 'view/partials/header.html';
        require_once("view/veille/{$slug}.html");
        require_once 'view/partials/footer.php';
    } else {
        require_once("view/404/404.php");
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        exit;
    }
 
}, 'veille.project');



$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // 404
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo 'Page non trouvée';
}