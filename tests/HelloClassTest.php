<?php

use PHPUnit\Framework\TestCase;
use SimplePackageTemplate\HelloClass;

class HelloClassTest extends TestCase
{
    public function testSayHello()
    {
        $this->expectOutputString('Hello!');
        $class = new HelloClass;
        $class->sayHello();
    }
}
