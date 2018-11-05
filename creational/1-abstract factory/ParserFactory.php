<?php
namespace DesignPatterns\Creational\AbstractFactory;

include_once('CsvParser.php');
include_once('JsonParser.php');

use DesignPatterns\Creational\AbstractFactory\CsvParser;
use DesignPatterns\Creational\AbstractFactory\JsonParser;

class ParserFactory
{
	public function createCsvParser(bool $skipHeaderLine): CsvParser
	{
		return new CsvParser($skipHeaderLine);
	}

	public function createJsonParser(): JsonParser
	{
		return new JsonParser();
	}
}