<?php

namespace App\Http\Controllers;

use App\background;
use App\messagelect;
use Illuminate\Http\Request;

class MessagelectController extends Controller
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
       $request=background::where("uid",auth()->id())->get();
       if(count($request)<1){


            $ref4 = request('file');
            $mat = $ref4->getClientOriginalName();
            echo $mat;
            $image_name = $mat;

            $allowed = array(
                "jpg",
                "JPG", "PNG", "jpeg", "bmp", "gif", "png"

            );

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
 $ref4->move(public_path('course-contents/files/backgrounds/'),  $image_name);
                $request=new background();
           $request->uid=auth()->id();
           $request->image= $mat;
              $request->save();
                echo "Background Uploaded";
            } else {
                echo  "wrong file type.";
            }  



       }else{
         
            $request = background::where('uid', auth()->id())->update(['uid' => auth()->id()]);
            
           
            $ref4 = request('file');
            $mat = $ref4->getClientOriginalName();
          
            $image_name = $mat;

            $allowed = array(
                "jpg",
                "JPG", "PNG", "jpeg", "bmp", "gif", "png"

            );

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {
                $ref4->move(public_path('course-contents/files/backgrounds/'),  $image_name);
              
                $reque = request('name');
  $request = background::where('uid', auth()->id())->update(['image' =>$image_name]);
                echo "Background Updated";
            } else {
                echo  "wrong file type.";
            } 
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\messagelect  $messagelect
     * @return \Illuminate\Http\Response
     */
    public function show(messagelect $messagelect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\messagelect  $messagelect
     * @return \Illuminate\Http\Response
     */
    public function edit(messagelect $messagelect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\messagelect  $messagelect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, messagelect $messagelect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\messagelect  $messagelect
     * @return \Illuminate\Http\Response
     */
    public function destroy(messagelect $messagelect)
    {
        //
    }
}
