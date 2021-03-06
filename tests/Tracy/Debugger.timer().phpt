<?php

/**
 * Test: Tracy\Debugger::timer()
 *
 * @author     David Grudl
 */

use Tracy\Debugger;


require __DIR__ . '/../bootstrap.php';


Debugger::timer();

sleep(1);

Debugger::timer('foo');

sleep(1);

Assert::same( 2.0, round(Debugger::timer(), 1) );

Assert::same( 1.0, round(Debugger::timer('foo'), 1) );
