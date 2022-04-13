<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;
use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Repository\Guzzle\GuzzleQuery;

class CompanyComponent extends Component
{
    public $from, $to;

    public function mount()
    {
        $this->from = date('2022-01-10');
        $this->to = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.company-component');
    }

    public function report()
    {
        $codigo = $this->getCodigo();
        $nome = $this->getNome();

        $this->from = date('d/m/Y', strtotime($this->from));
        $this->to = date('d/m/Y', strtotime($this->to));

        $export = new InvoicesExport($this->query($codigo, $this->from, $this->to), $nome);

        return Excel::download($export, 'relatario de erros.xlsx');
    }

    public function query($codigo, $from, $to)
    {
        $query = new GuzzleQuery();
        return $query->querySoc($codigo, $from, $to);
    }

    public function getCodigo()
    {
        $codigo = [];

        $companies = Company::all();

        foreach ($companies as $value) {
            array_push($codigo, $value->codigo);
        }

        return $codigo;
    }

    public function getNome()
    {
        $nome = [];

        $companies = Company::all();

        foreach ($companies as $value) {
            array_push($nome, $value->empresa);
        }
        return $nome;
    }
}
