<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/showRegion' => [[['_route' => 'showAllRegion', '_controller' => 'App\\Controller\\AdminController::showRegion'], null, null, null, false, false, null]],
        '/showBank' => [[['_route' => 'showAllBank', '_controller' => 'App\\Controller\\AdminController::showBank'], null, null, null, false, false, null]],
        '/showAgence' => [[['_route' => 'showAllAgence', '_controller' => 'App\\Controller\\AdminController::showagence'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\BankController::test'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/add(?'
                    .'|Region/([^/]++)(*:64)'
                    .'|Bank/([^/]++)(*:84)'
                    .'|Agence/([^/]++)(*:106)'
                .')'
                .'|/show(?'
                    .'|RegionByID/([^/]++)(*:142)'
                    .'|BankByID/([^/]++)(*:167)'
                    .'|AgenceByID/([^/]++)(*:194)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'addRegion', '_controller' => 'App\\Controller\\AdminController::addRegion'], ['data'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'addBank', '_controller' => 'App\\Controller\\AdminController::addBank'], ['data'], null, null, false, true, null]],
        106 => [[['_route' => 'addAgence', '_controller' => 'App\\Controller\\AdminController::addAgence'], ['data'], null, null, false, true, null]],
        142 => [[['_route' => 'showRegionByID', '_controller' => 'App\\Controller\\AdminController::showRegionByID'], ['id'], null, null, false, true, null]],
        167 => [[['_route' => 'showBankByID', '_controller' => 'App\\Controller\\AdminController::showBankByID'], ['id'], null, null, false, true, null]],
        194 => [
            [['_route' => 'showAgenceByID', '_controller' => 'App\\Controller\\AdminController::showAgenceByID'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
