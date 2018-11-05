<?php
namespace DesignPatterns\Creational\Prototype;

include_once('BookProtoType.php');

class FooBookProtoType extends BookProtoType
{
    protected $category = 'Foo';

    public function __clone()
    {

    }
}