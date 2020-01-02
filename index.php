<?php
//define('ROOT', dirname(__DIR__));
require 'app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else{
    $page = 'annonces.index';
}
//1ere partie: controlleur
//2e partie l'action à appeler
/**
 * @var Array page
 * 
 */
$page = explode('.', $page);
if($page[0] == 'admin'){
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
} else {
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    $action = $page[1];
}
$controller = new $controller();
$controller->$action();
/**
 * par exple:
 * $page = admin.annonces.index
 * avec la function l'explode de php
 * $page[0]= admin
 * $page[1]= annonces
 * $page[2]= index
 * $action = $page[1] ou $page[2]
*/

/** 
if($page === 'home'){
    $controller = new \App\Controller\AnnoncesController();
    $controller->index();
} elseif($page === 'annonces.category'){
    $controller = new \App\Controller\AnnoncesController();
    $controller->category();
} elseif($page === 'annonces.detail'){
    $controller = new \App\Controller\AnnoncesController();
    $controller->detail();
} elseif($page === 'login'){
    $controller = new \App\Controller\UsersController();
    $controller->login();
} elseif($page === 'admin.annonces.index'){
    $controller = new \App\Controller\Admin\AnnoncesController();
    $controller->index();
} */
