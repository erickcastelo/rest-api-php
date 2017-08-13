<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=web',
    'username' => 'postgres',
    'password' => 'root',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'myschema',
        ],
    ],
    'on afterOpen' => function ($event) {
        $event->sender->createCommand("SET search_path TO myschema;")->execute();
    },
];
