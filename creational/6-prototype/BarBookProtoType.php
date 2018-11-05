<?php
namespace DesignPatterns\Creational\Prototype;

include_once('BookProtoType.php');

class BarBookProtoType extends BookProtoType
{
    protected $category = 'Bar';

    public function __clone()
    {

    }
}