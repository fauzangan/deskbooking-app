<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mareadetail extends Model
{
    use HasFactory;

    protected $guarded = ['intareadetailid'];
    protected $primaryKey = 'intareadetailid';

    public function header(){
       return $this->belongsTo(Mareaheader::class, 'intareaheaderid');
    }
}
