<?php

namespace App\Exports;

use App\Models\student;
use App\Models\major;
use Maatwebsite\Excel\Concerns\FromCollection;

class studentsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return student::select('students.*','majors.name as subject')
        ->join('majors','students.major_id','majors.id')
        ->get();
         //return student::all();
    }
}
