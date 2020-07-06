<?php

namespace App\Http\Controllers;

use App\tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
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
     */ public function store(Request $request)
    {
    $request = new tutorial();
      
       
    
        $ref4 = request('files');
        // $name = request('course');
        $mat = $ref4->getClientOriginalName();
        //  echo $mat;
        $image_name = $mat;
        //.'.'.$ref4->getClientOriginalExtension();

        $allowed = array(
          "mp3" ,"zip" ,"dir" ,"doc", "docm","DOC", "docx","DOCX",
            "pptm", "ppsx" ,"pptx", "xlsx", "xltx","xlsm",
             "txt", "mp3","VGM","MP3","wav","WAV","AVI","MPEG","MPG",
        "ppt","PPT","PDF","pdf", "MP4", "FLV","jpg", 
        "JPG", "PNG", "jpeg", "bmp", "gif", "png",
          "PDF", "pdf" ,"PPT","ppt","DOC","doc","DOCX","docx"
        );

        $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {

            $ref4->move(public_path('course-contents/files/tutorials/'),  $image_name);

            // echo $ref;
            //echo $ref2;
            //  echo $ref3;
            //  echo $ref4;
            $request->uid = auth()->id();
            $request->cname = request('course');
            $request->description = request('description');
            $request->tutorials = $image_name;
            $request->save();

 echo '<div style="background-color:green; color:white;font-size:25px;">Successfully '
  .  $mat . ' Upload </div>';
   $requests = tutorial::where('uid', auth()->id())->get();
  return view('display.tut',compact('requests'));
        } else {
            echo "wrong file type";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(tutorial $tutorial)
    {
        $requests = tutorial::where('uid', auth()->id())->get();
        return view('display.tut', compact('requests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(tutorial $tutorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tutorial $tutorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(tutorial $tutorial)
    {
        $requestd=request('request');
        $request = tutorial::where('id', $requestd)->delete();
         $requests = tutorial::where('uid', auth()->id())->get();
        return view('display.tut', compact('requests'));
    }
}
