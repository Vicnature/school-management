<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table='courses';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'syllabus',
        'duration',];

    use HasFactory;



    // fetches the duration and concatinates the term months beside it
    Public function duration(){
        return $this->duration. " Month(s)";
    }
}
