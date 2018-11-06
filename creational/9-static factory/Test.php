<?php
namespace DesignPatterns\Creational\StaticFactory;
include_once('StaticFactory.php');

class Test
{
    public function testCanCreateNumberFormatter()
    {
        $object = StaticFactory::factory('number');
        var_dump($object);
    }
}

$test = new Test();
$test->testCanCreateNumberFormatter();
