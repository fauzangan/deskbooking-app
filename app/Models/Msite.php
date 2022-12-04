<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msite extends Model
{
    use HasFactory;

    protected $guarded = ['intSiteId'];
    protected $primaryKey = 'intSiteId';

    public function location(){
        return $this->hasMany(Mlocation::class, 'intSiteId');
    }
}
