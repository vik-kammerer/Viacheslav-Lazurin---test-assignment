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
            $I->fill(signUpPage::$firstName, signUpPage::$testerName);
            $I->fill(signUpPage::$lastName, signUpPage::$testerSurname);
            $I->fill(signUpPage::$email, self::$uniqueEmail = signUpPage::getRandomEmail());
            $I->fill(signUpPage::$password, signUpPage::$testerPas);
            $I->fill(signUpPage::$passConfirm, signUpPage::$testerPass);
            $I->scrollTo(signUpPage::$createUser);
            $I->click(signUpPage::$createUser);
            

        }


        

                
}