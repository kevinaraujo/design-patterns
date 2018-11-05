<?php
namespace DesignPatterns\Creational\Multition;

final class Multition
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    public static $instances = [];

    private function __construct()
    {
    }

    public static function getInstance(string $instanceName): Multition
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    private function __clone()
    {
        die('ok');
    }

    private function  __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}