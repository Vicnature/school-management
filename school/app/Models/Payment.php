<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='payments';
    protected $primaryKey='id';
    protected $fillable = [
        'enrolment_id',
        'paid_date',
        'amount',];

    use HasFactory;

    public function enrolment(){
        return $this->belongsTo(Enrolment::class);
    }
}
