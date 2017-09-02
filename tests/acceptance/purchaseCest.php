<?php
use \Page\PDP as PDP;
use \Page\signUpPage as signUpPage;


class purchaseCest
{   
    
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function SignUpAndBuy(AcceptanceTester $I)
    {
        $I->amGoingTo('Create a new user and buy 2 products');
        signUpPage::CreateUser($I);
        
        
        $I->amOnPage(PDP::$simpleURL);
        $I->seeElementInDOM(PDP::$productTitle);
        $I->seeElementInDOM(PDP::$priceBox);
        $I->fillField(PDP::$qtyBox, '10');
        $I->click(PDP::$addingButton);
        $I->waitForText('10', 5, PDP::$counter);

        
        
        $I->amOnPage(PDP::$configurableURL);
        $I->seeElementInDOM(PDP::$productTitle);
        $I->seeElementInDOM(PDP::$priceBox);
        $I->fillField(PDP::$qtyBox, '10');
        $I->click(PDP::$firstSize);
        $I->click(PDP::$firstColor);
        $I->click(PDP::$addingButton);
        $I->waitForText('20', 5, PDP::$counter);

        
    }
    

}
