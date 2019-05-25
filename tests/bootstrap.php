<?php

/*
 * This file is part of the DoctrineEncryptBundle package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install dependencies using composer to run the test suite.');
}

$autoload = require $file;
Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoload, 'loadClass']);