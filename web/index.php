<?php

use codemix\yii2confload\Config;

require(__DIR__ . '/../vendor/autoload.php');
$config = new Config(__DIR__ . '/..');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::createObject('yii\web\Application', [$config->web()])->run();