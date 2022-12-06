<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Msite;
// use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Response;

class SiteController extends Controller
{
    public function getAllData(){
        $site = Msite::get();
        return json_encode(array('data'=>$site));
    }
}
