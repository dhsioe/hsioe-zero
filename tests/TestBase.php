<?php
/**
 * 测试基类
 * @author: hsioe1111@gmail.com
 * @date: 2024/6/11
 * @description:
 */
namespace Tests;


use PHPUnit\Framework\TestCase;

class TestBase extends TestCase
{
    public function setUp(): void
    {
        // 加载启动数据
        require_once dirname(__DIR__,1).'/script/init.php';
    }
}