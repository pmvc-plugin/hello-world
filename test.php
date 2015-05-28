<?php
PMVC\Load::plug();
PMVC\setPlugInFolder('../');
class HelloTest extends PHPUnit_Framework_TestCase
{
    function testHello()
    {
        $willSay = 'hello, World!';
        ob_start();
        PMVC\plug('hello_world')->say($willSay);
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($willSay,$output);
    }
}
