<?php

namespace App\Exports;

use App\Contacto;
use Maatwebsite\Excel\Concerns\FromCollection;

class MensajesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contacto::all();
    }
}
