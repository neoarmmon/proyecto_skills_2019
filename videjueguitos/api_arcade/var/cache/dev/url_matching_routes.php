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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/genero' => [[['_route' => 'app_genero_index', '_controller' => 'App\\Controller\\GeneroController::index'], null, ['GET' => 0], null, true, false, null]],
        '/genero/new' => [[['_route' => 'app_genero_new', '_controller' => 'App\\Controller\\GeneroController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/juego' => [[['_route' => 'app_juego_index', '_controller' => 'App\\Controller\\JuegoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/juego/new' => [[['_route' => 'app_juego_new', '_controller' => 'App\\Controller\\JuegoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/roles/usuario' => [[['_route' => 'app_roles_usuario_index', '_controller' => 'App\\Controller\\RolesUsuarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/roles/usuario/new' => [[['_route' => 'app_roles_usuario_new', '_controller' => 'App\\Controller\\RolesUsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/usuario' => [[['_route' => 'app_usuario_index', '_controller' => 'App\\Controller\\UsuarioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usuario/new' => [[['_route' => 'app_usuario_new', '_controller' => 'App\\Controller\\UsuarioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/genero/([^/]++)(?'
                    .'|(*:221)'
                    .'|/edit(*:234)'
                    .'|(*:242)'
                .')'
                .'|/juego/([^/]++)(?'
                    .'|(*:269)'
                    .'|/edit(*:282)'
                    .'|(*:290)'
                .')'
                .'|/roles/usuario/([^/]++)(?'
                    .'|(*:325)'
                    .'|/edit(*:338)'
                    .'|(*:346)'
                .')'
                .'|/usuario/([^/]++)(?'
                    .'|(*:375)'
                    .'|/edit(*:388)'
                    .'|(*:396)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'app_genero_show', '_controller' => 'App\\Controller\\GeneroController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_genero_edit', '_controller' => 'App\\Controller\\GeneroController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_genero_delete', '_controller' => 'App\\Controller\\GeneroController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_juego_show', '_controller' => 'App\\Controller\\JuegoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_juego_edit', '_controller' => 'App\\Controller\\JuegoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        290 => [[['_route' => 'app_juego_delete', '_controller' => 'App\\Controller\\JuegoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => 'app_roles_usuario_show', '_controller' => 'App\\Controller\\RolesUsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_roles_usuario_edit', '_controller' => 'App\\Controller\\RolesUsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        346 => [[['_route' => 'app_roles_usuario_delete', '_controller' => 'App\\Controller\\RolesUsuarioController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_usuario_show', '_controller' => 'App\\Controller\\UsuarioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'app_usuario_edit', '_controller' => 'App\\Controller\\UsuarioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [
            [['_route' => 'app_usuario_delete', '_controller' => 'App\\Controller\\UsuarioController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
