<?php


namespace App\Controller;


use App\Helper\AlunoFactory;
use App\Helper\HandleRequest;
use App\Repository\AlunoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class ControllerAluno extends GenericController
{
    public function __construct(
        AlunoRepository $alunoRepository,
        EntityManagerInterface $entityManager,
        AlunoFactory $alunoFactory,
        HandleRequest $handleRequest)
    {
        parent::__construct($alunoRepository, $entityManager, $alunoFactory, $handleRequest);
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