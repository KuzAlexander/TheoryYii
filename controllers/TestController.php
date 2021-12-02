<?php

namespace app\controllers;
use app\models\Category;
use app\models\Comments;
use app\models\MyForm;
use app\models\Product;
use yii;

class TestController extends AppController
{
    public $layout = 'fortest';

    public function actionIndex()
    {
        $this->view->title = 'Тест';

/*        $model = new MyForm();
        if($model->load(yii::$app->request->post())) {
            if($model->validate()){
                yii::$app->session->setFlash('success', 'Данные приняты');
            } else {
                yii::$app->session->setFlash('error', 'Ошибка');
            }
        }*/



        $model = new MyForm();

        /*$model->login = 'alex';
        $model->password = 'newPas';
        $model->tel = '53324952';

        $model->save();*/

        if($model->load(yii::$app->request->post())) {
            if($model->save()){
                yii::$app->session->setFlash('success', 'Данные приняты');
            } else {
                yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        //$com = Comments::find()->asArray()->where('comment_id=1')->all();
        //$com = Product::find()->where('id=7582')->all();
        //return $this->render('index', compact('model', 'com'));

/*        $cat = MyForm::find()->where('id = 4')->one();
        $cat->tel = '44444444';
        $cat->save();*/


        $cat = MyForm::find()->all();
        foreach ($cat as $item) {
            $item->tel = rand(1000000, 9999999);
            $item->save();
        }

        //$cat->delete();

        //MyForm::deleteAll();

        return $this->render('index', compact('model'));
    }
}