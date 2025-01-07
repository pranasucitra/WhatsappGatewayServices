<?php
/*
* File: FormatPhoneTrait.php
* Project: Traits
* Created Date: Mo Oct 2022
* Author: Lingga Pranasucitra
* Email: lingga.pranasucitra@gmail.com
* Phone: 081395250814
* -------------------------
* Last Modified: Mon Oct 03 2022
 * Modified By: Lingga Pranasucitra
 * -------------------------
 * Copyright (c) 2025 Indiega Network 
 
 * -------------------------
 * HISTORY:
 * Date      	By	Comments 
 
 * ----------	---	---------------------------------------------------------
 * update:
 * 1. menambahkan locale untuk kode negara. Default ID
 */

namespace pranasucitra\WhatsappGatewayServices\Traits;

use Exception;

trait FormatPhoneTrait
{

    /**
     * @var string
     * @author Lingga Pranasucitra <lingga.pranasucitra@gmail.com>
     */
    protected $locale   = 'ID';

    /**
     * Helper berfungsi untuk memformat nomor telepon 
     *
     * @param  int|null $phone
     *
     * @return void            
     * @author Lingga Pranasucitra <lingga.pranasucitra@gmail.com>
     * @throws Exception
     */
    public function FormatPhone(int $phone = null)
    {
        $phoneUtil              = \libphonenumber\PhoneNumberUtil::getInstance();
        try {

            $NumberFormat       = $phoneUtil->parse($phone, $this->locale);
            return $NumberFormat->getCountryCode() . $NumberFormat->getNationalNumber();
            var_dump($NumberFormat);
        } catch (\libphonenumber\NumberParseException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Set the value of locale
     * @param   string  $locale  
     * @return  self
     */
    public function setLocale(string $locale)
    {
        $this->locale = $locale;
        return $this;
    }
}
