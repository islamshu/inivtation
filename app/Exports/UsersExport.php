<?php

namespace App\Exports;

use App\Userinv;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Userinv::get(['name','email','phone','people_number']);
    }
}
