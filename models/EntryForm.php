<?php
/**
 * 使用Form.
 * User: weifengli
 * Date: 2014/12/30
 */

namespace app\models;
use yii\base\Model;

class EntryForm
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}