<?php
namespace DesignPatterns\Structural\Adapter;

include_once('BookInterface.php');

class Book implements BookInterface
{
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}