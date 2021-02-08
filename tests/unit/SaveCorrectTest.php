<?php

use app\tests\fixtures\UsernameFixture;

class SaveCorrectTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /** подключение фикстуры (приспособление) вариант 1
     *
     */
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

    }
}