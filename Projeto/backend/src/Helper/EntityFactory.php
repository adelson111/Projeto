<?php


namespace App\Helper;


interface EntityFactory
{   
    public function create(string $json);
}