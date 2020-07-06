<?php

namespace App\Http\Controllers;

use App\additional;
use App\additonal;
use App\assignment;
use App\assignments;
use App\content;
use App\courses_ev;
use App\messagelect;
use App\submission;
use App\tcontroller;
use App\test;
use App\testfile;
use App\tutorial;
use Illuminate\Http\Request;

class TcontrollerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = request('requests');

        $request = request("requests");
        $task1 = courses_ev::where('id', $request)->get();
        foreach ($task1 as $request) {
            $t = $request->cname;
            //echo $t;
            $task = tcontroller::where('cname', $t)->get();
            if (count($task) > 0) {
                $tt = "";




                return view('courses.view', compact('task', 'tt'));
            } else {
                //  foreach ($task as $request) {
                //    $t = $request->id;
                //    echo $t;
                //    $t = $request->content;
                //    echo $t;
                // }
                $tt = "$t";
                $t = $request->date;

                $date = strtotime($t);
                $rt = date('d/M/Y H:i:s', $date);
                return view('courses.view', compact('task', 'tt'));
            }
        }



        //

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
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function show(tcontroller $tcontroller)
    {
        $restt = request('contenttid');
        $rtt = auth()->id();
        $combined = $rtt.$restt;
        $request = messagelect::where("messid", $combined)->get();
        //  $request = messageslect::where("uid",auth()->id())->where("recid",  $reuqestt)->get();
        // $requestt = messageslect::where("recid", auth()->id())->where("uid",  $reuqestt)->get();
        return view("messages.lecturecontent", compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function edit(tcontroller $tcontroller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tcontroller $tcontroller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tcontroller  $tcontroller
     * @return \Illuminate\Http\Response
     */
    public function destroy(tcontroller $tcontroller)
    {
        $request = request('requests');
        $request = courses_ev::where('id', $request)->delete();
if($request==true){
    echo"done!!";

}else{
    echo "error";
}
        $requests =  request('requests');
        $request = content::where('id', $requests)->delete();

        $requestd = request('requests');
        $request = submission::where('id', $requestd)->delete();

        $requestt = request('requests');
        $request = testfile::where('id', $requestt)->delete();

        $requestg = request('requests');
        $request = test::where('id', $requestg)->delete();

        $requestf = request('requests');
        $request = tutorial::where('id', $requestf)->delete();

        $requestc = request('requests');
        $request = assignment::where('id', $requestc)->delete();

        $requestv = request('requests');
        $request = assignments::where('id', $requestv)->delete();

        $requestx = request('requests');
        $request = additional::where('id', $requestx)->delete();
    }
}
