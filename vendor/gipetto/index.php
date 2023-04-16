<?php

require __DIR__ . '/../autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$output = $bessie->say();
echo $bessie;


