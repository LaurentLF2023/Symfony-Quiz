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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/edit/profile' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\EditProfileController::edit'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/mailer' => [[['_route' => 'app_mailer', '_controller' => 'App\\Controller\\MailerController::index'], null, null, null, false, false, null]],
        '/sendOverMonth' => [[['_route' => 'app_overMonth', '_controller' => 'App\\Controller\\MailerController::ConnectedOverMonth'], null, null, null, false, false, null]],
        '/sendLastMonth' => [[['_route' => 'app_lastMonth', '_controller' => 'App\\Controller\\MailerController::ConnectedLastMonth'], null, null, null, false, false, null]],
        '/SendLightPlayers' => [[['_route' => 'app_sendLightPlayers', '_controller' => 'App\\Controller\\MailerController::countLightPlayers'], null, null, null, false, false, null]],
        '/SendMidPlayers' => [[['_route' => 'app_sendMidPlayers', '_controller' => 'App\\Controller\\MailerController::countMidPlayers'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/quizz/new' => [[['_route' => 'app_quizz_new', '_controller' => 'App\\Controller\\QuizzController::new'], null, null, null, false, false, null]],
        '/quizz' => [[['_route' => 'index_quizz', '_controller' => 'App\\Controller\\QuizzController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\QuizzController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/categorie/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/qu(?'
                    .'|estion/([^/]++)(?'
                        .'|/edit(*:250)'
                        .'|(*:258)'
                    .')'
                    .'|izz/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:290)'
                            .'|result(*:304)'
                            .'|validate(*:320)'
                        .')'
                        .'|(*:329)'
                    .')'
                .')'
                .'|/reponse/([^/]++)(?'
                    .'|/edit(*:364)'
                    .'|(*:372)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        250 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        290 => [[['_route' => 'app_quizz_edit', '_controller' => 'App\\Controller\\QuizzController::edit'], ['id'], null, null, false, false, null]],
        304 => [[['_route' => 'app_quizz_result', '_controller' => 'App\\Controller\\QuizzController::result'], ['id'], null, null, false, false, null]],
        320 => [[['_route' => 'app_quizz_validate', '_controller' => 'App\\Controller\\QuizzController::validate'], ['id'], ['POST' => 0], null, false, false, null]],
        329 => [
            [['_route' => 'app_quizz_show', '_controller' => 'App\\Controller\\QuizzController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_quizz_delete', '_controller' => 'App\\Controller\\QuizzController::delete'], ['id'], null, null, false, true, null],
        ],
        364 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [
            [['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
