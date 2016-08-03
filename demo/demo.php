<?php
include('vendor/autoload.php');
\PMVC\Load::plug();
\PMVC\plug('hello_world', ['Hello, PMVC.'])->say();
