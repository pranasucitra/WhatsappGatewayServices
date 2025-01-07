# WhatsappGatewayServices

Module for sending WhatsApp notifications using a WhatsApp gateway service with HTTP.
This module is created for the CodeIgniter framework or OOP PHP to send notifications via the WhatsApp service using POST data.”

# Requirment

1. composer
2. nodeJs
3. php-7.4 keatas
4. Whatsapp that has been installed on your cellphone for the scanning process

# How to Install

You need the composer package to install this program, if you don't have composer please download and install it at https://getcomposer.org/

    composer require pranasucitra/whatsapp-gateway-services:dev-main

# Usage Examples

The following is an example of use in PHP

    /* ------------------------ First Example ----------------------- */

    use pranasucitra\WhatsappGatewayServices\WhatsAppSG;

    $wa     = new WhatsAppSG();
    $wa->setPort('6789')
        ->setSenderPhone('081395250814')
        ->setRecepient('085xxxxxxxxx')
        ->setMessage('test send wa?');

    var_dump($wa->SendText());

    /**
    * if you use a number outside Indonesia
    * You can set the locale in the following way
    *
    * Note:
    * see alpha-2-code country codes in the following link
    * https://www.iban.com/country-codes
    */
    $wa     = new WhatsAppSG();
    $wa->setPort('6789')
    	->setLocale('US')
    	->setSenderPhone('081395250814')
    	->setRecepient('085xxxxxxxxx')
    	->setMessage('test send wa?');

    var_dump($wa->SendText());


    /* ------------------------- Second Example ------------------------ */

    $wa     = new WhatsAppSG('085xxxxxxxxx', 'Hello, try sending this on whatsapp');
    $wa->setBaseUrl('http://127.0.0.1')
        ->setPort('6789')
        ->setSenderPhone('081395250814');
        $result     = $wa->SendText();
