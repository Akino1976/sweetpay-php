<?php


namespace SweetPay\Controller;


class SweetPay
{
     
    public static $apiKey ; /* 'Authorization: NNq7Rcnb8y8jGTsU'*/
     
     // @var string The base URL for the Sweetpay API.
    public static $apiBase = 'https://checkout.stage.paylevo.com/v1/session/create';
     
     
    /*@abstract set the apiKey
     *@param {string|character} the key
     *@example \sweetPay\sweetPay::setApiKey('NNq7Rcnb8y8jGTsU')
     */
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    } 

} // end of class sweetPay