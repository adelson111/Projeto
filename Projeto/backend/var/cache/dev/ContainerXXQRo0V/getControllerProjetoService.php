<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ControllerProjeto' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\GenericController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\ControllerProjeto.php';
include_once $this->targetDirs[3].'\\src\\Helper\\EntityFactory.php';
include_once $this->targetDirs[3].'\\src\\Helper\\ProjetoFactory.php';
include_once $this->targetDirs[3].'\\src\\Helper\\HandleRequest.php';

$this->services['App\\Controller\\ControllerProjeto'] = $instance = new \App\Controller\ControllerProjeto(($this->privates['App\\Repository\\ProjetoRepository'] ?? $this->load('getProjetoRepositoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), new \App\Helper\ProjetoFactory(($this->privates['App\\Repository\\ProfessorRepository'] ?? $this->load('getProfessorRepositoryService.php')), ($this->privates['App\\Repository\\AlunoRepository'] ?? $this->load('getAlunoRepositoryService.php'))), ($this->privates['App\\Helper\\HandleRequest'] ?? ($this->privates['App\\Helper\\HandleRequest'] = new \App\Helper\HandleRequest())));

$instance->setContainer(($this->privates['.service_locator.CDOTD6.'] ?? $this->load('get_ServiceLocator_CDOTD6_Service.php'))->withContext('App\\Controller\\ControllerProjeto', $this));

return $instance;