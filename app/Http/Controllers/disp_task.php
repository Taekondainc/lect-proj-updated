<?php

namespace App\Http\Controllers;


use App\content;
use App\tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class disp_task extends Controller
{
    public function show(tasks $tasks)
    {
        $error = "";
        $added = "";
        $task = tasks::where('userid', auth()->id())->get();
        return view('projects.task', compact('task', 'error', 'added'));
        //
        //dump($projects);
        //$projects=auth()->user()->projects;
        //
    }


    public function index(tasks $tasks)
    {
        $s = request('task');
        $task = tasks::where('id', $s)->get();

        //$task = tasks::where('userid', $s)->get(); 
        return view('projects.update', compact('task'));
    }
    public function update(tasks $tasks)
    {
        // $s = request('title');
        //  echo $s;
    }

    public function view(tasks $tasks)
    {
        $request = content::where("userid", auth()->id())->get();
        return view('resources.resource', compact('request'));
    }
}