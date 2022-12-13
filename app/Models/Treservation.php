<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Treservation extends Model
{
    use HasFactory;

    protected $guarded = ['intreservationid'];
    protected $primaryKey = 'intreservationid';

    public function areadetail(){
        return $this->belongsTo(Mareadetail::class, 'intareadetailid');
    }
}
