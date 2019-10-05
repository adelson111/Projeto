<?php


namespace App\Controller;


use App\Helper\ProjetoFactory;
use App\Repository\ProjetoRepository;
use Doctrine\ORM\EntityManagerInterface;

class ControllerProjeto extends GenericController
{
    public function __construct(ProjetoRepository $objectRepository, EntityManagerInterface $entityManager, ProjetoFactory $entityFactory)
    {
        parent::__construct($objectRepository, $entityManager, $entityFactory);
    }

    public function updateEntity($entity, $entityUpdate)
    {
        // TODO: Implement updateEntity() method.
    }
}