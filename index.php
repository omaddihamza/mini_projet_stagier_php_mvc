<?php

require_once "./controller/stagierController.php";


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            addStagierAction();
            break;
        case 'list':
            listStagierAction();
            break;
        case 'store':
            store();
            break;
        case 'destroy':
            destroy();
            break;
        case 'delete':
            deleteStagierAction();
            break;
        case 'edit':
            editStagierAction();
            break;
        case 'update':
            updateStagierAction();
            break;
        default:
            print_r('no valide action');
    }
}