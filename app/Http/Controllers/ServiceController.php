<?php

namespace App\Http\Controllers;
use App\Models\service;
use App\Models\complains;
use App\Models\escalations;
use App\Models\officers;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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

        $today=(date("Y-m-d"));
        $yesterday=date('Y-m-d',strtotime("-1 days"));
        // weekly dates
        $monday = date('Y-m-d', strtotime('next Monday -1 week', strtotime('this sunday')));
        $startdate= date('l d F Y', strtotime('next Monday -1 week', strtotime('this sunday')));

        $friday = date('Y-m-d', strtotime('next Monday -1 week + 4 days', strtotime('this sunday')));
        $enddate = date('l d F Y', strtotime('next Monday -1 week + 4 days', strtotime('this sunday')));

        //current monthly dates
        $now = Carbon::now();
        $startOfMonth = $now->startOfMonth()->format('Y-m-d');
        $startdate = $now->startOfMonth()->format('l d F Y');//for display
        $endOfMonth = $now->endOfMonth()->format('Y-m-d');
        $enddate = $now->endOfMonth()->format('l d F Y');// for display

        // last month
        $lastmonthstart = new Carbon('first day of last month');
        $lastmonthend = new Carbon('last day of last month');

        // current year
       
        $startOfYear = $now->copy()->startOfYear();
        $endOfYear   = $now->copy()->endOfYear();

        //return $startOfYear;
       


        $todayfilters = ['service_date' => $today];
        $yesterdayfilters = ['service_date' => $yesterday];

        $tally=service::where($todayfilters)->count();// today
        $tally=service::whereDate('service_date', '=', date('Y-m-d'))->count();// today
        $jana=service::whereDate('service_date', '=', date('Y-m-d',strtotime("-1 days")))->count();// yesterday
        $weekly=service::wherebetween('service_date', [$monday, $friday])->count();
        $thismonth=service::wherebetween('service_date', [$startOfMonth, $endOfMonth])->count();
        $lastmonth=service::wherebetween('service_date', [$lastmonthstart, $lastmonthend])->count();
        $yearly=service::wherebetween('service_date', [$startOfYear, $endOfYear])->count();

        // $stations = DB::table('entry')
        //       ->select(DB::raw('count(station) as Total, station, application_date'))
        //       ->wherebetween('application_date', [$monday, $friday])
        //       ->groupBy('station')
        //       ->orderBy('Total','Desc')
        //       ->get();

        


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
        // $input = $request->all();
        //return $input;
        $service_date = date('Y-m-d H:i:s');
        $status="OPEN";
         //Insert data into database
         $complaindata = new complains;
         $complaindata->date =  $service_date;
         $complaindata->task_no = $request->taskno;
         $complaindata->received_from = $request->officer;
         $complaindata->task = $request->task;
         $complaindata->status = $status;
         $complaindata->officer = $request->officer;
         $complaindata->station = $request->station;
         $complaindata->origin = "portal";

         //return $agentuser;
         $save = $complaindata->save();

        
         if ($save){
             return back()
                 ->with('success','Complain registered successfully received.');
         }
         else{
             return back()
             ->with('failure','Error occured.');
         }

    }

    public function login()
    {
        return view('auth.login');
    }
}
