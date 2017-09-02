<?php

use \Page\signUpPage as signUpPage;



class signUpCest

{

        public function _before(\AcceptanceTester $I)
        {
        }

        public function _after(\AcceptanceTester $I)
        {
            
        }
                    
        public function CreateUser (\AcceptanceTester $I)
        {
            $I->wantTo('Create a user with unique email');
            $I->amOnPage(signUpPage::$signUpURL);
            $I->wait('2'); //wait untill all JS scipts are loaded
            $I->fillField(signUpPage::$firstName, signUpPage::$testerName);
            $I->fillField(signUpPage::$lastName, signUpPage::$testerSurname);
            $I->fillField(signUpPage::$email, self::$uniqueEmail = signUpPage::getRandomEmail());
            $I->fillField(signUpPage::$password, signUpPage::$testerPass);
            $I->fillField(signUpPage::$passConfirm, signUpPage::$testerPass);
            $I->scrollTo(signUpPage::$createUser);
            $I->click(signUpPage::$createUser);
            

        }


        

                
}