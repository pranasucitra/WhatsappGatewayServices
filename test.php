<?php
/*
 * File: test.php
 * Project: WhatsappGatewayServices
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
 */

use pranasucitra\WhatsappGatewayServices\WhatsAppSG;

require 'vendor/autoload.php';

/* ------------------------ contoh penggunaan pertama ----------------------- */

$wa     = new WhatsAppSG();
$wa->setPort('6789')
    ->setSenderPhone('081395250814')
    ->setRecepient('085xxxxxxxxx')
    ->setMessage('test kirim wa?');

var_dump($wa->SendText());

/**
 * jika anda menggunakan nomor diluar indonesia 
 * Anda dapat mengatur locale dengan cara
 * 
 * catatan:
 * lihat kode negara aplha-2-code di link berikut
 * https://www.iban.com/country-codes
 */
$wa     = new WhatsAppSG();
$wa->setPort('6789')
    ->setLocale('US')
    ->setSenderPhone('081395250814')
    ->setRecepient('085xxxxxxxxx')
    ->setMessage('test kirim wa?');

var_dump($wa->SendText());

/* ------------------------- contoh penggunaan kedua ------------------------ */

$wa     = new WhatsAppSG('085xxxxxxxxx', 'hallo ini coba kirim whatsapp');
$wa->setBaseUrl('http://127.0.0.1')
    ->setPort('6789')
    ->setSenderPhone('081395250814');

$result     = $wa->SendText();