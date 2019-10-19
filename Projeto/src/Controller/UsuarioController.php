<?php

namespace App\Controller;

use App\Helper\HandleRequest;
use App\Helper\UsuarioFactory;
use App\Repository\UsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController extends AbstractController
{
    public function __construct(
        UsuarioRepository $usuarioRepository,
        EntityManagerInterface $entityManager,
        UsuarioFactory $usuarioFactory,
        HandleRequest $handleRequest)
    {
        parent::__construct($usuarioRepository, $entityManager, $usuarioFactory, $handleRequest);
    }
}
