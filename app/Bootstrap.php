<?php

class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public function _initConfig()
    {
        $arrConfig = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $arrConfig);
        Yaf_Dispatcher::getInstance()->autoRender(false);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的路由协议,默认使用简单路由
    }
}
