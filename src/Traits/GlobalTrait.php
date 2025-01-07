<?php
/*
* File: GlobalTrait.php
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
 */

namespace pranasucitra\WhatsappGatewayServices\Traits;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

trait GlobalTrait
{
    use GetSetTrait;

    /**
     * Fungsi untuk proses eksekusi pengiriman data kepada server
     *
     * @param  mixed $endpoint
     * @param  array $params
     *
     * @return void            
     * @author Lingga Pranasucitra <lingga.pranasucitra@gmail.com>
     * @throws Exception
     */
    public function _exce($endpoint, $params = [])
    {
        $availPort      = (!empty($this->port)) ? $this->port : '80';
        $base_url       = $this->baseUrl . ':' . $availPort;
        $url            = $base_url . $endpoint;

        $client = new Client([
            'base_uri' => $base_url,
        ]);

        $response = $client->post($endpoint, [
            // 'debug' => TRUE,
            'form_params' => $params,
            'headers' => [
                'Accept' => 'application/json'
            ],
        ]);

        $responseData = $response->getBody()->getContents();
        $result = json_decode($responseData);

        return $result;
    }
}
