<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use PhpRush\Demo\HelloWorld;

class HelloWorldTest extends TestCase 
{
	public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testDump()
    {
    	$hello = new HelloWorld();
    	$this->assertEquals($hello->dump(), "Hello World");
    }
}