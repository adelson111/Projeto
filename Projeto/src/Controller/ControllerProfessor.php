<?php


namespace App\Controller;


use App\Helper\ProfessorFactory;
use App\Helper\HandleRequest;
use App\Repository\ProfessorRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

class ControllerProfessor extends GenericController
{
    public function __construct(ProfessorRepository $professorRepository,
                                EntityManagerInterface $entityManager,
                                ProfessorFactory $professorFactory,
                                HandleRequest $handleRequest)
    {
        parent::__construct($professorRepository, $entityManager, $professorFactory, $handleRequest);
    }

    public function buscarTodos(){
        $listaProfessor = $this->objectRepository->findAll();
        return new JsonResponse($listaProfessor);
    }
    public function updateEntity($entity, $entityUpdate)
    {
        $entity->setNome($entityUpdate->setNome());
    }
}