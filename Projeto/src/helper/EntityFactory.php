<?php


namespace App\helper;


interface EntityFactory
{   
    public function create(string $json);
}