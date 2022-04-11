<?php

namespace App\Exports;

use App\Exports\Sheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class InvoicesExport implements WithMultipleSheets
{
    use Exportable;

    protected $datas, $title;

    public function __construct(array $datas, array $title)
    {
        $this->datas = $datas;
        $this->title = $title;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        foreach ($this->datas as $key => $value) {
            $sheets[] = new Sheet($value, $this->title[$key]);
        }

        return $sheets;
    }
}
