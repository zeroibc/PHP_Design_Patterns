<?php

include_once '../vendor/autoload.php';

$test = new \Zero\Test;

$test->addObServer(new \Zero\ob1);
$test->addObServer(new \Zero\ob2);
$test->addObServer(new \Zero\ob1);
$test->addObServer(new \Zero\ob2);

$test->trigger();