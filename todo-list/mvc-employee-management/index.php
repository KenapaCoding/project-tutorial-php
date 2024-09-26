<?php
require_once 'config/database.php';
require_once 'controllers/EmployeeController.php';

// Routing menggunakan switch case
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create':
        $controller = new EmployeeController();
        $controller->create();
        break;
    case 'store':
        $controller = new EmployeeController();
        $controller->store();
        break;
    case 'edit':
        $controller = new EmployeeController();
        $controller->edit($_GET['id']);
        break;
    case 'update':
        $controller = new EmployeeController();
        $controller->update($_GET['id']);
        break;
    case 'delete':
        $controller = new EmployeeController();
        $controller->delete($_GET['id']);
        break;
    default:
        $controller = new EmployeeController();
        $controller->index();
        break;
}
?>
