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
        '/validationToken' => [[['_route' => 'validatioToken', '_controller' => 'App\\Controller\\ControllerLoginController::validarToken'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'send', '_controller' => 'App\\Controller\\ControllerVisitante::sendEmail'], null, null, null, false, false, null]],
        '/alunos' => [
            [['_route' => 'create_aluno', '_controller' => 'App\\Controller\\ControllerAluno::createAluno'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'list_alunos', '_controller' => 'App\\Controller\\ControllerAluno::search'], null, ['GET' => 0], null, false, false, null],
        ],
        '/professor' => [
            [['_route' => 'create_professor', '_controller' => 'App\\Controller\\ControllerProfessor::createProfessor'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'list_professor', '_controller' => 'App\\Controller\\ControllerProfessor::search'], null, ['GET' => 0], null, false, false, null],
        ],
        '/projeto' => [
            [['_route' => 'create_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'list_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::search'], null, ['GET' => 0], null, false, false, null],
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
                .'|/alunos/([^/]++)(*:23)'
                .'|/pro(?'
                    .'|fessor/([^/]++)(*:52)'
                    .'|jeto(?'
                        .'|/(?'
                            .'|([^/]++)(*:78)'
                            .'|vincular/([^/]++)(*:102)'
                            .'|desvincular/([^/]++)(*:130)'
                            .'|([^/]++)(?'
                                .'|(*:149)'
                            .')'
                        .')'
                        .'|Tipo/([^/]++)(*:172)'
                        .'|Filtro/([^/]++)(*:195)'
                    .')'
                .')'
                .'|/visitante/([^/]++)(*:224)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'update_aluno', '_controller' => 'App\\Controller\\ControllerAluno::updateAluno'], ['id'], ['PUT' => 0], null, false, true, null]],
        52 => [[['_route' => 'update_professor', '_controller' => 'App\\Controller\\ControllerProfessor::updateProfessor'], ['id'], ['PUT' => 0], null, false, true, null]],
        78 => [[['_route' => 'update_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::updateProjeto'], ['projetoId'], ['PUT' => 0], null, false, true, null]],
        102 => [[['_route' => 'vincularAlunoProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::vincularAlunoEntity'], ['id'], ['PUT' => 0], null, false, true, null]],
        130 => [[['_route' => 'desvincularAlunoProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::desvincularAluno'], ['id_projeto'], ['PUT' => 0], null, false, true, null]],
        149 => [
            [['_route' => 'detail_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::detalheProjeto'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'removeProjeto', '_controller' => 'App\\Controller\\ControllerProjeto::remove'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        172 => [[['_route' => 'type_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::pesquisarTipo'], ['texto'], ['GET' => 0], null, false, true, null]],
        195 => [[['_route' => 'filter_projeto', '_controller' => 'App\\Controller\\ControllerProjeto::pesquisarProjeto'], ['texto'], ['GET' => 0], null, false, true, null]],
        224 => [
            [['_route' => 'remove_visitante', '_controller' => 'App\\Controller\\ControllerVisitante::remove'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
