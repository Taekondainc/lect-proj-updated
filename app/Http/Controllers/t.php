<?php

namespace App\Http\Controllers;

use App\courses_ev;
use App\register;
use App\tasks;
use App\tcontroller;
use App\User;
use App\inputcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class t extends Controller
{
    public function index()
    {
        // $request = request('id');
        //  echo $request;
        //   $task = tcontroller::where('id', $request)->get();

        //   return view('courses.app', compact('task'));
        $rew = request('tasks');
        $t = tasks::where('id', $rew)->delete();
        echo "deleted";
    }
    public function view()
    {
        $count = auth()->id();
        $request = courses_ev::where("cowner", $count)->get();
        return view('display.count', compact('request'));
    }
    public function store()
    {


        $requ = request('password');
        $req = request('name');
        $rea = request('email');

        if (!empty($requ)  && !empty($req) && !empty($rea)) {


            $reqst = request('password');
            $reqet = request('name');
            $requt = request('email');
            $t = Hash::make($reqst);
            $request = User::where('id', auth()->id())->update(['name' => $reqet]);

            $request1 = User::where('id', auth()->id())->update(['email' => $requt]);


            $request2 = User::where('id', auth()->id())->update(['password' => $t]);


            echo $reqet . '   Profile Updated';
            //   $request = grades::where('uid', auth()->id())->get(); 
            //  return view('display.trsubm', compact('request'));

            //   return view('courses.app', compact('task'));


        } elseif (!empty($req) && !empty($rea)) {
            echo 'email and name';
            $requ = request('password');
            echo $requ;
            $req = request('name');
            echo $req;
            $rea = request('email');
            echo $rea;
        } else {
            echo 'all fields empty';
        }
    }

    public function avatar()
    {
        $check = request('file');
        if (!empty($check)) {
            $t = inputcontroller::where('uid', auth()->id())->get();
            if (count($t) < 1) {


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

                    $ref4->move(public_path('course-contents/files/avatar'),  $image_name);
                    $request = new inputcontroller();
                    $request->uid = auth()->id();
                    $request->file = $mat;
                    $request->save();
                    echo "Avatar Created";
                } else {
                    echo  "wrong file type.";
                }
            } else {
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

                    $ref4->move(public_path('course-contents/files/avatar'),  $image_name);

                    $request1 = inputcontroller::where('uid', auth()->id())->update(['file' => $mat]);

                    echo "Avatar Updated";
                } else {
                    echo  "wrong file type.";
                }
            }
        } else {
            echo "Empty... Add File before submiting";
        }
    }
    // $request = request('id');
    //  echo $request;
    //   $task = tcontroller::where('id', $request)->get();

    //   return view('courses.app', compact('task'));
    public function get()
    {
        // $request = request('id');
        //  echo $request;
        //   $task = tcontroller::where('id', $request)->get();

        //   return view('courses.app', compact('task'));
        $rew = request('nmg');

        $t = courses_ev::where('cname', $rew)->delete();
        echo "deleted";
    } 
    

}
