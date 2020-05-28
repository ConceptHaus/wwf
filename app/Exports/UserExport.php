<?php

namespace App\Exports;

use App\User;
use App\UserDetail;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use DB;

class UserExport implements WithHeadings,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($headings)
    {
        $this->headings = $headings;
    }
    public function collection()
    {
        return $this->getUsers();
    }
    public function getUsers(){
        return DB::table('users')
            ->join('user_details','users.id','user_details.id_user')
            ->select(
                'users.name',
                'users.email',
                'users.phone',
                'user_details.empresa',
                'user_details.puesto',
                'user_details.sector',
                'user_details.interes',
                'user_details.consumo_electrico',
                'users.created_at'
            )->get();
    }
    public function headings() : array
    {
        return $this->headings;
    }
}
