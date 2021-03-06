<?php
namespace Star\Util;

use Bee\Di\Container;

/**
 * Task 任务
 *
 * @package Star\Util
 */
abstract class Task
{
    /**
     * 执行业务
     *
     * @param array $params
     * @throws \Exception
     */
    abstract public function handle($params = []);

    /**
     * 获取全局共享服务
     *
     * @param string $name
     * @return mixed
     */
    protected function getSharedService(string $name)
    {
        return Container::getDefault()->getShared($name);
    }

    /**
     * 获取服务
     *
     * @param string $name
     * @return \Bee\Di\ServiceInterface
     */
    protected function getService(string $name)
    {
        return Container::getDefault()->getService($name);
    }
}
