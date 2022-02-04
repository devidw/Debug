<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';


use Devidw\Debug\Debug;

Debug::dump([
    'foo' => 'bar',
    'object' => new stdClass(),
    'init' => ini_get_all(),
]);
