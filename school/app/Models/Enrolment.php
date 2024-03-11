<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
    protected $table='enrolments';
    protected $primaryKey='id';
    protected $fillable = [
        'enrol_no',
        'batch_id',
        'student_id',
        'join_date',
        'fee',];

    use HasFactory;
}
