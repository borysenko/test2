<?php

return [
    'components' => [
        'db1' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;port=8889;dbname=db1',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'db2' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;port=8889;dbname=db2',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'db3' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;port=8889;dbname=db3',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],   
        'db4' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;port=8889;dbname=db4',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ], 
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
      
    ],
];
