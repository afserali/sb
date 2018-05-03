<?php
namespace App\Exports;
use App\Models\Port;

use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
	
    public function collection()
    {
        return Port::all();
    }
}
