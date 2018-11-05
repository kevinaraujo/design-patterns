<?php
namespace DesignPatterns\Creational\SimpleFactory;

class Bicycle
{
    private $destination;

    public function driveTo(string $destination)
    {
        $this->destination = $destination;
    }
}