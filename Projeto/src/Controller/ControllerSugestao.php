<?php


namespace App\Controller;


use App\Helper\SugestaoFactory;
use App\Repository\SugestaoRepository;
use Doctrine\ORM\EntityManagerInterface;

class ControllerSugestao extends  GenericController
{
    public function __construct(SugestaoRepository $objectRepository,
                                EntityManagerInterface $entityManager,
                                SugestaoFactory $entityFactory)
    {
        parent::__construct($objectRepository, $entityManager, $entityFactory);
    }


    public function updateEntity($entity, $entityUpdate)
    {
        // TODO: Implement updateEntity() method.
    }
}