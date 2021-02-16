<?php 

class FirstHomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->click('About');
        $I->wait(5);

    }
}
