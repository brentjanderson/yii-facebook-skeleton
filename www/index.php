<?php

// change the following paths if necessary
$yii = dirname(__FILE__) . '/../yii-1.1.10.r3566/framework/yii.php';
$config = dirname(__FILE__) . '/../protected/config/main.php';

if ($_SERVER['HTTP_HOST'] == 'local-dev.matchmate.me' || $_SERVER['HTTP_HOST'] == 'localhost') {
    $config = dirname(__FILE__) . '/../protected/config/dev.php';
    // remove the following lines when in production mode
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    // specify how many levels of call stack should be shown in each log message
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
} else {
    $config = dirname(__FILE__) . '/../protected/config/main.php';
}

require_once($yii);
Yii::createWebApplication($config)->run();
