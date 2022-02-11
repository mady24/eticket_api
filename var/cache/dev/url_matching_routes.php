<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/showRegion' => [[['_route' => 'showAllRegion', '_controller' => 'App\\Controller\\AdminController::showRegion'], null, null, null, false, false, null]],
        '/showBank' => [[['_route' => 'showAllBank', '_controller' => 'App\\Controller\\AdminController::showBank'], null, null, null, false, false, null]],
        '/showAgence' => [[['_route' => 'showAllAgence', '_controller' => 'App\\Controller\\AdminController::showagence'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\BankController::test'], null, null, null, false, false, null]],
        '/showFile' => [[['_route' => 'showAllFile', '_controller' => 'App\\Controller\\BankController::showFile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/add(?'
                    .'|Region/([^/]++)(*:190)'
                    .'|Bank/([^/]++)(*:211)'
                    .'|Agence/([^/]++)(*:234)'
                    .'|File/([^/]++)(*:255)'
                    .'|Ticket/([^/]++)(*:278)'
                .')'
                .'|/show(?'
                    .'|RegionByID/([^/]++)(*:314)'
                    .'|BankByID/([^/]++)(*:339)'
                    .'|AgenceByBankRegion/([^/]++)/([^/]++)(*:383)'
                    .'|FileByID/([^/]++)(*:408)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        190 => [[['_route' => 'addRegion', '_controller' => 'App\\Controller\\AdminController::addRegion'], ['data'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'addBank', '_controller' => 'App\\Controller\\AdminController::addBank'], ['data'], null, null, false, true, null]],
        234 => [[['_route' => 'addAgence', '_controller' => 'App\\Controller\\AdminController::addAgence'], ['data'], null, null, false, true, null]],
        255 => [[['_route' => 'addFile', '_controller' => 'App\\Controller\\BankController::addFile'], ['data'], null, null, false, true, null]],
        278 => [[['_route' => 'addTicket', '_controller' => 'App\\Controller\\BankController::addTicket'], ['data'], null, null, false, true, null]],
        314 => [[['_route' => 'showRegionByID', '_controller' => 'App\\Controller\\AdminController::showRegionByID'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'showBankByID', '_controller' => 'App\\Controller\\AdminController::showBankByID'], ['id'], null, null, false, true, null]],
        383 => [[['_route' => 'showAgenceByID', '_controller' => 'App\\Controller\\AdminController::showAgenceByBankRegion'], ['id', 'region'], null, null, false, true, null]],
        408 => [
            [['_route' => 'showFileByID', '_controller' => 'App\\Controller\\BankController::showAgenceByID'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
