<?php

namespace App\Http\Controllers;

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
}
