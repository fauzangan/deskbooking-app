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

    public function detail(Request $request){
        $url = $request->id;
        return view('Master.Mlocation.detail', [
            'detail' => $url
        ]);
    }

    public function getDataById(){
        $id = $_POST['id'];
        $location = Mlocation::where('intlocationid', $id)->first();
        return json_encode(array('data'=>$location));
    }
    /*
    user : user, admin
    
    */

    public function createLocation(Request $request){
        $validatedData = $request->validate([
            'intsiteid' => ['required'],
            'txtlocationname' => ['required']
        ]);
        Mlocation::create($validatedData);
        return redirect()->intended('/location');
    }

    public function updateLocation(Request $request){
        // $id = $_POST['id'];
        // $validatedData = $request->validate([
        //     'intsiteid' => ['required'],
        //     'intlocationid' => ['required'],
        //     'txtlocationname' => ['required'],
        //     'bitactive' => ['required']
        // ]);
        // Mlocation::where('intlocationid', $id)->update($validatedData);
        $lokasi = Mlocation::find($request->id);
        $lokasi->intsiteid = $request->site;
        $lokasi->txtlocationname = $request->location;
        $lokasi->bitactive = $request->active;
        $lokasi->save();
        return response()->json($lokasi);

    }
}
