<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mareaheader extends Model
{
    use HasFactory;

    protected $guarded = ['intareaheaderid'];
    protected $primaryKey = 'intareaheaderid';


    public function areaDetail(){
        return $this->hasMany(Mareadetail::class, 'intareaheaderid');
    }

    public function location(){
        return $this->belongsTo(Mlocation::class, 'intlocationid');
    }
}
