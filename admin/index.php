<?php
ob_start();
require_once "../global.php";
require_once "../dao/pdo.php";
require_once "../dao/users.php";

check_login();

// header
require_once "header.php";

// Điều hướng trang
$act = $_GET['act'] ?? 'home';

switch ($act) {
    // Trang chính
    case 'home':
        require_once "home.php";
        break;

    // Quản lý sản phẩm
    case 'products':
        require_once "products/products_list.php";
        break;
    case 'add-product':
        require_once "products/add_product.php";
        break;
    case 'edit_product':
        require_once "products/edit_product.php";
        break;

    // Quản lý người dùng
    case 'users':
        require_once "users/list.php";
        break;
    case 'add-user':
        require_once "users/add_user.php";
        break;
    case 'edit_user':
        require_once "users/edit_user.php";
        break;

    // Quản lý loại sản phẩm
    case 'categories':
        require_once "categories/categories.php";
        break;
    case 'add-category':
        require_once "categories/add_category.php";
        break;
    case 'edit-category':
        require_once "categories/edit_category.php";
        break;

    // Quản lý đơn hàng
    case 'orders':
        require_once "orders/orders.php";
        break;
    case 'order-detail':
        require_once "orders/order_detail.php";
        break;

    default:
        require_once "home.php";
        break;
}

// footer
require_once "footer.php";
ob_end_flush();
?>
