<?php
	//mysqli_connect("db", "root", "123") or die(mysqli_error());
	//echo "Connected to MySql";
require_once('Foo.php');
require_once('Client.php');

use App\Kevin\Foo;

$foo = new Foo();
die($foo->name);

?>