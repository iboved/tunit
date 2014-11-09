<?php

namespace Iboved\Test;

use PHPUnit_Framework_TestCase;
use Iboved\MyClass;

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testPower()
    {
        $my = new MyClass();
        $this->assertEquals(8, $my->power(2, 3));
    }
}
