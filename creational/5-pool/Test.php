<?php
namespace DesignPatterns\Creational\Pool;

include_once('WorkerPool.php');

class Test
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $workerPool1 = $pool->get(1);
        $workerPool2 = $pool->get(2);
        var_dump(spl_object_hash($workerPool1));
        var_dump(spl_object_hash($workerPool2));
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $workerPool1 = $pool->get(1);
        $pool->dispose($workerPool1);
        $workerPool2 = $pool->get(2);

    }

}

$test = new Test();
//$test->testCanGetNewInstancesWithGet();
$test->testCanGetSameInstanceTwiceWhenDisposingItFirst();