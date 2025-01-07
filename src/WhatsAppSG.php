<?php
/*
 * File: WhatsAppSG.php
 * Project: src
 * Created Date: Mo Oct 2022
 * Author: Lingga Pranasucitra
 * Email: lingga.pranasucitra@gmail.com
 * Phone: 081395250814
 * -------------------------
 * Last Modified: Tue Jan 07 2025
 * Modified By: Lingga Pranasucitra
 * -------------------------
 * Copyright (c) 2025 Pranasucitra 

 * -------------------------
 * HISTORY:
 * Date      	By	Comments 

 * ----------	---	---------------------------------------------------------
 * 
 * Program ini dibuat dan dikembangkan untuk dapat mengirim pesan Whatsapp melalui whatsApp api yang dapat diinstal sendiri di dalam server kita. 
 * untuk lebih detailnya anda dapat melihat dokumentasi pada homepage library ini di
 * 
 * https://github.com/pranasucitra/WhatsappGatewayServices
 * 
 * Jika anda ingin membantu dan mengembangkan program ini untuk lebih baik kedepan anda dapat Fork repository ini
 * dan pull-request fitur atau update terbarunya.
 */

namespace pranasucitra\WhatsappGatewayServices;

use pranasucitra\WhatsappGatewayServices\Traits\FormatPhoneTrait;
use pranasucitra\WhatsappGatewayServices\Traits\GetSetTrait;
use pranasucitra\WhatsappGatewayServices\Traits\GlobalTrait;
use Exception;

class WhatsAppSG
{
    use GetSetTrait, FormatPhoneTrait, GlobalTrait;

    /**
     * __construct
     *
     * @return parent::__construct()
     */
    public function __construct(int $recepient = null, string $message = null)
    {
        $this->recepient    = $recepient;
        $this->message      = $message;
    }

    /**
     * SendText
     *
     * @return this 
     * @author Lingga Pranasucitra <lingga.pranasucitra@gmail.com>
     * @throws Exception
     */
    public function SendText()
    {
        $recepient  = $this->FormatPhone($this->recepient);
        $sender     = $this->FormatPhone($this->senderPhone);

        if ($recepient == $sender) {
            throw new Exception('Nomor tujuan tidak boleh kedalam nomor yang sama dengan pengirim, dikarenakan bisa menyebabkan server whatsapp mati !');
        }

        $params     = [
            'number'    => $recepient,
            'message'   => $this->message,
        ];
        return $this->_exce('/send-message', $params);
    }
}
