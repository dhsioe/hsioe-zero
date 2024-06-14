<?php
/**
 * 用户事件
 * @author: hsioe1111@gmail.com
 * @date: 2024/6/14
 * @description:
 */

namespace app\event;

class User
{
    public function register($user): ?bool
    {
        echo "This is event 1" . PHP_EOL;
        return null;
    }
    
    public function register1($user): ?bool
    {
        echo "This is event 2" . PHP_EOL;
        return null;
    }
}