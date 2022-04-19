<?php

namespace App\Repository\Guzzle;

use GuzzleHttp\Client;

class GuzzleQuery
{
    protected $client, $data = [];

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => "https://ws1.soc.com.br/WebSoc/exportadados",
        ]);
    }

    public function querySoc($codigo, $from, $to)
    {
        foreach ($codigo as $value) {
            $response = $this->client->request('GET', "?parametro={'empresa':'143453','codigo':'147200','chave':'f0daba61dda7b7e5fabc','tipoSaida':'txt','empresaTrabalho':". $value .",'dataInicio':". '"' .$from. '"' .",'dataFim':". '"'. $to. '"' .",'status':'1','layout':'0','unidade':'0','ambiente':'1'}");
            $response = $response->getBody()->getContents();
            $response = $this->removeSymbol($response);
            $response = $this->formateResponse($response);
            if (sizeof($response) > 2) {
                array_push($this->data, $response);
            }
        }

        return $this->data;
    }

    public function removeSymbol($response)
    {
        $symbol = ['[',']', '{', '}', '"', 'Nao', 'Sim', 'CARGAINICIAL'];

        for ($i=0; $i <sizeof($symbol) ; $i++) {
            $response = str_replace($symbol[$i], "", $response);
        }

        return $response;
    }

    public function formateResponse($response)
    {
        $array = explode(';', $response);
        $array = array_splice($array, 18);
        $array = array_chunk($array, 18);

        return $array;
    }
}
