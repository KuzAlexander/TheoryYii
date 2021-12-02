<?php

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

// Пример для отправки формы
/*class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {

        return [
            'name'=>'Имя',
            'email'=>'E-mail',
            'text'=> 'Текст сообщения',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message'=>'Поле обязательно'],
            ['email', 'email'],
            //['name', 'string', 'min'=>2, 'tooShort'=>'Мало'],
            //['name', 'string', 'max'=>5, 'tooLong'=>'Много'],
            ['name', 'string', 'length'=>[2, 5]],
            ['name', 'myRules'],
            //['text', 'trim'],
        ];
    }

    public function myRules($attrs)
    {
        if(!in_array($this->$attrs, ['Hello', 'World'])) {
            $this->addError($attrs, 'Не соответствует условию');
        }
    }
}*/

//Пример для отправки данных из формы в БД
class TestForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }

    public function attributeLabels()
    {
        return [
            'name'=>'Имя',
            'email'=>'E-mail',
            'text'=> 'Текст сообщения',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            //['name', 'required'],
            ['email', 'email'],
            //['text', 'trim']
        ];
    }
}