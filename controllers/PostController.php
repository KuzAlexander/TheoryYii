<?php


namespace app\controllers;
use app\models\Category;
use yii;
use app\models\TestForm;

class PostController extends AppController
{

    public $layout = 'basic';

    public function beforeAction($action)
    {
        if($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        if(yii::$app->request->isAjax) {
            //debug($_POST);
            debug(yii::$app->request->post());
            return 'test';
        }

        $model = new TestForm();
        // Пример для добавления данных вручную
        //$model->name = 'Автор';
        //$model->email = 'email@email.com';
        //$model->text = 'Текст сообщения';
        //$model->save();

/*        if($model->load(yii::$app->request->post())) {
            //debug($model);
            //die;
            if($model->validate()){
                yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                yii::$app->session->setFlash('error', 'Ошибка');
            }
        }*/

        if($model->load(yii::$app->request->post())) {
            if($model->save()){
                yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        $names = ['Ivanov', 'Petrov', 'Sidorov'];
/*        return $this->render('index', [
            'this'=>$this,
            'names'=>$names
        ]);*/

        //$post = TestForm::find()->asArray()->where('id=10')->all();

        //$post = TestForm::find()->where('id=3')->all();
        //$post = TestForm::findOne(3);
        //$post->email = '123@123.com';
        //$post->save();

        //$post = TestForm::findOne(3);
        //$post->delete();

        //TestForm::deleteAll(['>=', 'id', 13]);

        $posts = TestForm::updateAll(['email'=>'123@yandex.ru'], ['>', 'id', 1]);
        //debug($post);

/*        $post = TestForm::find()->where('id >= 5')->all();
        foreach ($post as $pos) {
            $pos->delete();
        }*/

        return $this->render('index', compact('names', 'model'/*, 'post'*/));
        //return $this->render('index');
    }

    public function actionShow()
    {
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевики...']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы...']);
        //$this->layout = 'basic';


        //$cats = Category::find()->all();
        //$cats = Category::find()->orderBy(['id'=>SORT_ASC])->all();
        //$cats = Category::find()->orderBy(['id'=>SORT_DESC])->all();
        //$cats = Category::find()->asArray()->all();
        //$cats = Category::find()->where('parent=691')->all();
        //$cats = Category::find()->where(['parent'=>691])->all();
        //$cats = Category::find()->where(['like', 'title', 'pp'])->all();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '695'])->all();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '695'])->limit(1)->all();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '695'])->one();
        //$cats = Category::find()->asArray()->where(['<=', 'id', '695'])->count();
        //$cats = Category::findOne(['parent'=>691]);
        //$cats = Category::findAll(['parent'=>691]);
        //$cats = Category::find()->asArray()->where(['id'=>685])->all();
        //$query = "Select * From categories Where title Like '%pp%'";
        //$cats = Category::findBySql($query)->all();
        //$query = "Select * From categories Where title Like :search";
        //$cats = Category::findBySql($query, [':search'=>'%pp%'])->all();
        //$cats = Category::find()->asArray()->where(['id'=>685])->all();
        //$cats = Category::findOne(694);
        //$cats = Category::find()->all();
        //$cats = Category::find()->asArray()->all();
        //$cats = Category::find()->all();
        $cats = Category::find()->with('products')->all();

        return $this->render('show', compact('cats'));
    }
}