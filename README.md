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

### 2. Install Use composer.json or use command-line directly
#### 2.1 Install Use composer.json
   * vim composer.json
```
{
    "require": {
        "pmvc-plugin/hello_world": "dev-master"
    }
}
```
   * php composer.phar install

#### 2.2 Or use composer command-line
   * php composer.phar require pmvc-plugin/hello_world

### 3. Write some demo code
```
<?php
    include_once('vendor/pmvc/pmvc/include_plug.php');
    PMVC\setPlugInFolder('vendor/pmvc-plugin/');
    PMVC\plug('hello_world')->say('hello, World!');
?>
```
### 4. Run the demo
   * php demo.php

### 5. Check the whole demo code
   * https://github.com/pmvc-plugin/hello_world/tree/master/demo

