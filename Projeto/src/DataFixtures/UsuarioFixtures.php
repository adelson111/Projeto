<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $usuario = new Usuario();
        $usuario->setEmail('admin@gmail.com')
            ->setPassword('$argon2id$v=19$m=65536,t=4,p=1$9vmvYdvnES15PpuVNg2c/w$Hy9XuxjPBPweRgwF4ux5gRsLtEofPlUs3PKOnzsyRoI');
        $manager->persist($usuario);
        $manager->flush();
    }
}
