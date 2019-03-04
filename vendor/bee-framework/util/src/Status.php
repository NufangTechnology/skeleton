<?php
namespace Bee;

/**
 * 应用状态码
 *
 * @package Bee
 */
class Status
{
    const E_401000 = [401000, '身份令牌失效'];
    const E_401001 = [401001, '身份令牌不能为空'];
    const E_401002 = [401002, '身份信息解析失败'];

    const E_404000 = [404000, '请求的URL不存在'];
    const E_404001 = [404001, '请求的资源不存在'];

    const E_500000 = [500000, '服务异常，请稍后重试'];
    const E_500001 = [500001, '新增数据失败'];
}
