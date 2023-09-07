<?php

namespace Donejeh\Nuban;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Donejeh\Nuban\Exceptions\ConfigurationException;

class Nubapi
{
    private $APIEndpoint = null;
    private $url = null;
    private $params = [];

    public  $enviroment;
    private string $accessToken;

    public function __construct()
    {
        $this->setKey();
        $this->setEndpoints();
        $this->resolve();

        if (empty($this->accessToken)) {
            throw new \Exception('No Nubapi token configured.');
        }

    }


    function resolve()
    {
        $this->client = new Client([
            'base_uri' => $this->APIEndpoint,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->getToken()
            ]
        ]);
    }


    public function setKey(): void
    {
        $this->accessToken  = config('nubapi.api_token');
    }


    public  function  setEndpoints(): void
    {
        $this->APIEndpoint = config('nubapi.host');
    }

    /**
     * @return string
     */
    public function timeout()
    {
        return config('nubapi.options.request_timeout', 5);
    }


    protected function getToken()
    {
        $token = config('nubapi.api_token');

        if (!$token) {
            $this->throwUnlessProduction(
                new ConfigurationException('No Nubapi token configured.')
            );
        }

        return $token;
    }


    public function getAccountDetails($accountNumber, $bankCode)
    {
        $this->url = $this->APIEndpoint . '/verify';
        $this->params = ['account_number' => $accountNumber, 'bank_code' => $bankCode];
        return $this->__execute('GET');

    }


    private function __execute(string $requestType = 'POST')
    {

        $options = [];

        if (!empty($this->params)) {
            $options['query'] = array_filter($this->params);
        }


       $response = $this->client->request($requestType, $this->url, $options);


        return json_decode($response->getBody(), true);

    }


}




