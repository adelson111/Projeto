<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\ControllerLoginController::test'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\ControllerLoginController::index'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'send', '_controller' => 'App\\Controller\\ControllerVisitante::sendEmail'], null, null, null, false, false, null]],
        '/alunos' => [
            [['_route' => 'create_aluno', '_controller' => 'App\\Controller\\ControllerAluno::createAluno'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'alunos', '_controller' => 'App\\Controller\\ControllerAluno::search'], null, ['GET' => 0], null, false, false, null],
        ],
        '/professor' => [
            [['_route' => 'create_professor', '_controller' => 'App\\Controller\\ControllerProfessor::createProfessor'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'professor', '_controller' => 'App\\Controller\\ControllerProfessor::search'], null, ['GET' => 0], null, false, false, null],
        ],
        '/projeto' => [
            [['_route' => 'projeto', '_controller' => 'App\\Controller\\ControllerProjeto::search'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/visitantes' => [
            [['_route' => 'create_visitante', '_controller' => 'App\\Controller\\ControllerVisitante::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'lista_visitantes', '_controller' => 'App\\Controller\\ControllerVisitante::search'], null, ['GET' => 0], null, false, false, null],
        ],
        '/sugestao' => [
            [['_route' => 'adicionar_sugestao', '_controller' => 'App\\Controller\\ControllerSugestao::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'detalhe_sugestao', '_controller' => 'App\\Controller\\ControllerSugestao::search'], null, ['GET' => 0], null, false, false, null],
        ],
        '/visitante' => [[['_route' => 'create_user', '_controller' => 'App\\Controller\\ControllerVisitante::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/pro(?'
                    .'|fessor/([^/]++)(*:29)'
                    .'|jeto(?'
                        .'|/(?'
                            .'|vincular/([^/]++)(*:64)'
                            .'|desvincular/([^/]++)/([^/]++)(*:100)'
                            .'|([^/]++)(?'
                                .'|(*:119)'
                            .')'
                        .')'
                        .'|Filtro/([^/]++)(*:144)'
                    .')'
                .')'
                .'|/visitante/([^/]++)(*:173)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'professor_update', '_controller' => 'App\\Controller\\ControllerProfessor::updateProfessor'], ['id'], ['PUT' => 0], null, false, true, null]],
        64 => [[['_route' => 'vincularAlunoProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::vincularAlunoEntity'], ['id'], ['PUT' => 0], null, false, true, null]],
        100 => [[['_route' => 'desvincularAlunoProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::desvincularAluno'], ['id_projeto', 'id_aluno'], ['PUT' => 0], null, false, true, null]],
        119 => [
            [['_route' => 'detalheProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::detalheProjeto'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'removeProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::remove'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        144 => [[['_route' => 'filtarProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::pesquisarProjeto'], ['texto'], ['GET' => 0], null, false, true, null]],
        173 => [
            [['_route' => 'remove_visitante', '_controller' => 'App\\Controller\\ControllerVisitante::remove'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
