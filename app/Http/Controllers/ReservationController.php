<?php

namespace App\Http\Controllers;

use App\Models\Mareadetail;
use App\Models\Mareaheader;
use App\Models\Mlocation;
use App\Models\Treservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Transaction.index', [
            'reservations' => Treservation::where('txtinserted', auth()->user()->username)->where('bitactive', 1)->where('txtreservationstatus', '!=', 'cancel')->where('txtreservationstatus', '!=', 'checkout')->get(),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $url = $request->id;
        return view('Transaction.detail', [
            'id' => $url,
            'details' => Mareadetail::where('txtstatus', 'available')->get(),
            'locations' => Mlocation::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->intareadetailid;
        $rules = $request->validate([
            'dtreservation' => ['required'],
            'txtinserted' => ['required'],
            'intareadetailid' => ['required']
        ]);

        $booking = [
            'txtstatus' => 'unavailable'
        ];

        Treservation::create($rules);
        Mareadetail::where('intareadetailid', $id)->update($booking);
        return redirect('/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'txtreservationstatus' => ['required'] 
        ];

        $validatedData = $request->validate($rules);

        Treservation::where('intreservationid', $id)->update($validatedData);
        return redirect('/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createDetail(Request $request, $id){
        return view('Transaction.create', [
            'header' => Mareaheader::where('intareaheaderid', $id)->first(),
            'details' => Mareadetail::where('intareaheaderid', $id)->where('txtstatus', 'available')->get()
        ]);
    }
}
