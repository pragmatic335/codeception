<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'. realpath(__DIR__)."/base_test.db",
    'charset' => 'utf8',
    'enableSchemaCache' => true,
];
