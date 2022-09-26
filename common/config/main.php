<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [

//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',
//            'viewPath' => '@common/mail',
//            'useFileTransport' => false,
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.yandex.ru',
//                'username' => 'design.solutions54@yandex.ru',
//                'password' => 'wmujwtmstppulpkj',
//                'port' => '465',
//                'encryption' => 'ssl',
//            ],
//        ],
//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',
//            'viewPath' => '@common/mail',
//            'useFileTransport' => false,
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.yandex.ru',
//                'username' => 'testmailbox054@yandex.ru',
//                'password' => 'snnygehgcywilsun',
//                'port' => '465',
//                'encryption' => 'ssl',
//            ],
//        ],


        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],

];
