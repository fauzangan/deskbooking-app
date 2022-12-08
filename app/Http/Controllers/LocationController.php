<?php

namespace App\Http\Controllers;

use App\Models\Msite;
use App\Models\Mlocation;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show()
    {
        return view('Master.Mlocation.index', [
            'locations' => Mlocation::all()
        ]);
    }

    public function detail(Request $request)
    {
        $url = $request->id;
        return view('Master.Mlocation.detail', [
            'detail' => $url
        ]);
    }

    public function getDataById()
    {
        $id = $_POST['id'];
        $location = Mlocation::where('intlocationid', $id)->first();
        return json_encode(array('data' => $location));
    }
    /*
    user : user, admin
    
    */

    public function createLocation(Request $request)
    {
        $validatedData = $request->validate([
            'intsiteid' => ['required'],
            'txtlocationname' => ['required']
        ]);
        Mlocation::create($validatedData);
        return redirect()->intended('/location');
    }

    public function updateLocation(Request $request, $id)
    {
        $data = [
            'txtlocationname' => $request->location
        ];
        Mlocation::where('intlocationid', $id)->update($data);
        return response()->json(['success' => "Berhasil melakukan update data"]);
        // return response()->json(['success'=>'Location Updated Successfully']);
        // $id = $_POST['id'];
        // // $id = $_POST['id'];
        // // $validatedData = $request->validate([
        // //     'intsiteid' => ['required'],
        // //     'intlocationid' => ['required'],
        // //     'txtlocationname' => ['required'],
        // //     'bitactive' => ['required']
        // // ]);
        // // Mlocation::where('intlocationid', $id)->update($validatedData);
        // $lokasi = Mlocation::where('intlocationid', $id)->first();
        // // $lokasi->intsiteid = $request->site;
        // // $lokasi->txtlocationname = $request->location;
        // // $lokasi->bitactive = $request->active;
        // // $lokasi->save();
        // return response()->json_encode(array('data'=>$lokasi));

        // $id = $_POST['id'];
        // $location = Mlocation::find($id);
        // // $location->intlocationid = $id;
        // // $location->txtlocationname = $_POST['location'];
        // // $location->bitactive = $_POST['active'];
        // // $location->intsiteid = $_POST['site'];
        // // $location->update([
        // //     'intlocationid' => $id,
        // //     'txtlocationname' => $_POST['location'],
        // //     'bitactive' => $_POST['active'],
        // //     'intsiteid' => $_POST['site']
        // // ]);
        // return json_encode(array('data'=>$location));
        // $location->txtlocationname = $_POST['location'];
        // $location->update();
        // $validatedData = $request->validate([
        //     'intsiteid' => ['required'],
        //     'txtlocationname' => ['required']
        // ]);
        // Mlocation::create($validatedData);
        // $location->update([
        //     'txtlocationname' => $request->lokasi
        // ]);
        

        // $validatedData = $request->validate([
        //     'intlocationid' => ['required'],
        //     'intsiteid' => ['required'],
        //     'txtlocationname' => ['required']
        // ]);
        // $id = $request->id;
        // $location = Mlocation::where('intlocationid', $id)->first();
        // $location->txtlocationname = $request->location;
        // $location->intsiteid = $request->site;
        
    }
}
