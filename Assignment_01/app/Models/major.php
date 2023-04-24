<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class major extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','created-at','updated-at'];

    //public function student()
    //{
    //    return $this->hasOne(student::class,'major_id','id');
    //}
}
