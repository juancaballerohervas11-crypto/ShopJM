<?php
// cargar modelos
require_once("models/User.php");
require_once("models/Product.php");
require_once("models/Order.php");
require_once("models/OrderLine.php");
require_once("models/ProductRepository.php");
require_once("models/OrderRepository.php");
require_once("models/OrderLineRepository.php");
require_once("db.php");
       
session_start();

if (isset($_GET['c'])) {
    if ($_GET['c'] == 'user') {
        require_once("userController.php");
    }
    if ($_GET['c'] == 'product') {
        require_once("productController.php");
    }
}

// ver login
if (isset($_GET['login'])) {
    require_once('views/loginview.phtml');
    exit;
}

// register
if (isset($_GET['register'])) {
    require_once('views/registerView.phtml');
    exit;
}

// vista por defecto
$products = ProductRepository::getProducts();
require_once('views/mainView.phtml');
?>
