<?php
namespace DesignPatterns\Creational\AbstractFactory\Tests;

include_once('ParserFactory.php');
include_once('CsvParser.php');

use DesignPatterns\Creational\AbstractFactory\ParserFactory;
use DesignPatterns\Creational\AbstractFactory\CsvParser;

$input = 'col1';'col2';'col3';".PHP_EOL."'joao';'maria';'marcio';".PHP_EOL."'12';'13';'14;'

$factory = new ParserFactory();
$csvParser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_NO_HEADER);
$result = $csvParser->parse($input);
var_dump($result);