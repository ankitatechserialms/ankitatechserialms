<?php
namespace Giftapi\Api;

use Requests;
use Exception;
class Request
{
        
    public function request($method, $url, $data = array())
    {
    // First, include Requests
        $url = Api::getFullUrl($url);
        $options = array(
            'timeout' => 60
        );
        $response = Requests::request($url, $data, $method, $options);
        return json_decode($response->body, true);
    }
}
?>