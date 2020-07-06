<?php

namespace App\Http\Controllers;

use App\grades;
use App\gradfile;
use App\tasks;
use Illuminate\Http\Request;


class taskse extends Controller
{
    public function index()
    {
        $task = tasks::where('userid', auth()->id())->get();
        return view('projects.taska', compact('task'));
        echo "hello";
    }
    public function store(Request $request)
    {
        $request = new grades();
        $request->uid = auth()->id();
        $request->cname = request('course');
        $request->student = request('name');
        $request->submission = request('submission');
        $request->gos = request('grade');
        $request->goc = request('weight');
        $request->date = request('datename');
        $request->save();
        echo "Grade saved";
    }
    public function get(Request $request)
    {
        $request = request('course');
        $request = grades::where('cname', $request)->get();
        return view('display.g', compact('request'));
    }
    public function gett(Request $request)
    {
        $request = request('subm');
        $requests = request('course');
        $request = grades::where('submission', $request)->where('cname', $requests)->where('uid', auth()->id())->get();
        return view('display.subm', compact('request'));
    }
    public function destroy(Request $request)
    {
        $request = request('item');
        $request = grades::where('id', $request)->delete();
        $request = grades::where('uid', auth()->id())->get();
        return view('display.trsubm', compact('request'));
    }
    public function deled(Request $request)
    {
        $request = request('item');
        $request = gradfile::where('id', $request)->delete();
        $request = gradfile::where('uid', auth()->id())->get();
        return view('display.filegrad', compact('request'));
    }
    public function edd(Request $request)
    {
        $request = request('item');
        $request = grades::where('id', $request)->get();
        return view('display.edit', compact('request'));
    }
    public function view(Request $request)
    {

        $request = grades::where('uid', auth()->id())->get();
        return view('display.g', compact('request'));
    }
    public function file(Request $request)
    {

        $request = gradfile::where('uid', auth()->id())->get();
        return view('display.filegrad', compact('request'));
    }
    public function upgrade(Request $request)
    {
        $ref = request('id');
        $requ = request('course');
        $request = grades::where('id', $ref)->update(['cname' => $requ]);
        $reque = request('name');
        $request = grades::where('id', $ref)->update(['student' => $reque]);
        $reques = request('submission');
        $request = grades::where('id', $ref)->update(['submission' => $reques]);
        $requestx = request('grade');
        $request = grades::where('id', $ref)->update(['gos' => $requestx]);
        $request1 = request('weight');
        $request = grades::where('id', $ref)->update(['goc' => $request1]);
        $request = grades::where('uid', auth()->id())->get();
        return view('display.trsubm', compact('request'));
    }
    public function enter(Request $request)
    {
        $request = new gradfile();



        $ref4 = request('file');
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
            "JPG", "PNG", "jpeg", "bmp", "gif", "png",
            "PDF", "pdf", "PPT", "ppt", "DOC", "doc", "DOCX", "docx"
        );

        $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {

            $ref4->move(public_path('course-contents/files/grades/'),  $image_name);

            // echo $ref;
            //echo $ref2;
            //  echo $ref3;
            //  echo $ref4;
            $request->uid = auth()->id();
            $request->cname = request('course');
            $request->file = $image_name;
            $request->size = request('size');
            $request->sub = request('sub');
            $request->grd = request('grd');

            $request->save();

            $request = gradfile::where('uid', auth()->id())->get();
            return view('display.filegrad', compact('request'));
        } else {
            echo "wrong file type";
        }
    }
    public function edittt()
    {

        $request = request("tasks");

        $taskss = tasks::where('id', $request)->get();
        return view('projects.formtask', compact('taskss'));
    }
}
