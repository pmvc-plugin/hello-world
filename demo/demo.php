<?php
include_once('vendor/pmvc/pmvc/include_plug.php');
PMVC\setPlugInFolder('vendor/pmvc-plugin/');
PMVC\plug('hello-world')->say('hello, World!');
