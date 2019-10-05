<?php


namespace App\Controller;


use App\Helper\AlunoFactory;
use App\Repository\AlunoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ControllerAluno extends GenericController
{
    public function __construct(
        AlunoRepository $objectRepository,
        EntityManagerInterface $entityManager,
        AlunoFactory $entityFactory)
    {
        parent::__construct($objectRepository, $entityManager, $entityFactory);
    }

    public function buscarTodos(){
        $listaAluno = $this->objectRepository->findAll();
        return new JsonResponse($listaAluno);
    }


    public function updateEntity($entity, $entityUpdate)
    {
        $entity->setNome($entityUpdate->setNome())
                ->setCurso($entityUpdate->setCurso());

    }
}