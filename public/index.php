<?php

include __DIR__ . '/../vendor/autoload.php';

$parser = new \App\Parser();
$statement = $parser->parse(__DIR__. '/../resources/sample.txt');

var_dump($statement, $statement->isValid());
