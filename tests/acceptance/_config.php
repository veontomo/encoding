<?php

return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../config/web.php'),
    require(__DIR__ . '/../_config.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=codifica-test',
                'username' => 'codifica-test',
                'password' => 'acGM5H8j2fwY9YXN',
            ],
        ],
    ]
);
