<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'. realpath(__DIR__)."/base.db",
    'charset' => 'utf8',
    'enableSchemaCache' => true,
];
