<?php

namespace App\Http\Controllers;

use App\courses_ev;

use App\content;
use App\messagelect;
use App\tasks;
use App\User;
use Illuminate\Http\Request;

class CoursesEvController extends Controller
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


        $request = new courses_ev();
        $request->cowner = auth()->id();
        $request->cname = request('course');
        $dt = request('course');
        $task = courses_ev::where('cname', $dt)->get();
        if (count($task) < 1) {

            $request->lecturer = request('lecturer');
            $request->code = request('code');

            $name = request('course');

           $stan = request("logo");
           // $mat = request("material")->getClientOriginalName();
           // $material = $mat . '.' . $stan->getClientOriginalExtension();

          //  $stan = request('logo')->getClientOriginalName();
        //    echo $stan;
            $image_name = $name . '.' . $stan->getClientOriginalExtension();
            $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {

                $stan->move(public_path('course-contents/images'),  $image_name);
                $request->clogo = $image_name;
                $request->date = request('date');
                $request->save();
                $request->save();


                echo '<div class="tex" style="background-color:green; color:white;font-size:25px;">Course succesfuly created 
         <a href="/-courses"style="
         border:2px solid white;border-radius:4px;
         color:white;">Click here to see Content</a> </div>';
            } else {
                echo '<div class="tex" style="background-color:firebrick;color:white; font-size:25px;">
         Image Incorrect</div>';
            }

            //->store('public/course-contents/images');


            //
            //




        } else {
            echo
                '<div class="tex" style="background-color:firebrick;color:white; font-size:25px;">
Course Already Exists
</div>';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\courses_ev  $courses_ev
     * @return \Illuminate\Http\Response
     */
    public function show(courses_ev $courses_ev)
    {
       $request=messagelect::where("uid",auth()->id())->get();
        return view('display.notifications', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\courses_ev  $courses_ev
     * @return \Illuminate\Http\Response
     */
    public function edit(courses_ev $courses_ev)
    {
        $request = tasks::where("userid", auth()->id())->get();
        return view('display.testt', compact('request')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\courses_ev  $courses_ev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courses_ev $courses_ev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\courses_ev  $courses_ev
     * @return \Illuminate\Http\Response
     */
    public function destroy(courses_ev $courses_ev)
    {
        //
    }
}
