<?php
use \Page\PDP as PDP;



class purchaseCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function purchaseSimple(AcceptanceTester $I)
    {
        $I->wantTo('Add smple prodct into cart');
        $I->amOnPage(PDP::$SimpleURL);
        $I->seeElementInDOM(PDP::$productTitle);
        $I->seeElementInDOM(PDP::$priceBox);
        $I>fillField(PDP::$qtyBox, '10');
        $I->click(PDP::$addingButton);
        $I->waitForText('10', PDP::$counter);

        
    }
}
