<?php

class MyAppTest extends  PHPUnit_Framework_TestCase
{


    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }

    public function testString()
    {
        $x= "";
        $this->assertEquals($x);
    }
}