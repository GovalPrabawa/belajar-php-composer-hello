<?php

require_once __DIR__ . "/src/Customer.php";

use Govalprogrammer\Belajar\Customer;

$people = new Customer("Budi");
echo $people->sayHello("Yadnya") . PHP_EOL;
echo $people->sayHello();
