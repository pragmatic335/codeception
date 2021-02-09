<?php 

class FirstTryCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->click('About');
//        $I->click('Login');
//        $I->fillField('Username', 'Miles');
//        $I->fillField('Password', 'Davis');
//        $I->click('Enter');
        $a = 1;
        $I->see('This is the About page.');
        $I->click('Login');
        $I->see('Username');
        $I->fillField('Username', 'admin');
        $I->fillField('Password', 'admin');
        $I->submitForm('#login-form', []);
        $I->see('Congratulations!');
        $I->see('Logout (admin)');

//        $I->amOnPage('/site/about');
//        $I->amOnPage('/site/login');
//        $I->see('Username');

        // $I->seeEmailIsSent(); // only for Symfony
    }
}
