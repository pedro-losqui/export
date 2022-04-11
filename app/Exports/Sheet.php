<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Sheet implements FromArray, WithTitle, WithHeadings
{
    protected $value, $title;

    public function __construct(array $value, $title)
    {
        $this->value = $value;
        $this->title = $title;
    }

    public function array(): array
    {
        return [
            $this->value
        ];
    }

    public function title(): string
    {
        return $this->title;
    }

    public function headings(): array
    {
        return [
            "EVENTO",
            "DATAGERACAO",
            "UNIDADE",
            "NOMEUNIDADE",
            "CODIGOGED",
            "CODIGOARQUIVOGED",
            "NOMEARQUIVO",
            "FUNCIONARIO",
            "NOMEFUNCIONARIO",
            "STATUSEVENTO",
            "CODIGOLOTE",
            "NRRECIBO",
            "IDARQUIVO",
            "ERRO",
            "SEQUENCIAL",
            "AMBIENTEPRODUCAO",
            "CODIGOERROESOCIAL",
            "DATAINICIOCONDICAO",
        ];
    }
}

