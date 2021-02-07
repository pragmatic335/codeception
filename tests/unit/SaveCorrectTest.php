<?php

use app\tests\fixtures\UsernameFixture;

class SaveCorrectTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function _fixtures() {
        return [
            'users' => UsernameFixture::className()
        ];
    }
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSaveWorkCorrect()
    {
        sleep(15);
//        $user = new \app\models\Username();
//        $user->name ='Miles';
//        $user->email ='try@try';
//        $user->save();
//        $this->tester->seeInDatabase('username', ['name' => 'Miles', 'surname' => 'Davis']);
    }
}