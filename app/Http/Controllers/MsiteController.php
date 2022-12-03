<?php

namespace App\Http\Controllers;

use App\Models\Msite;
use Illuminate\Http\Request;

class MsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Layouts.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Msite  $msite
     * @return \Illuminate\Http\Response
     */
    public function show(Msite $msite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Msite  $msite
     * @return \Illuminate\Http\Response
     */
    public function edit(Msite $msite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Msite  $msite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msite $msite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Msite  $msite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msite $msite)
    {
        //
    }
}
