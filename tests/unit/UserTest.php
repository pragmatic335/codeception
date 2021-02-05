<?php

use app\models\Username;

class UserTest extends \Codeception\Test\Unit
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
    public function testSomeFeature()
    {
//        $user = $this->make(Username::class, [
//            'testik' => \Codeception\Stub\Expected::never()
//        ]);
////        $user->testik();



        $this->assertSame(1, 1);
//        $this->assertFalse( $user->save(), 'Save will be ok');
//        $this->assertFalse($user->save(), 'qwerty');


    }
}