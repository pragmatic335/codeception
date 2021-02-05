<?php 
class SaveCorrectTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSaveWorkCorrect()
    {
        $user = new \app\models\Username();
        $user->name ='Miles';
        $user->email ='try@try';
        $user->save();
        $this->tester->seeInDatabase('username', ['name' => 'Miles', 'surname' => 'Davis']);
    }
}