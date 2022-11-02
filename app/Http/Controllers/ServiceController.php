<?php

namespace App\Http\Controllers;
use App\Models\service;
use App\Models\complains;
use App\Models\escalations;
use App\Models\officers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function index()
    {


        $username="Brian Chemase";
        $dept="Marketing And Communication";
        $station="Eldoret TSO";

        $tally=25;
        $jana=10;
        $weekly=15;
        $thismonth=15;
        $lastmonth=15;
        $yearly=15;

        


        return view('agents.dashboard', compact('username','dept','station','tally','jana','weekly','thismonth','lastmonth','yearly'));
    }
    public function service()
    {
        $username="Brian Chemase Anikayi";
        $dept="Marketing And Communication";
        $station="Eldoret TSO";



        return view('agents.register', compact('username','dept','station'));
    }
    public function storeservice(Request $request)
    {
        //  $input = $request->all();
        // return $input;
        $service_date = date('Y-m-d H:i:s');
        $service= new service(
            [
                "pin"=>$request->pin,
                "names"=>$request->taxpayername,
                "email"=>$request->email,
                "phone"=>$request->phone,
                "changed_phone"=>$request->phoneupdate,
                "changed_email"=>$request->emailchange,
                "category"=>$request->options,
                "specificcategory"=>$request->choices,
                "officer"=>$request->officer,
                "region"=>$request->region,
                "station"=>$request->station,
                "workstation"=>$request->workstation,
                "service_date"=>$service_date,
            ]
        );
        $service->save();
        if ($service){
            return back()
                ->with('success','Service successfully received.');
        }
        else{
            return back()
            ->with('failure','Error occured.');
        }

    }

    public function complaints()
    {
        $username="Brian Chemase Anikayi";
        $dept="Marketing And Communication";
        $station="Eldoret TSO";



        return view('agents.complains', compact('username','dept','station'));
    }
    public function storecomplain(Request $request)
    {
         $input = $request->all();
        return $input;
    }

    public function login()
    {
        return view('auth.login');
    }
}
