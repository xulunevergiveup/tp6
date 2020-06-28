<?php


namespace app\api\controller;


use app\BaseController;
use app\common\utils\HttpCode;
use app\common\utils\OutPut;
use app\common\utils\StatusCode;

/**
 * api模块默认控制器类
 * Class Index
 * @package app\api\controller
 */
class Index extends BaseController
{
    /**
     * miss路由
     */
    public function miss()
    {
        return OutPut::errorJson(StatusCode::ROUTE_ERROR, HttpCode::NOT_FOUND);
    }
}