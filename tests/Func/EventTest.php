<?php
/**
 * 事件组件测试
 * @author: hsioe1111@gmail.com
 * @date: 2024/6/11
 * @description:
 */

namespace tests\Func;


use support\exception\BusinessException;
use Tests\TestBase;
use Webman\Event\Event;

class EventTest extends TestBase
{
    
    public function testUserEvent()
    {
        Event::dispatch('user.register', ['name'=>'david', 'sex'=>1]);
        
        
        $this->assertTrue(true);
    }
}