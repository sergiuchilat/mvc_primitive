
<?php
require_once  'models/Student.php';
require_once 'controllers/StudentsController.php';

$moduleName = $_GET['module'];
$actionName = $_GET['action'];

switch ($moduleName){
    case 'student':
        $controller = new StudentsController();
        switch ($actionName){
            case 'list':
                $controller->getList();
                break;
            case 'create':
                $controller->create($_POST);
                break;
        }
        break;
}


