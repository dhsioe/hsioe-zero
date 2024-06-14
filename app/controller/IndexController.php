<?php

namespace app\controller;

use support\Request;
use Webman\Push\Api;
use Webman\Push\PushException;

class IndexController
{
    /**
     * @throws PushException
     */
    public function index(Request $request)
    {
        $api = new Api(config('plugin.webman.push.app.api'), config('plugin.webman.push.app.app_key'), config('plugin.webman.push.app.app_secret'));
        $a = $api->trigger('webman-admin', 'notify', ['type'=>'success', 'msg'=>'hello']);
        return json(['code'=>0, 'msg'=>$a]);
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
