<?php


namespace App\Controller;


use App\Helper\ProjetoFactory;
use App\Helper\HandleRequest;
use App\Repository\ProjetoRepository;
use Doctrine\ORM\EntityManagerInterface;

class ControllerProjeto extends GenericController
{
    public function __construct(
        ProjetoRepository $projetoRepository,
        EntityManagerInterface $entityManager,
        ProjetoFactory $projetoFactory,
        HandleRequest $handleRequest)
    {
        parent::__construct($projetoRepository, $entityManager, $projetoFactory, $handleRequest);
    }

    public function updateEntity($entity, $entityUpdate)
    {
        // TODO: Implement updateEntity() method.
    }
}