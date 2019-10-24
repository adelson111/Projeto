<?php


namespace App\Helper;


use App\Entity\Relevancia;

class RelevanciaFactory implements EntityFactory
{

    public function create(string $json):Relevancia
    {
       $content = json_decode($json);
       $relevancia = new Relevancia();
       $relevancia -> setRelevancia($content->relevancia);
       return $relevancia;


    }
}