<?php
// 应用公共文件
/**
 * 抛出异常
 * @param string $msg 异常消息
 * @param int $code 异常代码
 * @param string $exception 异常类
 */
function exception($msg = '', $code = 0, $exception = '')
{
    $e = $exception ?: '\think\Exception';
    throw new $e($msg, $code);
}