<?php 
// if( !session_id() ) session_start();

require_once '../app/init.php';

$app = new App;

// require_once('models/UserModel.php');
// require_once('models/CompanyModel.php');
// require_once('models/JobModel.php');
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'login':
            $loginController->login();
            break;
        case 'register':
            $registerController->register();
            break;
        case 'dashboard_admin':
            $adminController->dashboard_admin();
            break;
        case 'dashboard_user':
            $userController->dashboard_user();
            break;
        case 'dashboard_company':
            $companyController->dashboard_company();
            break;
    }
}

// $loginController = new LoginController();
// $registerController = new RegisterController();
// $adminController = new AdminController();
// $userController = new UserController();
// $companyController = new CompanyController();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>