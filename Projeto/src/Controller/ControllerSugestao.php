<?php


namespace App\Controller;


use App\Helper\HandleRequest;
use App\Helper\SugestaoFactory;
use App\Repository\SugestaoRepository;
use Doctrine\ORM\EntityManagerInterface;

class ControllerSugestao extends  GenericController
{
    public function __construct(
        SugestaoRepository $sugestaoRepository,
        EntityManagerInterface $entityManager,
        SugestaoFactory $sugestaoFactory,
        HandleRequest $handleRequest
)
    {
        parent::__construct($sugestaoRepository, $entityManager, $sugestaoFactory, $handleRequest);
    }


    public function updateEntity($entity, $entityUpdate)
    {
        // TODO: Implement updateEntity() method.
    }
}