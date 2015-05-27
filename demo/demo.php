<?php
include('vendor/autoload.php');
PMVC\Load::plug();
PMVC\plug('hello_world')->say('hello, World!');
