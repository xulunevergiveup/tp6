<?php


namespace app\home\controller;


use app\BaseController;

/**
 * index模块默认控制器类
 * Class Index
 * @package app\Index\controller
 */
class Index extends BaseController
{
    /**
     * 首页
     * @return string
     */
    public function index()
    {
        return view('home@index/index');
    }
}
