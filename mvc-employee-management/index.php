<?php
    require_once 'config/database.php';
    require_once 'controllers/EmployeeController.php';

    // routing dengan switch case statement
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $controller = new EmployeeController();

    switch ($action){
        case 'create':
            $controller->create();
            break;
        case 'store':
            $controller->save();
            break;
        case 'update':
            $controller->update($_GET['id']);
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        default:
            $controller->index();
            break;
    }


?>