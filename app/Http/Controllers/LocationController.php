<?php

namespace App\Http\Controllers;

use App\Models\Msite;
use App\Models\Mlocation;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show(){
        return view('Master.Mlocation.index', [
            'locations' => Mlocation::all()
        ]);
    }

    public function detail(){
        return view('Master.Mlocation.detail', [
            'details' => Mlocation::all()
        ]);
    }

    public function detailStore(){
        
    }
}
