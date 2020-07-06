<?php

namespace App\Http\Controllers;

use App\contentcreate;
use App\courses_ev;
use App\tcontroller;
use Illuminate\Http\Request;

class ContentcreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = request('request');
        $task = courses_ev::where('id', $request)->get();
        foreach ($task as $request) {
            $t = $request->cname;

            //echo $t;
            $tasks = tcontroller::where('cname', $t)->get();

            return view('courses.content', compact('task', 'tasks'));
        }
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
        $stan = request("material");
      if (!empty($stan)){
        $request = new contentcreate();
        $request->userid = Request('id');
        $request->cname = request('ccode');
        $request->content = request('ctitle');
        $request->Cdesc = request('comments');
        // $request->cont_fil=request('material');
        $stan = request("material");
        $mat = request("material")->getClientOriginalName();
        $material = $mat . '.' . $stan->getClientOriginalExtension();
        $request->cont_fil = $mat;
        $allowed = array(
            "mp3", "zip", "dir", "doc", "docm", "DOC", "docx", "DOCX",
            "pptm", "ppsx", "pptx", "xlsx", "xltx", "xlsm",
            "txt", "mp3", "VGM", "MP3", "wav", "WAV", "AVI", "MPEG", "MPG",
            "ppt", "PPT", "PDF", "pdf", "MP4", "FLV", "jpg",
            "JPG", "PNG", "jpeg", "bmp", "gif", "png"
        );

        $file_ext = pathinfo($mat, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {

            $stan->move(public_path('course-contents/files'),  $mat);
        } else {
            echo "error";
        }
        $request->Appr = request('status');
        $request->date = request('datc');
        $request->save();
        echo "success";}else{
            $request = new contentcreate();
            $request->userid = Request('id');
            $request->cname = request('ccode');
            $request->content = request('ctitle');
            $request->Cdesc = request('comments');
            $request->Appr = request('status');
            $request->date = request('datc');
            $request->cont_fil ="null";
            $request->save();
            echo "success";  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contentcreate  $contentcreate
     * @return \Illuminate\Http\Response
     */
    public function show(contentcreate $contentcreate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contentcreate  $contentcreate
     * @return \Illuminate\Http\Response
     */
    public function edit(contentcreate $contentcreate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contentcreate  $contentcreate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contentcreate $contentcreate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contentcreate  $contentcreate
     * @return \Illuminate\Http\Response
     */
    public function destroy(contentcreate $contentcreate)
    {
        //
    }
}
