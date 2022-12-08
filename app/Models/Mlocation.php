<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlocation extends Model
{
    use HasFactory;

    protected $guarded = ['intlocationid'];
    protected $primaryKey = 'intlocationid';

    public function site(){
        return $this->belongsTo(Msite::class, 'intsiteid');
    }

    public function area(){
        return $this->hasMany(Mlocation::class, 'intlocationid');
    }
}
