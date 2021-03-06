<?php

namespace Iboved\Tests;

use PHPUnit_Framework_TestCase;
use Iboved\MyClass;

class MyClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerPower
     */
    public function testPower($a, $b, $c)
    {
        $my = new MyClass();
        $this->assertEquals($c, $my->power($a, $b));
    }

    public function providerPower ()
    {
        return array (
            array (2, 2, 4),
            array (2, 3, 8),
            array (3, 5, 243)
        );
    }
}
