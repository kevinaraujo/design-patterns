<?php
namespace DesignPatterns\Creational\Multition;

include_once('Multition.php');

class Test
{
    public function execute()
    {
        $multition = Multition::getInstance('Foo');;
    }

    public static function teste()
    {
        echo 'eu';
    }

    public function __clone()
    {
       echo 'chamou';
    }
}

$test = new Test();
//$test->execute();
$test::teste();
$a = clone $test;