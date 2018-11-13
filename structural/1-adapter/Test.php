<?php
namespace DesignPatterns\Structural\Adapter;

include_once('Book.php');
include_once('EBookAdapter.php');
include_once('Kindle.php');

class Test
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        var_dump($book);die;
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        var_dump($book->getPage());
    }
}

$test = new Test();
$test->testCanTurnPageOnKindleLikeInANormalBook();