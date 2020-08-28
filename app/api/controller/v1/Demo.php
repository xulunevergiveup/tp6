<?php


namespace app\api\controller\v1;


use app\BaseController;
use app\common\utils\OutPut;

class Demo extends BaseController
{
    public function show()
    {
        return OutPut::successJson('呵呵哒');
    }
}
