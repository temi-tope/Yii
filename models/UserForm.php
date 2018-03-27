<?php

namespace app\models;

use yii\base\Model;

class UserForm extends Model
{
    public $name;
    Public $email;
    public function rules(){
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}
?>