<?php


namespace app\api\controller;


use app\BaseController;
use app\common\utils\OutPut;

class Demo extends BaseController
{
    public function show()
    {
        return OutPut::successJson('哈哈');
    }
}