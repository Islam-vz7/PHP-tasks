<?php 

session_start();

require_once './Controllers/MainController.php';
require_once './Models/Model.php';

$path = parse_url( $_SERVER['REQUEST_URI'])['path'];



switch($path) {

    case '/':
        MainController::home();
        break;

    case '/login':
        MainController::login();
        break;
        
    case '/login_back':
        MainController::loginStore();
        break;
    
    case '/register':
        MainController::register();
        break;
                        
    case '/register_back':
        MainController::registerStore();
        break;
                
    case '/classes':
        MainController::classes();
        break;                            
    
    case '/classes_back':
        MainController::classes();
        break; 

    case '/logout':
        MainController::logout();
        break;

    case '/create_classes':
        MainController::create_classes();
        break;

    case '/create_classes_back':
        MainController::create_classes_back();
        break;
    
    case '/update_class':
        MainController::update_class();
        break;

    case '/update_class_back':
        MainController::update_class_back();
        break;

    case '/delete_class':
        MainController::delete_class();
        break;
        
    default:
        include_once './Views/404.php';
        break;
        
}