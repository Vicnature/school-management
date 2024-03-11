<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Batch extends Model
{
    protected $table='batches';
    protected $primaryKey='id';
    protected $fillable = [
        'name',
        'course_id',
        'start_date',];

    use HasFactory;


    //establishes a foreign key relationship with the course model for every batch model instance created.
    // the method can now access all methods and properties in the course class.

    public function course(){
        return $this->belongsTo(Course::class);
    }


}
