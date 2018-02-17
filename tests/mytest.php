<?php

//namespace testPhpUnitTest\Test;

use SankalaniGIT\testPhpUnitTest\myTestClass;

class mytest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = new myTestClass();
        $this->assertTrue($foo->test());


    }
}