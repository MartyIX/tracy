<?php

/**
 * Test: Tracy\Debugger notices and warnings in production mode.
 *
 * @author     David Grudl
 * @outputMatch
 */

use Tracy\Debugger;


require __DIR__ . '/../bootstrap.php';


Debugger::$productionMode = TRUE;

Debugger::enable();

mktime(); // E_STRICT
mktime(0, 0, 0, 1, 23, 1978, 1); // E_DEPRECATED
$x++; // E_NOTICE
min(1); // E_WARNING
require 'E_COMPILE_WARNING.inc'; // E_COMPILE_WARNING
