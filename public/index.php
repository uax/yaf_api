<?php
$app = new Yaf_Application(dirname(__DIR__) . "/conf/app.ini");
$app->bootstrap()->run();
