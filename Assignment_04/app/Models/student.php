<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\major;

class student extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','major_id','phone','email','address','created-at','updated-at'];

    //public function major()
    //{
    //    return $this->belongsTo(major::class);
    //}
}
