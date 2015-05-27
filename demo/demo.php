<?php
include('vendor/autoload.php');
PMVC\Load::plug();
PMVC\plug('hello-world')->say('hello, World!');
