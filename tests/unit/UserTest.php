<?php

use app\models\Username;
use app\tests\fixtures\UsernameFixture;

class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
//    protected function _before()
//    {
//        $this->tester->haveFixtures([
//            'username' => [
//                'class' => UsernameFixture::className()
//            ]
//        ]);
//    }

    /** подключение фикстуры (приспособление) вариант 1
     *
     */
    public function _fixtures() {
        return [
            'users' => UsernameFixture::className()
        ];
    }

    public function testEmailUnique() {

//        sleep(5);
        $model = new Username([
            'name' => 'Jack',
            'email' => 'tango@tango',
        ]);

        $model->validate();
        echo $model->getFirstError('email');

        expect($model->getFirstError('email'))->equals('Email ' . '"'. $model->email .'"' . ' has already been taken.');
//        $this->assertArrayHasKey('email',$model->getErrors(), 'Error');

    }
}