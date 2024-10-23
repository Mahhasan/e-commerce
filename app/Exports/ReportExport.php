<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class ReportExport implements FromCollection
{
    protected $report;

    public function __construct($report)
    {
        $this->report = $report;
    }

     public function collection()
    {
        // You need to return a collection here based on your $report data
        // For example, assuming $this->report is a collection, you can do:
        return $this->report;
    }

}
