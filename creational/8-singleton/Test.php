<?php
namespace DesignPatterns\Creational\Singleton;
include_once('Singleton.php');

class Test
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        echo spl_object_hash($firstCall).'<br>';
        var_dump($firstCall);

        echo spl_object_hash($secondCall).'<br>';
        var_dump($secondCall);
    }
}

$test = new Test();
$test->testUniqueness();
