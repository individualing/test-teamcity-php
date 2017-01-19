<?php
define('YII_ENV', 'test');
defined('YII_DEBUG') or define('YII_DEBUG', true);

require_once( __DIR__ .'/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

//for AspectMock
//$kernel = \AspectMock\Kernel::getInstance();
//$kernel->init([
//    'debug' => true,
//    'includePaths' => [
//        __DIR__ . '/..'
//    ],
//    'excludePaths' => [
//        __DIR__ . '/../tests',
//        __DIR__ . '/../vendor/'
//
//    ]
//]);
//$kernel->loadFile(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');





//$kernel->loadFile(YII_APP_BASE_PATH.'/vendor/yiisoft/yii2/base/UnknownClassException.php');
//$kernel->loadFile(YII_APP_BASE_PATH.'/vendor/yiisoft/yii2/base/ErrorException.php');
//$kernel->loadFile(YII_APP_BASE_PATH.'/common/config/bootstrap.php');
//$kernel->loadFile(YII_APP_BASE_PATH.'/sys/config/bootstrap.php');
//\Go\ParserReflection\ReflectionEngine::init(new AutoloadingLocator());
// end for AspectMock