# WhatsappGatewayServices

Module untuk mengirim notifikasi WhatsApp menggunakan Whatsapp gateway service dengan HTTP
module ini di buat untuk Framework codeigniter atau OOP PHP untuk mengirim pemneritahuan lewat WhatsApp service dengan POST data

# Requirment

1. composer
2. nodeJs
3. php-7.4 keatas
4. Whatsapp yang sudah terinstall di HP Anda untuk proses scan

# Cara Install

Anda membutuhkan paket composer untuk memasang program ini, jika Anda belum memiliki composer silahkan download dan install di https://getcomposer.org/

    composer require pranasucitra/whatsapp-helper:dev-main

# Contoh Penggunaan

Berikut adalah contoh penggunaan pada PHP

    /* ------------------------ contoh penggunaan pertama ----------------------- */

    use pranasucitra\WhatsappGatewayServices\WhatsAppSG;

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
