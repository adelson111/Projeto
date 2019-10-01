<?php


namespace App\Controller;


use App\helper\ProfessorFactory;
use App\Repository\ProfessorRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

class ControllerProfessor extends GenericController
{
    public function __construct(ProfessorRepository $objectRepository,
                                EntityManagerInterface $entityManager,
                                ProfessorFactory $entityFactory)
    {
        parent::__construct($objectRepository, $entityManager, $entityFactory);
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