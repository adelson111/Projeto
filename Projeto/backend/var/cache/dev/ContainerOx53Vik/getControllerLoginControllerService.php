<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ControllerLoginController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/ControllerLoginController.php';

$this->services['App\\Controller\\ControllerLoginController'] = $instance = new \App\Controller\ControllerLoginController(($this->privates['App\\Repository\\UsuarioRepository'] ?? $this->load('getUsuarioRepositoryService.php')), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')));

$instance->setContainer(($this->privates['.service_locator.CDOTD6.'] ?? $this->load('get_ServiceLocator_CDOTD6_Service.php'))->withContext('App\\Controller\\ControllerLoginController', $this));

return $instance;
