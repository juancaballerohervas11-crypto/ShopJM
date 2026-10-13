<?php
// cargar modelos
require_once(__DIR__ . "/../models/User.php");
require_once(__DIR__ . "/../models/Product.php");
require_once(__DIR__ . "/../models/Order.php");
require_once(__DIR__ . "/../models/OrderLine.php");
require_once(__DIR__ . "/../models/ProductRepository.php");
require_once(__DIR__ . "/../models/OrderRepository.php");
require_once(__DIR__ . "/../models/OrderLineRepository.php");
require_once(__DIR__ . "/../db.php");
       
session_start();

if (isset($_GET['c'])) {
    if ($_GET['c'] == 'user') {
        require_once(__DIR__ . "/userController.php");
    }
    if ($_GET['c'] == 'product') {
        require_once(__DIR__ . "/productController.php");
    }
}

// ver login
if (isset($_GET['login'])) {
    require_once(__DIR__ . '/../views/loginview.phtml');
    exit;
}

// register
if (isset($_GET['register'])) {
    require_once(__DIR__ . '/../views/registerView.phtml');
    exit;
}

// vista por defecto
$products = ProductRepository::getProducts();
require_once(__DIR__ . '/../views/mainView.phtml');
?>
