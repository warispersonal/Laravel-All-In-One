<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomExportWithHeaders implements FromCollection, WithHeadings
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return [
            "User ID",
            'Name',
            "Email",
            "Project ID",
            "Project description"
        ];
    }
}
