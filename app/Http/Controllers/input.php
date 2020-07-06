<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inputcontroller;
use App\tasks;

class input extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //  $request= new inputcontroller();
        // $request->connection=request('text');
        // $request->save();
        // return view('projects.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //       $rew = request('tasks');
        $ref = request('id');
        $ref2 = request('titled');
        $ref3 = request('task');
        $ref4 = request('date');
        // echo $ref;
        //echo $ref2;
        //  echo $ref3;
        //  echo $ref4;

        $request = tasks::where('id', $ref)->update(

            ['Title' => $ref2]
        );

        $request = tasks::where('id', $ref)->update(['Task' => $ref3]);

        $request = tasks::where('id', $ref)->update(['date' => $ref4]);
        if ($request == true) {
            echo "success";
        } else {
            echo "Error";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
