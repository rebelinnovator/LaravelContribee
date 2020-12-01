<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Message;


class HomeController extends Controller
{
    //
    public function index(){
        $countries = Country::all();
        return view('home.index',['countries'=>$countries]);
    }

    public function addMessage(Request $request)
    {
        $msg = Message::Create($request->all());
        if( $msg ){
            return response()->json(['msg' => $msg]);
        }

    }

}
