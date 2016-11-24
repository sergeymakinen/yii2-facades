<?php

error_reporting(-1);
ini_set('display_errors', true);

require_once __DIR__ . '/../vendor/autoload.php';
$loader = new Composer\Autoload\ClassLoader();
$loader->addPsr4('sergeymakinen\tests\\', __DIR__, true);
$loader->register();

$_SERVER['SCRIPT_FILENAME'] = __FILE__;
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SERVER_NAME'] = 'example.com';

define('YII_DEBUG', true);
define('YII_ENABLE_ERROR_HANDLER', false);

require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

require_once __DIR__ . '/TestCase.php';
