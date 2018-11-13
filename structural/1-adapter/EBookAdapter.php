<?php
namespace DesignPatterns\Structural\Adapter;

include_once('BookInterface.php');
include_once('EBookInterface.php');

class EBookAdapter implements BookInterface
{
    protected $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}