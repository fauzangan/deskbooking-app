<?php

namespace App\Http\Controllers;

use App\Models\Msite;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show(){
        return view('Master.Mlocation.index');
    }
}
