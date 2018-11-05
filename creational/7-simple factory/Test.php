<?php
namespace DesignPatterns\Creational\SimpleFactory;

include_once('SimpleFactory.php');

class Test
{
    public function testCanCreateBicycle()
    {
         $bicycle = (new SimpleFactory())->createBicycle();
         $bicycle->driveTo('Paris');
         var_dump($bicycle);
    }
}

$test = new Test();
$test->testCanCreateBicycle();

