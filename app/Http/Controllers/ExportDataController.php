<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Exports\InvoicesExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Repository\Guzzle\GuzzleQuery;

class ExportDataController extends Controller
{
    public function index(Request $request)
    {
        $codigo = $this->getCodigo();
        $nome = $this->getNome();

        $datef = date('d/m/Y', strtotime($request->from));
        $datet = date('d/m/Y', strtotime($request->to));

        $export = new InvoicesExport($this->query($codigo, $datef, $datet), $nome);

        return Excel::download($export, 'relatario de erros '. $request->from . ' - ' . $request->to .'.xlsx');
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

