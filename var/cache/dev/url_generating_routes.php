<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_account_mamagement' => [[], ['_controller' => 'App\\Controller\\AccountMamagementController::indexAction'], [], [['text', '/account/mamagement']], [], [], []],
    'addaccountadmin' => [[], ['_controller' => 'App\\Controller\\AccountMamagementController::registerAction'], [], [['text', '/addaccountadmin']], [], [], []],
    'app_brand_management' => [[], ['_controller' => 'App\\Controller\\BrandManagementController::indexAction'], [], [['text', '/brand/management']], [], [], []],
    'addbrandmanage' => [[], ['_controller' => 'App\\Controller\\BrandManagementController::addBrandManageAction'], [], [['text', '/addbrandmanage']], [], [], []],
    'updatebrandmanage' => [['id'], ['_controller' => 'App\\Controller\\BrandManagementController::updateBrandManageAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatebrandmanage']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::indexAction'], [], [['text', '/cart']], [], [], []],
    'addcart' => [['id'], ['_controller' => 'App\\Controller\\CartController::addCartAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/addcart']], [], [], []],
    'deletecart' => [['id'], ['_controller' => 'App\\Controller\\CartController::deleteCartAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deletecart']], [], [], []],
    'updatecart' => [['id'], ['_controller' => 'App\\Controller\\CartController::updateCartAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatecart']], [], [], []],
    'order' => [[], ['_controller' => 'App\\Controller\\CartController::orderAction'], [], [['text', '/order']], [], [], []],
    'app_compare_product' => [[], ['_controller' => 'App\\Controller\\CompareProductController::compareAction'], [], [['text', '/compare/product']], [], [], []],
    'home_page_index' => [[], ['_controller' => 'App\\Controller\\HomeController::indexActions'], [], [['text', '/']], [], [], []],
    'home_page' => [[], ['_controller' => 'App\\Controller\\HomeController::indexAction'], [], [['text', '/homepage']], [], [], []],
    'productDetail' => [['id'], ['_controller' => 'App\\Controller\\HomeController::productDetailAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/homepage']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\HomeController::searchAction'], [], [['text', '/search']], [], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\HomeController::profileAction'], [], [['text', '/profile']], [], [], []],
    'app_order_history' => [[], ['_controller' => 'App\\Controller\\OrderHistoryController::indexAction'], [], [['text', '/order/history']], [], [], []],
    'app_order_management' => [[], ['_controller' => 'App\\Controller\\OrderManagementController::indexAction'], [], [['text', '/order/management']], [], [], []],
    'orderdetail' => [['id'], ['_controller' => 'App\\Controller\\OrderManagementController::orderDetailAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orderdetail']], [], [], []],
    'updateorder' => [['id'], ['_controller' => 'App\\Controller\\OrderManagementController::updateOrderAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updateorder']], [], [], []],
    'app_pro_manage' => [[], ['_controller' => 'App\\Controller\\ProManageController::indexAction'], [], [['text', '/promanage']], [], [], []],
    'addpromanage' => [[], ['_controller' => 'App\\Controller\\ProManageController::addProManageAction'], [], [['text', '/addpromanage']], [], [], []],
    'updatepromanage' => [['id'], ['_controller' => 'App\\Controller\\ProManageController::updateProManageAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/updatepromanage']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegisterController::registerAction'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_shopmanage' => [[], ['_controller' => 'App\\Controller\\ShopmanageController::indexAction'], [], [['text', '/shopmanage']], [], [], []],
    'add_shopmanage' => [[], ['_controller' => 'App\\Controller\\ShopmanageController::addShopAction'], [], [['text', '/addshopmanage']], [], [], []],
    'statistics' => [[], ['_controller' => 'App\\Controller\\ShopmanageController::statisticsAction'], [], [['text', '/statistics']], [], [], []],
    'test' => [[], ['_controller' => 'App\\Controller\\ShopmanageController::testAction'], [], [['text', '/test']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
