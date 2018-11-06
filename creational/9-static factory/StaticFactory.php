<?php
namespace DesignPatterns\Creational\StaticFactory;

include_once('FormatterInterface.php');
include_once('FormatNumber.php');
include_once('FormatString.php');

class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format given');
    }
}