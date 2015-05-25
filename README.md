[![Latest Stable Version](https://poser.pugx.org/pmvc-plugin/hello-world/v/stable)](https://packagist.org/packages/pmvc-plugin/hello-world) 
[![Total Downloads](https://poser.pugx.org/pmvc-plugin/hello-world/downloads)](https://packagist.org/packages/pmvc-plugin/hello-world) 
[![Latest Unstable Version](https://poser.pugx.org/pmvc-plugin/hello-world/v/unstable)](https://packagist.org/packages/pmvc-plugin/hello-world) 
[![License](https://poser.pugx.org/pmvc-plugin/hello-world/license)](https://packagist.org/packages/pmvc-plugin/hello-world)

# PMVC Hello World Plugin 
===============

## Install with Composer
### download composer
   * mkdir test_folder
   * curl -sS https://getcomposer.org/installer | php

### edit composer file
   * vim composer.json
```
{
    "require": {
        "pmvc-plugin/hello-world": "dev-master"
    }
}
```
### Use composer to install
php composer.phar install
### write some demo code
```
<?php
    include_once('vendor/pmvc/pmvc/include_plug.php');
    PMVC\setPlugInFolder('vendor/pmvc-plugin/');
    PMVC\plug('hello-world')->say('hello, World!');
?>
```
### run the demo
   * php demo.php

### Check the whole demo code
   * https://github.com/pmvc-plugin/hello-world/tree/master/demo

