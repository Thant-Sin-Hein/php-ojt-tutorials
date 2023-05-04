<?php

namespace App\Imports;

use App\Models\student;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class studentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $student = new student([
            'name'=>$row[1],
            'major_id'=>$row[2],
            'phone'=>$row[3],
            'email'=>$row[4],
            'address'=>$row[5],
        ]);

        DB::table('students')->where('email',$student->email)->delete();
        return $student;
    }
}

