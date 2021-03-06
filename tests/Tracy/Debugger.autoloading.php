<?php

/**
 * Test: Tracy\Debugger autoloading.
 *
 * @author     David Grudl
 * @outputMatch %A%Strict Standards: Declaration of B::test() should be compatible with A::test() in %A%
 */

use Tracy\Debugger;


require __DIR__ . '/../bootstrap.php';


Debugger::$productionMode = FALSE;
header('Content-Type: text/plain');

Debugger::enable();


// in this case autoloading is not triggered
include 'E_STRICT.inc';
