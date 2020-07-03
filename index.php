<?php

use BelajarSymfony\Kernel;
use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/vendor/autoload.php';

$kernel = new Kernel();
$response = $kernel->handle(Request::createFromGlobals());
$response->send();
