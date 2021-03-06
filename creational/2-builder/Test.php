<?php

namespace DesignPatterns\Creational\Builder;

require_once('CarBuilder.php');
require_once('Director.php');

class Test
{
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        var_dump($newVehicle);
    }
}


$test = new Test();
$test->testCanBuildCar();
