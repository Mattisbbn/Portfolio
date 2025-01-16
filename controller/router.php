<?php 
class pageActions{
    public function getCurrentpage(){
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = str_replace('/webtraining/', '', $url);
        $segments = explode('/', $url);
        return $segments[2];
    }

    public function pageExists(string $page){
        if(!empty($page) && file_exists("view/{$page}/{$page}.php")){
            return true;
        }else{
            return false;
        }
    }

    public function getSubPage(string $page){
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = str_replace('/webtraining/', '', $url);
        $segments = explode('/', $url);
        if(isset($segments[3])){
            $subpage = $segments[3] ;
            if(!empty($page) && file_exists("view/{$page}/{$subpage}/{$subpage}.php")){
                return $subpage;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}

$pageActions = new pageActions;
$page = $pageActions->getCurrentpage();
$subPage = $pageActions->getSubPage($page);


if($subPage){
    require_once("view/{$page}/{$subPage}/{$subPage}.php");
}elseif($pageActions->pageExists($page)){
    require_once("view/{$page}/{$page}.php");
} else {
    require_once("view/home/home.php");
}