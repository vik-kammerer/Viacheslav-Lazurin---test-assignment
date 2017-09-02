<?php
namespace Page;
use \Page\basePage as basePage;

class signUpPage
{
    // include url of current page

   public static $uniqueEmail;

    
//   // Locators
    public static $signUpURL = '/customer/account/create/';
    public static $firstName = ['css' => '#firstname'];
    public static $lastName = ['css' => '#lastname'];
    public static $email = ['css' => '#email_address'];
    public static $password = ['css' => '#password'];
    public static $passConfirm = ['css' => '#password-confirmation'];
    public static $createUser = ['css' => '.action.submit.primary'];
    
//  //  Test data
    public static $testerPass = "1234567ABC_abc";
    public static $testerName = "testerName";
    public static $testerSurname = "testerLastName";
    
    // This function is supposed to be called in purchaseCest
    public function CreateUser (\AcceptanceTester $I)
        {
            
            $I->amOnPage(signUpPage::$signUpURL);
            $I->wait('2'); //wait untill all JS scipts are loaded
            $I->fillField(signUpPage::$firstName, signUpPage::$testerName);
            $I->fillField(signUpPage::$lastName, signUpPage::$testerSurname);
            $I->fillField(signUpPage::$email, self::$uniqueEmail = "check" . rand(10, 99999) . "@testBot.com");               
            $I->fillField(signUpPage::$password, signUpPage::$testerPass);
            $I->fillField(signUpPage::$passConfirm, signUpPage::$testerPass);
            $I->scrollTo(signUpPage::$createUser);
            $I->click(signUpPage::$createUser);
            $I->seeElementInDOM(myAccount::$welcomeMessage);
            


        }
  
    

    
    

    
    
    
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
