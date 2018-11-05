<?php
namespace DesignPatterns\Creational\Prototype;

include_once('BarBookProtoType.php');
include_once('FooBookProtoType.php');


class Test
{
    public function run()
    {
        $fooProtoType = new FooBookProtoType();
        $barProtoType = new BarBookProtoType();

        for ($i = 0; $i < 10; $i++)
        {
            $book = clone $fooProtoType;
            $book->setTitle('Foo Book No ' . $i);
           echo spl_object_hash($book).'<br>';
            var_dump($book);
        }
    }
}


$test = new Test();
$test->run();