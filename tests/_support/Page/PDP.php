<?php
namespace Page;

class PDP
{
    // include url of current page
    
  
   

   public static $simpleURL =  'summit-watch';
   public static $configurableURL =  'gabrielle-micro-sleeve-top';
   public static $productTitle = ['css' => '.page-title-wrapper.product'];
   public static $qtyBox = ['css' => '#qty'];
   public static $addingButton = ['css' => '#product-addtocart-button'];
   public static $priceBox = ['css' => '.price-box.price-final_price'];
   public static $successMessage = ['css' => '.message-success.success.message'];
   public static $addToCartForm = ['css' => '#product_addtocart_form'];
   
   //Configurable options
   public static $firstColor = ['css' => '.swatch-option.color'];
   public static $firstSize = ['css' => '.swatch-option.text'];
   
   //Shopping cart counter
   public static $counter = ['css' => '.counter-number'];
   
   
   

    
    
    
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
