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
            echo 'SLOW-TASK: '.date('Y-m-d H:i:s', time()).PHP_EOL;
        });
    }
    
    public function onWorkerStop(): void
    {
    
    }
}