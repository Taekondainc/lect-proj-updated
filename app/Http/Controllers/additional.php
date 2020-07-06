<?php

namespace App\Http\Controllers;

use App\additional;

use App\content;
use Illuminate\Http\Request;



class additonal extends Controller
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
        $request = new additional();

        $ref4 = request('files');
        // $name = request('course');
        $mat = $ref4->getClientOriginalName();
        echo $mat;
        $image_name = $mat;

        $allowed = array(
            "mp3", "zip", "dir", "doc", "docm", "DOC", "docx", "DOCX",
            "pptm", "ppsx", "pptx", "xlsx", "xltx", "xlsm",
            "txt", "mp3", "VGM", "MP3", "wav", "WAV", "AVI", "MPEG", "MPG",
            "ppt", "PPT", "PDF", "pdf", "MP4", "FLV", "jpg",
            "JPG", "PNG", "jpeg", "bmp", "gif", "png",
            "PDF", "pdf", "PPT", "ppt", "DOC", "doc", "DOCX", "docx"
        );

        $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {

            $ref4->move(public_path('course-contents/files/add'),  $image_name);

            $request->cid = request('id');
            $request->uid = auth()->id();
            $request->cname = request('coursename');
            $request->content = request('lecture');
            $request->name = request('noc');
            $request->description = request('descript');
            $request->file = $image_name;
            $request->date = request('date');

            $request->save();
            $ref4 = request('files');
            // $name = request('course');
            $mat = $ref4->getClientOriginalName();
            echo '<div style="background-color:green; color:white;font-size:25px;">Successfully '
                .  $mat . ' Upload </div>';
        } else {
            echo "wrong file type";
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\additonal  $additonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, additional $additional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\additonal  $additonal
     * @return \Illuminate\Http\Response
     */
    public function destroy($additonal)
    {
        $additional = request('requests');
        $request = additional::where('cid', $additional)->delete();
        $requests = content::where('id', $additional)->delete();
        echo  "Deleted";
    }
    public function delete(additional $additional)
    {
        $additional = request('requests');
        $request = additional::where('id', $additional)->delete();

        echo  "Deleted";
    }
    public function view(additional $additonal)
    {
        $additional = request('requests');
        $request = additional::where('cid', $additional)->get();
        return view('display.content', compact('request'));
    }
}
