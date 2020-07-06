<?php

namespace App\Http\Controllers;

use App\content;
use App\courses_ev;
use App\tcontroller;
use Illuminate\Http\Request;

class contentedit extends Controller
{

    public function index()
    {
     //   echo "hello";
        $request = request("requests");

        $task = content::where('id', $request)->get();
        return view('courses.edit', compact('task'));
    }
    public function view()
    {
        $request = request('request');

        $task = tcontroller::where('cname', $request)->get();
        if (count($task) > 0) {


            return view('courses.cont', compact('task',));
        } else {

            return view('courses.cont', compact('task'));
        }



        // 

    }

    public function update()
    {

        $request = request("id");

        $ref2 = request('content');

        $ref3 = request('cded');
        $ref4 = request('cnt');
        $ref5 = request('status');
        $ref6 = request('date');
        
        if ($ref4 == null) {

            $request = request("id");

            $ref2 = request('content');

            $ref3 = request('cded');
            $ref4 = request('cnt');
            $ref5 = request('status');
            $ref6 = request('date');


            $requestw = content::where('id', $request)->update(['content' => $ref2]);
            $requeste= content::where('id', $request)->update(['Cdesc' => $ref3]);
            $requestr = content::where('id', $request)->update(['Appr' => $ref5]);

            echo '<div class="tex" style="background-color:green; color:white;font-size:25px;">Success </div>';
        } else {

            // $name = request('course');
            $mat = $ref4->getClientOriginalName();
            //  echo $mat;
            $image_name = $mat;
            //.'.'.$ref4->getClientOriginalExtension();

            $allowed = array(
                "mp3", "zip", "dir", "doc", "docm", "DOC", "docx", "DOCX",
                "pptm", "ppsx", "pptx", "xlsx", "xltx", "xlsm",
                "txt", "mp3", "VGM", "MP3", "wav", "WAV", "AVI", "MPEG", "MPG",
                "ppt", "PPT", "PDF", "pdf", "MP4", "FLV", "jpg",
                "JPG", "PNG", "jpeg", "bmp", "gif", "png"
            );

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {

                $ref4->move(public_path('course-contents/files'),  $image_name);

                // echo $ref;
                //echo $ref2;
                //  echo $ref3;
                //  echo $ref4;

                $requests = content::where('id', $request)->update(['content' => $ref2]);
                $requestd = content::where('id', $request)->update(['cdesc' => $ref3]);
                $requestf = content::where('id', $request)->update(['cont_fil' => $image_name]);
                $requestg = content::where('id', $request)->update(['Appr' => $ref5]);



                echo '<div class="tex" style="background-color:green; color:white;font-size:25px;">Success </div>';
            } else {
                echo "wrong file type";
            }
        }
    
      
}
}