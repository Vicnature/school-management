<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='Students';
    protected $primaryKey='id';
    protected $fillabe=['name','address','mobile' ];
    use HasFactory;
}
