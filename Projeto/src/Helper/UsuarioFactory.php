<?php


namespace App\Helper;


use App\Entity\Usuario;

class UsuarioFactory implements EntityFactory
{
    public function create(string $json):Usuario
    {
        $content = json_decode($json);
        $usuario = new Usuario();
        $usuario->setLogin($content->login)
            ->setTipo($content->tipo)
            ->setPassword($content->password);
        return $usuario;
    }
}