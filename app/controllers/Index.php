<?php
use \Illuminate\Database\Capsule\Manager as DB;


class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $user = UserModel::find(2);
        echo json_encode($user);
    }
}
