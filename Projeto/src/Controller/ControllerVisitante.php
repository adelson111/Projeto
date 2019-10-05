<?php


namespace App\Controller;


use App\Helper\VisitanteFactory;
use App\Repository\VisitanteRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
class ControllerVisitante extends GenericController
{

    public function __construct(VisitanteRepository $objectRepository,
                                EntityManagerInterface $entityManager,
                                VisitanteFactory $entityFactory)
    {
        parent::__construct($objectRepository, $entityManager, $entityFactory);
    }
    public function buscarTodos(){
        $listaProjeto = $this->objectRepository->findAll();
        return new JsonResponse($listaProjeto);
    }

    public function updateEntity($entity, $entityUpdate)
    {
        // TODO: Implement updateEntity() method.
    }
}