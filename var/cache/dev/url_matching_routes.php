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
        '/veto/animal' => [[['_route' => 'app_animal_index', '_controller' => 'App\\Controller\\AnimalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veto/animal/new' => [[['_route' => 'app_animal_new', '_controller' => 'App\\Controller\\AnimalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/animal' => [[['_route' => 'app_animal_list', '_controller' => 'App\\Controller\\AnimalController::list'], null, null, null, false, false, null]],
        '/employee/animal/feeding' => [[['_route' => 'app_animal_feeding_index', '_controller' => 'App\\Controller\\AnimalFeedingController::index'], null, null, null, true, false, null]],
        '/employee/animal/feeding/new' => [[['_route' => 'app_animal_feeding_new', '_controller' => 'App\\Controller\\AnimalFeedingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/contact/send' => [[['_route' => 'app_contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, null, null, false, false, null]],
        '/contact/confirmation' => [[['_route' => 'app_contact_confirmation', '_controller' => 'App\\Controller\\ContactController::confirmation'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/habitat' => [[['_route' => 'app_habitat', '_controller' => 'App\\Controller\\DefaultController::habitat'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\DefaultController::service'], null, null, null, false, false, null]],
        '/veto/habitat' => [[['_route' => 'app_habitat_index', '_controller' => 'App\\Controller\\HabitatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veto/habitat/new' => [[['_route' => 'app_habitat_new', '_controller' => 'App\\Controller\\HabitatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/password-reset/request' => [[['_route' => 'app_password_reset_request', '_controller' => 'App\\Controller\\PasswordResetController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/review/new' => [[['_route' => 'app_review_new', '_controller' => 'App\\Controller\\ReviewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employee/reviews' => [[['_route' => 'app_employee_reviews', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/schedule' => [[['_route' => 'app_schedule_index', '_controller' => 'App\\Controller\\ScheduleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/schedule/new' => [[['_route' => 'app_schedule_new', '_controller' => 'App\\Controller\\ScheduleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/employee/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_list', '_controller' => 'App\\Controller\\UserController::list'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veto/veterinary_report' => [[['_route' => 'app_veterinary_report_index', '_controller' => 'App\\Controller\\VeterinaryReportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veto/veterinary_report/new' => [[['_route' => 'app_veterinary_report_new', '_controller' => 'App\\Controller\\VeterinaryReportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/veto/(?'
                    .'|animal/([^/]++)(?'
                        .'|/edit(*:234)'
                        .'|(*:242)'
                    .')'
                    .'|habitat/([^/]++)(?'
                        .'|(*:270)'
                        .'|/edit(*:283)'
                        .'|(*:291)'
                    .')'
                    .'|veterinary_report/([^/]++)(?'
                        .'|(*:329)'
                        .'|/edit(*:342)'
                        .'|(*:350)'
                    .')'
                .')'
                .'|/a(?'
                    .'|nimal/([^/]++)(*:379)'
                    .'|dmin/(?'
                        .'|schedule/([^/]++)(?'
                            .'|/edit(*:420)'
                            .'|(*:428)'
                        .')'
                        .'|user/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:461)'
                                .'|(*:469)'
                            .')'
                            .'|dashboard(*:487)'
                        .')'
                    .')'
                .')'
                .'|/employee/(?'
                    .'|animal/feeding/([^/]++)(?'
                        .'|(*:537)'
                        .'|/edit(*:550)'
                        .'|(*:558)'
                    .')'
                    .'|review/([^/]++)/(?'
                        .'|approve(*:593)'
                        .'|delete(*:607)'
                    .')'
                    .'|service/([^/]++)(?'
                        .'|(*:635)'
                        .'|/edit(*:648)'
                        .'|(*:656)'
                    .')'
                .')'
                .'|/habitat/([^/]++)/animals(*:691)'
                .'|/password\\-reset/reset/([^/]++)(*:730)'
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
        234 => [[['_route' => 'app_animal_edit', '_controller' => 'App\\Controller\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_animal_delete', '_controller' => 'App\\Controller\\AnimalController::delete'], ['id'], ['POST' => 0], null, true, true, null]],
        270 => [[['_route' => 'app_habitat_show', '_controller' => 'App\\Controller\\HabitatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_habitat_edit', '_controller' => 'App\\Controller\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_habitat_delete', '_controller' => 'App\\Controller\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_veterinary_report_show', '_controller' => 'App\\Controller\\VeterinaryReportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_veterinary_report_edit', '_controller' => 'App\\Controller\\VeterinaryReportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'app_veterinary_report_delete', '_controller' => 'App\\Controller\\VeterinaryReportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_animal_show', '_controller' => 'App\\Controller\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_schedule_edit', '_controller' => 'App\\Controller\\ScheduleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        428 => [[['_route' => 'app_schedule_delete', '_controller' => 'App\\Controller\\ScheduleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        461 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        487 => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\UserController::dashboard'], [], ['GET' => 0], null, false, false, null]],
        537 => [[['_route' => 'app_animal_feeding_show', '_controller' => 'App\\Controller\\AnimalFeedingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        550 => [[['_route' => 'app_animal_feeding_edit', '_controller' => 'App\\Controller\\AnimalFeedingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'app_animal_feeding_delete', '_controller' => 'App\\Controller\\AnimalFeedingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        593 => [[['_route' => 'app_review_approve', '_controller' => 'App\\Controller\\ReviewController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        607 => [[['_route' => 'app_review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        635 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        656 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        691 => [[['_route' => 'app_habitat_animals', '_controller' => 'App\\Controller\\DefaultController::getAnimalsByHabitat'], ['id'], ['GET' => 0], null, false, false, null]],
        730 => [
            [['_route' => 'app_password_reset_reset', '_controller' => 'App\\Controller\\PasswordResetController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
