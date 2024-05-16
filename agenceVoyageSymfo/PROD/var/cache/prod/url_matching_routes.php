<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/categories' => [[['_route' => 'api_categorie_index', '_controller' => 'App\\Controller\\Api\\CategorieController::index'], null, null, null, false, false, null]],
        '/api/contacts' => [[['_route' => 'api_contact_index', '_controller' => 'App\\Controller\\Api\\ContactController::index'], null, null, null, false, false, null]],
        '/api/destinations' => [[['_route' => 'api_destination_index', '_controller' => 'App\\Controller\\Api\\DestinationController::index'], null, null, null, false, false, null]],
        '/api/voyages' => [[['_route' => 'api_voyage_index', '_controller' => 'App\\Controller\\Api\\VoyageController::index'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, false, false, null]],
        '/contact/new' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/destinations' => [[['_route' => 'app_destination_index', '_controller' => 'App\\Controller\\DestinationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/destination/new' => [[['_route' => 'app_destination_new', '_controller' => 'App\\Controller\\DestinationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/voyages' => [[['_route' => 'app_voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/new' => [[['_route' => 'app_voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|c(?'
                        .'|ategorie/([^/]++)(*:36)'
                        .'|ontact/([^/]++)(*:58)'
                    .')'
                    .'|destination/([^/]++)(*:86)'
                    .'|voyage/([^/]++)(*:108)'
                .')'
                .'|/contact/([^/]++)(?'
                    .'|(*:137)'
                    .'|/edit(*:150)'
                    .'|(*:158)'
                .')'
                .'|/destination/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/voyage/([^/]++)(?'
                    .'|(*:240)'
                    .'|/edit(*:253)'
                    .'|(*:261)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'api_categorie_show', '_controller' => 'App\\Controller\\Api\\CategorieController::show'], ['nom'], null, null, false, true, null]],
        58 => [[['_route' => 'api_contact_show', '_controller' => 'App\\Controller\\Api\\ContactController::show'], ['nom'], null, null, false, true, null]],
        86 => [[['_route' => 'api_destination_show', '_controller' => 'App\\Controller\\Api\\DestinationController::show'], ['nom'], null, null, false, true, null]],
        108 => [[['_route' => 'api_voyage_show', '_controller' => 'App\\Controller\\Api\\VoyageController::show'], ['id'], null, null, false, true, null]],
        137 => [[['_route' => 'app_contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        150 => [[['_route' => 'app_contact_edit', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        158 => [[['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        191 => [[['_route' => 'app_destination__show', '_controller' => 'App\\Controller\\DestinationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_destination__edit', '_controller' => 'App\\Controller\\DestinationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'app_destination_app_destination_delete', '_controller' => 'App\\Controller\\DestinationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [
            [['_route' => 'app_voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
