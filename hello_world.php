<?php
namespace PMVC\PlugIn\hello_world;

// \PMVC\l(__DIR__.'/xxx.php');

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\hello_world';

class hello_world extends \PMVC\PlugIn
{
    public function init()
    {
        echo "I'm init\n";
    }

    public function say($s)
    {
        echo $s."\n";
    }
}
