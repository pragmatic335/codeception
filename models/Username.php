<?php


namespace app\models;


use yii\db\ActiveRecord;
use yii\db\Exception;
use yii\db\StaleObjectException;

class Username extends ActiveRecord
{
    public function rules() {
        return [
            [['email', 'name'], 'required'],
            [['email', 'name'], 'string'],
            ['email', 'unique'],
        ];
    }


    /**
     * @param bool $runValidation
     * @param null $attributeNames
     * @return bool
     * @throws StaleObjectException
     * @throws \Throwable
     */
    public function save($runValidation = true, $attributeNames = null) {

            if (is_array($this->getOldAttributes())) {
                parent::update($runValidation = true, $attributeNames = null);
            } else {
                parent::insert($runValidation = true, $attributeNames = null);
            }
            return true;

    }

}