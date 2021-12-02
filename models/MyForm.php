<?php


namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

/*class MyForm extends Model
{
    public $login;
    public $password;
    public $tel;

    public function attributeLabels()
    {
        return [
            'login'=>'Логин',
            'password'=>'Пароль',
            'tel'=> 'Телефон',
        ];
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['tel', 'trim'],
        ];
    }
}*/

class MyForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'mytable';
    }

    public function attributeLabels()
    {
        return [
            'login'=>'Логин',
            'password'=>'Пароль',
            'tel'=> 'Телефон',
        ];
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['tel', 'trim'],
        ];
    }
}