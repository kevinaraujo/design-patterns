<?php
namespace DesignPatterns\Creational\SimpleFactory;

include_once('Bicycle.php');

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }

}