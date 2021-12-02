<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex()
    {
        //return 'Admin';
        return $this->render('index');
    }
}