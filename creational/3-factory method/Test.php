<?php
namespace DesignPatterns\Creational\FactoryMethod;

include_once('StdoutLoggerFactory.php');

class Test
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $logger->log('oi');
        die(sys_get_temp_dir());
    }
}


$test = new Test();
$test->testCanCreateStdoutLogging();