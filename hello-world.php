<?php
namespace PMVC\PlugIn\HelloWorld;

// \PMVC\l(__DIR__.'/xxx.php');

${_INIT_CONFIG}[_CLASS] = 'PMVC\PlugIn\HelloWorld\HelloWorld';

class HelloWorld extends \PMVC\PlugIn
{
    function init(){
        echo "I'm init\n";
    }

    function say($s){
        echo $s."\n";
    }
}
?>
