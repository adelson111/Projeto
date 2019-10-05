<?php


namespace App\Controller;



use App\Helper\RelevanciaFactory;
use App\Repository\RelevanciaRepository;
use Doctrine\ORM\EntityManagerInterface;
class ControllerRelevancia extends GenericController
{

    public function __construct(RelevanciaRepository $objectRepository,
                                EntityManagerInterface $entityManager,
                                RelevanciaFactory $entityFactory)
    {
        parent::__construct($objectRepository, $entityManager, $entityFactory);
    }
    public function updateEntity($entity, $entityUpdate)
    {
        // TODO: Implement updateEntity() method.
    }
}