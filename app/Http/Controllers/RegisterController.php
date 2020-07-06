<?php

namespace App\Http\Controllers;

use App\courses_ev;
use App\messagelect;
use App\register;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $combined = $rtt.$restt;
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
 $request = request('item');
 echo $request;
 $request = register::where("cname", $request)->get();
 return view("messages.lecture", compact('request'));
    }
   
    public function search()
    {
        $request = request('td');

        // $query=courses_ev::where("cname", 'like', '%' . $request . '%')->get();
        $query = courses_ev::where("cname", 'like', '%' . $request . '%')->get();
        return view("display.coursec", compact('query'));
    }
      public function messagesearch()
    {
        $request = request('td');
        echo $request;
        $query = User::where("name", 'like', '%' . $request . '%')->get();

        return view('messages.users', compact('query'));
    }
}
