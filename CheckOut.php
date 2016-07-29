<?php
namespace SweetPay;

use Controller ;


class CheckOut
{
    
    protected $var ;
    public function __construct( )
    {
        $var = "Hello";
    } // end of __construct
     
    
    public function __destruct()
    {
        
    } // end of __destruct
    
    
    
/////////////////////////////////////////////////////////////////
// Get functions
/////////////////////////////////////////////////////////////////
    
    public function getHello( )
    {
        return $this->var;
    }
    
    
} // CheckOut.class ends here