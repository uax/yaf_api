<?php

class ErrorController extends Yaf_Controller_Abstract
{
    public function errorAction($exception)
    {
        if (Yaf_Registry::get("config")->debug) {
            echo $exception;
        }
    }
}
