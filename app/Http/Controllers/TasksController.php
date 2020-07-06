<?php

namespace App\Http\Controllers;

use App\content;
use App\courses_ev;
use App\messagelect;
use App\register;
use App\tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = request('id');
        $task = content::where('id', $request)->get();
        return view('courses.app', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('projects.task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = tasks::where('userid', auth()->id())->get();
        if (count($task) < 10) {

            $added = "Task Created";
            echo $added;
            $request = new tasks();
            $request->Title = request('title');
            $request->Task = request('task');

            $request->date = request('date');
            $request->userid = auth()->id();
            $request->save();
            $task = tasks::where('userid', auth()->id())->get();
            //  return view('projects.task', compact('task','error','added'));
        } else {

            echo "passed limit";
            echo '
<style>
#titled{
    background:red;
}
</style>
';

            //        return view('projects.task', compact('error','task'));
        }}
        
    public function stor(Request $request)
    {


        $request = request('Code');
        $qd = courses_ev::where("code", $request)->get();
        if (count($qd) == 1) {
            foreach ($qd as  $value) {
                $r = $value->cname;
                $request = auth()->id();
                $qd1 = register::where("uid", $request)->where('cname', $r)->get();
                if (count($qd1) < 1) {
                    $request = new register();
                    $request->uid = auth()->id();
                    $request->cname = $r;
                    $request->save();
                    echo "<div style='background:green;color:white;'>Registered</div>";
                } else {
                    echo "<div style='background:red;color:white;'>Registered Already</div>";
                }
            }
        } else {
            echo "<div style='background:red;color:white;'>Code Incorrect</div>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */





    public function show()
    {
        $request = courses_ev::WHERE("cowner", auth()->id())->get();

        //DB::table('courses')->select("cowner")->where('cowner', auth()->id())->groupBy('cowner')->get();
        // foreach ($request as $key) {
        //    $t=$key->cowner;
        //          $f = $key->cname;
        //   echo $t ;
        //   echo $f;

        /// DB::table('courses')->select("cowner")->where('cowner', auth()->id())->groupBy('cowner')->get();


        //DB::table('courses')->groupBy('cowner')->where('cowner', auth()->id())->get();


        // $request = courses_ev::WHERE("cowner",auth()->id())->get();
        // $req=$request->groupBY('cowner');
        // where("cowner", auth()->id())->groupBy('cowner')->get();
        //echo $request;


        // $query = studentreg::where("cname",$t)->distinct()->get();

        //   foreach ($query as $value) {
        //   $f=$value->uid;
        //   $c=$value->cname;
        //   $query1 = User::where("id",$f)->distinct()->get();

        //  foreach ( $query1 as $keyw ) {



        return view("messages.lecturers", compact('request'));
    }






    public function messages()
    {
        $restt = request('contenttid');
        $rtt = auth()->id();
        $combined = $rtt . $restt;
        $request = messagelect::where("messid", $combined)->get();
        //  $request = messageslect::where("uid",auth()->id())->where("recid",  $reuqestt)->get();
        // $requestt = messageslect::where("recid", auth()->id())->where("uid",  $reuqestt)->get(); 
        return view("messages.lecturecontent", compact('request'));
    }
    public function cmessages()
    {
        $request = new messagelect();
        $request->uid = auth()->id();
        $request->recid = request("uid");
        $request->message = request("message");

        $uid = auth()->id();
        $recid = request("uid");
        $request->message = request("message");
        $request->messid = $uid . $recid;

        $request->save();

        $uid = auth()->id();
        $recid = request("uid");
        $cet = $uid . $recid;
        $request = messagelect::where("messid", $cet)->get();
        return view("messages.lecturecontent", compact('request'));
    }
    public function cmss()
    {
        // $request = request('item');
        // echo $request;
        // $request = studentreg::where("cname", $request)->get();
        // return view("messages.lecture", compact('request'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\studentreg  $studentreg
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
    public function search()
    {
        $request = request('td');

        // $query=courses_ev::where("cname", 'like', '%' . $request . '%')->get();
        $query = courses_ev::where("cname", 'like', '%' . $request . '%')->get();
        return view("display.coursec", compact('query'));
    }
}
