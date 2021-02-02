<?php 

class UserCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
        $user = new \app\models\User();
        $I->assertSame($user->testik(), false);
    }
}
