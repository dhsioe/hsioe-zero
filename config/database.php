<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

return [
    // 默认数据库
    'default' => 'mysql',
    // 各种数据库配置
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => getenv('DB_HOST', '127.0.0.1'),
            'port' => getenv('DB_PORT', 3306),
            'database' => getenv('DB_NAME', 'hsioe_quant'),
            'username' => getenv('DB_USER', 'root'),
            'password' => getenv('DB_PASSWORD', 'root'),
            'unix_socket' => '',
            'charset' => getenv('DB_CHARSET', 'utf8mb4'),
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ]
    ],
];
