<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account/mamagement' => [[['_route' => 'app_account_mamagement', '_controller' => 'App\\Controller\\AccountMamagementController::indexAction'], null, null, null, false, false, null]],
        '/addaccountadmin' => [[['_route' => 'addaccountadmin', '_controller' => 'App\\Controller\\AccountMamagementController::registerAction'], null, null, null, false, false, null]],
        '/brand/management' => [[['_route' => 'app_brand_management', '_controller' => 'App\\Controller\\BrandManagementController::indexAction'], null, null, null, false, false, null]],
        '/addbrandmanage' => [[['_route' => 'addbrandmanage', '_controller' => 'App\\Controller\\BrandManagementController::addBrandManageAction'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::indexAction'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\CartController::orderAction'], null, null, null, false, false, null]],
        '/compare/product' => [[['_route' => 'app_compare_product', '_controller' => 'App\\Controller\\CompareProductController::compareAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_page_index', '_controller' => 'App\\Controller\\HomeController::indexActions'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomeController::indexAction'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\HomeController::searchAction'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::profileAction'], null, null, null, false, false, null]],
        '/order/history' => [[['_route' => 'app_order_history', '_controller' => 'App\\Controller\\OrderHistoryController::indexAction'], null, null, null, false, false, null]],
        '/order/management' => [[['_route' => 'app_order_management', '_controller' => 'App\\Controller\\OrderManagementController::indexAction'], null, null, null, false, false, null]],
        '/promanage' => [[['_route' => 'app_pro_manage', '_controller' => 'App\\Controller\\ProManageController::indexAction'], null, null, null, false, false, null]],
        '/addpromanage' => [[['_route' => 'addpromanage', '_controller' => 'App\\Controller\\ProManageController::addProManageAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::registerAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/shopmanage' => [[['_route' => 'app_shopmanage', '_controller' => 'App\\Controller\\ShopmanageController::indexAction'], null, null, null, false, false, null]],
        '/addshopmanage' => [[['_route' => 'add_shopmanage', '_controller' => 'App\\Controller\\ShopmanageController::addShopAction'], null, null, null, false, false, null]],
        '/statistics' => [[['_route' => 'statistics', '_controller' => 'App\\Controller\\ShopmanageController::statisticsAction'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\ShopmanageController::testAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/update(?'
                    .'|brandmanage/([^/]++)(*:37)'
                    .'|cart/([^/]++)(*:57)'
                    .'|order/([^/]++)(*:78)'
                    .'|promanage/([^/]++)(*:103)'
                .')'
                .'|/addcart/([^/]++)(*:129)'
                .'|/deletecart/([^/]++)(*:157)'
                .'|/homepage/([^/]++)(*:183)'
                .'|/orderdetail/([^/]++)(*:212)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:248)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'updatebrandmanage', '_controller' => 'App\\Controller\\BrandManagementController::updateBrandManageAction'], ['id'], null, null, false, true, null]],
        57 => [[['_route' => 'updatecart', '_controller' => 'App\\Controller\\CartController::updateCartAction'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'updateorder', '_controller' => 'App\\Controller\\OrderManagementController::updateOrderAction'], ['id'], null, null, false, true, null]],
        103 => [[['_route' => 'updatepromanage', '_controller' => 'App\\Controller\\ProManageController::updateProManageAction'], ['id'], null, null, false, true, null]],
        129 => [[['_route' => 'addcart', '_controller' => 'App\\Controller\\CartController::addCartAction'], ['id'], null, null, false, true, null]],
        157 => [[['_route' => 'deletecart', '_controller' => 'App\\Controller\\CartController::deleteCartAction'], ['id'], null, null, false, true, null]],
        183 => [[['_route' => 'productDetail', '_controller' => 'App\\Controller\\HomeController::productDetailAction'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'orderdetail', '_controller' => 'App\\Controller\\OrderManagementController::orderDetailAction'], ['id'], null, null, false, true, null]],
        248 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
