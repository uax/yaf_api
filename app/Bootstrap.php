<?php
use \Illuminate\Database\Capsule\Manager as DB;
use \Illuminate\Events\Dispatcher;
use \Illuminate\Container\Container;

class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public function _initConfig(Yaf_Dispatcher $dispatcher)
    {
        Yaf_Registry::set('config', Yaf_Application::app()->getConfig());
        require __DIR__ . '/../vendor/autoload.php';
        Yaf_Dispatcher::getInstance()->autoRender(false);
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的路由协议,默认使用简单路由
    }

    public function _initORM(Yaf_Dispatcher $dispatcher)
    {
        $capsule = new DB;
        $capsule->addConnection(Yaf_Registry::get("config")->database->toArray());
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
