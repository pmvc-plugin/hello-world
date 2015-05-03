<?php
include_once('vendor/pmvc/pmvc/include_plug.php');
PMVC\setPlugInFolder('vendor/pmvc-plugin/');
var_dump(PMVC\plug('hello-world'));
PMVC\plug('hello-world')->say('hello, World!');
