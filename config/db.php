<?php

use codemix\yii2confload\Config;

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=db;dbname=db',
    'username' => 'root',
    'password' => Config::env('MYSQL_PWD'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
