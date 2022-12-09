<?php

namespace App\Http\Controllers;

use App\Models\Mareadetail;
use App\Models\Mareaheader;
use App\Models\Mlocation;
use App\Models\Msite;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index()
    {
        return view('Master.Marea.index', [
            'mareaheaders' => Mareaheader::all() 
        ]);
    }


    public function create(Request $request)
    {
        $url = $request->id;
        return view('Master.Marea.detail', [
            'detail' => $url,
            'sites' => Msite::all(),
            'locations' => Mlocation::all()
        ]);
    }

    public function store(Request $request)
    {
        //
    }

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
        //
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
    
}
