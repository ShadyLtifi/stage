<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/admin/esprit' => [[['_route' => 'app_admin_esprit_index', '_controller' => 'App\\Controller\\AdminEspritController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/esprit/new' => [[['_route' => 'app_admin_esprit_new', '_controller' => 'App\\Controller\\AdminEspritController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/fac' => [[['_route' => 'app_admin_fac_index', '_controller' => 'App\\Controller\\AdminFacController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/fac/new' => [[['_route' => 'app_admin_fac_new', '_controller' => 'App\\Controller\\AdminFacController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature' => [[['_route' => 'app_candidature_index', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidature/new' => [[['_route' => 'app_candidature_new', '_controller' => 'App\\Controller\\CandidatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard_index', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/etudiant/esprit' => [[['_route' => 'app_etudiant_esprit_index', '_controller' => 'App\\Controller\\EtudiantEspritController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etudiant/esprit/new' => [[['_route' => 'app_etudiant_esprit_new', '_controller' => 'App\\Controller\\EtudiantEspritController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/opportinute' => [[['_route' => 'app_opportinute_index', '_controller' => 'App\\Controller\\OpportinuteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/opportinute/new' => [[['_route' => 'app_opportinute_new', '_controller' => 'App\\Controller\\OpportinuteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loginEs' => [[['_route' => 'app_loginEs', '_controller' => 'App\\Controller\\SecurityEsController::login'], null, null, null, false, false, null]],
        '/loginEtudiant' => [[['_route' => 'app_loginEtudiant', '_controller' => 'App\\Controller\\SecurityEtudiantController::login'], null, null, null, false, false, null]],
        '/loginFac' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityFaculteController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityFaculteController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/candidatures/search' => [[['_route' => 'search_candidatures', '_controller' => 'App\\Controller\\CandidatureController::search'], null, ['GET' => 0], null, false, false, null]],
        '/candidatures' => [[['_route' => 'candidatures', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/candidatures/rechercher' => [[['_route' => 'rechercher_candidatures', '_controller' => 'App\\Controller\\CandidatureController::rechercherCandidatures'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|esprit/([^/]++)(?'
                        .'|(*:35)'
                        .'|/edit(*:47)'
                        .'|(*:54)'
                    .')'
                    .'|fac/([^/]++)(?'
                        .'|(*:77)'
                        .'|/edit(*:89)'
                        .'|(*:96)'
                    .')'
                .')'
                .'|/candidature/(?'
                    .'|([^/]++)(?'
                        .'|(*:132)'
                        .'|/edit(*:145)'
                        .'|(*:153)'
                    .')'
                    .'|Search/candidature/([^/]++)(*:189)'
                .')'
                .'|/dashboard/([^/]++)(*:217)'
                .'|/etudiant/esprit/([^/]++)(?'
                    .'|(*:253)'
                    .'|/edit(*:266)'
                    .'|(*:274)'
                .')'
                .'|/opportinute/([^/]++)(?'
                    .'|(*:307)'
                    .'|/edit(*:320)'
                    .'|(*:328)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:368)'
                    .'|wdt/([^/]++)(*:388)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:434)'
                            .'|router(*:448)'
                            .'|exception(?'
                                .'|(*:468)'
                                .'|\\.css(*:481)'
                            .')'
                        .')'
                        .'|(*:491)'
                    .')'
                .')'
                .'|/([^/]++)/candidature(*:522)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_admin_esprit_show', '_controller' => 'App\\Controller\\AdminEspritController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_admin_esprit_edit', '_controller' => 'App\\Controller\\AdminEspritController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_admin_esprit_delete', '_controller' => 'App\\Controller\\AdminEspritController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [[['_route' => 'app_admin_fac_show', '_controller' => 'App\\Controller\\AdminFacController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_admin_fac_edit', '_controller' => 'App\\Controller\\AdminFacController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'app_admin_fac_delete', '_controller' => 'App\\Controller\\AdminFacController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        132 => [[['_route' => 'app_candidature_show', '_controller' => 'App\\Controller\\CandidatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_candidature_edit', '_controller' => 'App\\Controller\\CandidatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        153 => [[['_route' => 'app_candidature_delete', '_controller' => 'App\\Controller\\CandidatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        189 => [[['_route' => 'app_candidature_modif', '_controller' => 'App\\Controller\\CandidatureController::modif'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        217 => [[['_route' => 'app_dashboard_show', '_controller' => 'App\\Controller\\DashboardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_etudiant_esprit_show', '_controller' => 'App\\Controller\\EtudiantEspritController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_etudiant_esprit_edit', '_controller' => 'App\\Controller\\EtudiantEspritController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'app_etudiant_esprit_delete', '_controller' => 'App\\Controller\\EtudiantEspritController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        307 => [[['_route' => 'app_opportinute_show', '_controller' => 'App\\Controller\\OpportinuteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        320 => [[['_route' => 'app_opportinute_edit', '_controller' => 'App\\Controller\\OpportinuteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'app_opportinute_delete', '_controller' => 'App\\Controller\\OpportinuteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        388 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        434 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        448 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        468 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        481 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        491 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        522 => [
            [['_route' => 'candidature_create', '_controller' => 'App\\Controller\\OpportinuteController::createCandidature'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
