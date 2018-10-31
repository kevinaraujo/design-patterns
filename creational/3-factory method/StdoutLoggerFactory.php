<?php
namespace DesignPatterns\Creational\FactoryMethod;

include_once('LoggerFactory.php');
include_once('StdoutLogger.php');

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}