[![Latest Stable Version](https://poser.pugx.org/pmvc-plugin/hello_world/v/stable)](https://packagist.org/packages/pmvc-plugin/hello_world) 
[![Latest Unstable Version](https://poser.pugx.org/pmvc-plugin/hello_world/v/unstable)](https://packagist.org/packages/pmvc-plugin/hello_world) 
[![Build Status](https://travis-ci.org/pmvc-plugin/hello_world.svg?branch=master)](https://travis-ci.org/pmvc-plugin/hello_world)
[![License](https://poser.pugx.org/pmvc-plugin/hello_world/license)](https://packagist.org/packages/pmvc-plugin/hello_world)
[![Total Downloads](https://poser.pugx.org/pmvc-plugin/hello_world/downloads)](https://packagist.org/packages/pmvc-plugin/hello_world) 

# PMVC Hello World Plugin 
===============

## Install with Composer
### 1. Download composer
   * mkdir test_folder
   * curl -sS https://getcomposer.org/installer | php

### 2. Edit composer file
   * vim composer.json
```
{
    "require": {
        "pmvc-plugin/hello_world": "dev-master"
    }
}
```
### 3. Use composer to install
   * php composer.phar install
or
   * php composer.phar require pmvc-plugin/hello_world
### 4. Write some demo code
```
<?php
    include_once('vendor/pmvc/pmvc/include_plug.php');
    PMVC\setPlugInFolder('vendor/pmvc-plugin/');
    PMVC\plug('hello_world')->say('hello, World!');
?>
```
### 5. Run the demo
   * php demo.php

### Check the whole demo code
   * https://github.com/pmvc-plugin/hello_world/tree/master/demo

