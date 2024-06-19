<?php
/**
 * 耗时的定时任务
 * @author: hsioe1111@gmail.com
 * @date: 2024/6/14
 * @description:
 */

namespace process;

use Workerman\Crontab\Crontab;

class SlowTask
{
    public function onWorkerStart(): void
    {
        new Crontab('*/1 * * * * *', function(){
        });
    }
    
    public function onWorkerStop(): void
    {
    
    }
}