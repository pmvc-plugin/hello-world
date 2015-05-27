<?php
namespace PMVC\PlugIn\hello_world;

// \PMVC\l(__DIR__.'/xxx.php');

${_INIT_CONFIG}[_CLASS] = 'PMVC\PlugIn\hello_world\hello_world';

class hello_world extends \PMVC\PlugIn
{
    function init(){
        echo "I'm init\n";
    }

    function say($s){
        echo $s."\n";
    }
}
?>
