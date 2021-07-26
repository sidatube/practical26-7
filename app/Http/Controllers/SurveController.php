<?php

namespace App\Http\Controllers;

use App\Models\Survay;
use Illuminate\Http\Request;

class SurveController extends Controller
{
    //
    function show(){
        $getFeedback=Survay::all();
        return view("feedbackShow",[
            "data"=>$getFeedback
        ]);
    }
    function feedback(){
        return view("practical");
    }
    function save(Request $request){
        Survay::create([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "tel"=>$request->get("tel"),
            "feedback"=>$request->get("feedback"),
        ]);
        return redirect()->to("/");
    }
}
