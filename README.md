[![Latest Stable Version](https://poser.pugx.org/pmvc-plugin/hello_world/v/stable)](https://packagist.org/packages/pmvc-plugin/hello_world) 
[![Latest Unstable Version](https://poser.pugx.org/pmvc-plugin/hello_world/v/unstable)](https://packagist.org/packages/pmvc-plugin/hello_world) 
[![Build Status](https://travis-ci.org/pmvc-plugin/hello_world.svg?branch=master)](https://travis-ci.org/pmvc-plugin/hello_world)
[![License](https://poser.pugx.org/pmvc-plugin/hello_world/license)](https://packagist.org/packages/pmvc-plugin/hello_world)
[![Total Downloads](https://poser.pugx.org/pmvc-plugin/hello_world/downloads)](https://packagist.org/packages/pmvc-plugin/hello_world) 

# PMVC Hello World Plugin 
===============

## How to use? Check the demo code.
https://github.com/pmvc-plugin/hello_world/tree/master/demo


## Install with Composer
### 1. Download composer
   * mkdir test_folder
   * curl -sS https://getcomposer.org/installer | php

### 2. Install by composer.json or use command-line directly
#### 2.1 Install by composer.json
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
    include('vendor/autoload.php');
    PMVC\Load::plug();
    \PMVC\plug('hello_world', ['Hello, PMVC.'])->say();
?>
```
### 4. Run the demo
   * php demo.php

### 5. Check the whole demo code
   * https://github.com/pmvc-plugin/hello_world/tree/master/demo

