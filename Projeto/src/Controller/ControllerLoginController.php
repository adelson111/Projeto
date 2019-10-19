<?php

namespace App\Controller;

use App\Repository\UsuarioRepository;
use Firebase\JWT\JWT;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ControllerLoginController extends AbstractController
{
    /**
     * @var UsuarioRepository
     */
    private $usuarioRepository;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $enconder;

    public function __construct(
        UsuarioRepository $usuarioRepository,
        UserPasswordEncoderInterface $encoder
    ){
        $this->usuarioRepository=$usuarioRepository;
        $this->enconder = $encoder;
    }

    /**
     * @Route ("/test", name="test")
     */
    public function test(Request $request){
        $usuarios = $this->usuarioRepository->findAll();
        return new JsonResponse($usuarios);
    }

    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request)
    {
        $login = json_decode($request->getContent());
        if(!isset($login->usuario) || !isset($login->password)){
          return new JsonResponse(['erro'=>'Favor enviar usuário e senha'], Response::HTTP_BAD_REQUEST);
        }
        /**
         * @var User $usuario
         */
        $usuario = $this->usuarioRepository->findOneBy(['email'=>$login->usuario]);
        if(!$this->enconder->isPasswordValid($usuario, $login->password)){
            return new JsonResponse(['erro'=>'Usuário ou senha inválido'], Response::HTTP_UNAUTHORIZED);
        }
        $token = JWT::encode(['email'=>$usuario->getEmail()], 'chave','HS256');
        return new JsonResponse(['acess_token'=>$token]);
    }
}
