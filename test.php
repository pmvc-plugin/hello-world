<?php
PMVC\Load::plug();
PMVC\addPlugInFolders(['../']);
class HelloTest extends PHPUnit_Framework_TestCase
{
    private $_plug = 'hello_world';
    function testPlugin()
    {
        ob_start();
        print_r(PMVC\plug($this->_plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($this->_plug,$output);
    }

    function testHello()
    {
        $willSay = 'hello, World!';
        ob_start();
        PMVC\plug($this->_plug)->say($willSay);
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($willSay,$output);
    }
}
