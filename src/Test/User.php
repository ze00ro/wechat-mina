<?php
namespace Test;

class User extends BaseService
{
    const URL_jscode2session = 'https://api.weixin.qq.com/sns/jscode2session';

    public function jscode2session($jscode)
    {
        $params = [
            'appid' => $this->config['app_id'],
            'secret' => $this->config['secret'],
            'js_code' => $jscode,
            'grant_type' => 'authorization_code',
        ];


    }
}