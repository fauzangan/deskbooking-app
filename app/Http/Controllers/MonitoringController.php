<?php

namespace App\Http\Controllers;

use App\Models\Treservation;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index(){
        return view('Master.Monitoring.index', [
            'reservations' => Treservation::all()
        ]);
    }
}
