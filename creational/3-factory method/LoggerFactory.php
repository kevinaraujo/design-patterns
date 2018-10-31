<?php
namespace DesignPatterns\Creational\FactoryMethod;

include_once('Logger.php');

interface LoggerFactory
{
    public function createLogger(): Logger;
}