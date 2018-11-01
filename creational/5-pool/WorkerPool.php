<?php
namespace DesignPatterns\Creational\Pool;

use DesignPatterns\Creational\Pool\StringReverseWorker;

include_once('StringReverseWorker.php');

class WorkerPool implements \Countable
{
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    public function get(int $n): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
            echo 'created:'.spl_object_hash($worker).'<br>';
        } else {
            $worker = array_pop($this->freeWorkers);
            echo 'returned worker created already: ' . spl_object_hash($worker).'<br>';
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count()
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}