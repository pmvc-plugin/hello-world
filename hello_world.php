<?php
namespace PMVC\PlugIn\hello_world;

${_INIT_CONFIG}[_CLASS] = __NAMESPACE__.'\hello_world';

class hello_world extends \PMVC\PlugIn
{
    public function init()
    {
        echo "I'm init\n";
    }

    public function say()
    {
        echo $this[0]."\n";
    }
}
