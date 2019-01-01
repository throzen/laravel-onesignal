<?php

namespace MuratDemir\OneSignal\Client;


class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $clientOptions = [
        'http_errors' => false
    ];

    public function __construct(array $config)
    {
        $this->client = new \GuzzleHttp\Client([
                'base_uri' => $config['api_url']
            ] + $this->clientOptions);
    }

}