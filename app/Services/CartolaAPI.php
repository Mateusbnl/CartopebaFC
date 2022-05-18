<?php
    namespace App\Services;
    use GuzzleHttp\Client;

    class CartolaAPI
    {
        public function listarDestaques()
        {
            $client = new Client([
                'base_uri'=> 'https://api.cartola.globo.com/',
                'timeout'=> 2.0

            ]);

            $response = $client->request('GET','/mercado/destaques');
            $destaques = json_decode($response->getBody()->getContents(),true);
            return view('jogadores/index',compact('destaques'));
        }
    }

?>