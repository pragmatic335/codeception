<?php


namespace app\models;


use yii\db\ActiveRecord;

class Username extends ActiveRecord
{
    public function rules() {
        return [
            [['email', 'name'], 'required'],
            [['email', 'name'], 'string'],
            ];
}


    // тест для моки
    public function testik() {
        return 'like';
    }

}