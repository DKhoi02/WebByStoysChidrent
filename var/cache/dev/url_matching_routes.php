<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/account/mamagement' => [[['_route' => 'app_account_mamagement', '_controller' => 'App\\Controller\\AccountMamagementController::indexAction'], null, null, null, false, false, null]],
        '/admin/addaccountadmin' => [[['_route' => 'addaccountadmin', '_controller' => 'App\\Controller\\AccountMamagementController::registerAction'], null, null, null, false, false, null]],
        '/admin/brand/management' => [[['_route' => 'app_brand_management', '_controller' => 'App\\Controller\\BrandManagementController::indexAction'], null, null, null, false, false, null]],
        '/admin/addbrandmanage' => [[['_route' => 'addbrandmanage', '_controller' => 'App\\Controller\\BrandManagementController::addBrandManageAction'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::indexAction'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\CartController::orderAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_page_index', '_controller' => 'App\\Controller\\HomeController::indexActions'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomeController::indexAction'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\HomeController::searchAction'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\HomeController::profileAction'], null, null, null, false, false, null]],
        '/order/history' => [[['_route' => 'app_order_history', '_controller' => 'App\\Controller\\OrderHistoryController::indexAction'], null, null, null, false, false, null]],
        '/admin/order/management' => [[['_route' => 'app_order_management', '_controller' => 'App\\Controller\\OrderManagementController::indexAction'], null, null, null, false, false, null]],
        '/admin/promanage' => [[['_route' => 'app_pro_manage', '_controller' => 'App\\Controller\\ProManageController::indexAction'], null, null, null, false, false, null]],
        '/admin/addpromanage' => [[['_route' => 'addpromanage', '_controller' => 'App\\Controller\\ProManageController::addProManageAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::registerAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/shopmanage' => [[['_route' => 'app_shopmanage', '_controller' => 'App\\Controller\\ShopmanageController::indexAction'], null, null, null, false, false, null]],
        '/admin/addshopmanage' => [[['_route' => 'add_shopmanage', '_controller' => 'App\\Controller\\ShopmanageController::addShopAction'], null, null, null, false, false, null]],
        '/admin/statistics' => [[['_route' => 'statistics', '_controller' => 'App\\Controller\\ShopmanageController::statisticsAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ad(?'
                    .'|min/(?'
                        .'|update(?'
                            .'|brandmanage/([^/]++)(*:49)'
                            .'|order/([^/]++)(*:70)'
                            .'|promanage/([^/]++)(*:95)'
                            .'|shop/([^/]++)(*:115)'
                        .')'
                        .'|orderdetail/([^/]++)(*:144)'
                    .')'
                    .'|dcart/([^/]++)(*:167)'
                .')'
                .'|/deletecart/([^/]++)(*:196)'
                .'|/updatecart/([^/]++)(*:224)'
                .'|/homepage/([^/]++)(*:250)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:286)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        49 => [[['_route' => 'updatebrandmanage', '_controller' => 'App\\Controller\\BrandManagementController::updateBrandManageAction'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'updateorder', '_controller' => 'App\\Controller\\OrderManagementController::updateOrderAction'], ['id'], null, null, false, true, null]],
        95 => [[['_route' => 'updatepromanage', '_controller' => 'App\\Controller\\ProManageController::updateProManageAction'], ['id'], null, null, false, true, null]],
        115 => [[['_route' => 'updateshop', '_controller' => 'App\\Controller\\ShopmanageController::indexStatisticsAction'], ['id'], null, null, false, true, null]],
        144 => [[['_route' => 'orderdetail', '_controller' => 'App\\Controller\\OrderManagementController::orderDetailAction'], ['id'], null, null, false, true, null]],
        167 => [[['_route' => 'addcart', '_controller' => 'App\\Controller\\CartController::addCartAction'], ['id'], null, null, false, true, null]],
        196 => [[['_route' => 'deletecart', '_controller' => 'App\\Controller\\CartController::deleteCartAction'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'updatecart', '_controller' => 'App\\Controller\\CartController::updateCartAction'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'productDetail', '_controller' => 'App\\Controller\\HomeController::productDetailAction'], ['id'], null, null, false, true, null]],
        286 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
