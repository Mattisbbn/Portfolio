<?php 
class pageActions{
    public function getCurrentpage(){
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = str_replace('/webtraining/', '', $url);
        $segments = explode('/', $url);
        return $segments[2];
    }
}
$pageActions = new pageActions;
$page = $pageActions->getCurrentpage() ?? 'home';
if (!empty($page) && file_exists("view/{$page}/{$page}.php")) {
    require_once("view/{$page}/{$page}.php");
} else {
    require_once("view/home/home.php");
}