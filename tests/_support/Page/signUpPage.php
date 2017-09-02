<?php
namespace Page;

class signUpPage
{
    // include url of current page


    
//    Locators
    public static $signUpURL = '/customer/account/create/';
    public static $firstName = ['css' => '#firstname'];
    public static $lastName = ['css' => '#lastname'];
    public static $email = ['css' => '#email_address'];
    public static $password = ['css' => '#password'];
    public static $passConfirm = ['css' => '#password-confirmation'];
    public static $createUser = ['css' => '.action.submit.primary'];
    
//    Test data
    public static $testerPass = "1234567ABC_abc";
    public static $testerName = "testerName";
    public static $testerSurname = "testerLastName";
  
    

    
    

    
    
    
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
