<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {

        $this->client = $client;
    }
    public function getApiData() : array
    {
        $response = $this ->client ->request(
            'GET',
            'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?earth_date=2015-6-3&api_key=PM8NUDxIhFiuh7BLm7exY0pyNAWrkADo7OcFXbLL');
        return $response->toArray();
    }


}