<?php

namespace App\Http\Controllers;

use App\forum;
use App\progress;
use App\User;
use Illuminate\Http\Request;

class ForumController extends Controller
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
        $request = new forum();



        $ref4 = request('file');
        if ($ref4 != null) {

            // $name = request('course');
            $mat = $ref4->getClientOriginalName();
            //  echo $mat;
            $thy = auth()->id();
            $image_name = $thy . $mat;
            //.'.'.$ref4->getClientOriginalExtension();

            $allowed = array("jpg", "JPG", "PNG", "jpeg", "bmp", "gif", "png");

            $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if (in_array($file_ext, $allowed)) {

                $ref4->move(public_path('course-contents/files/forum/'),  $image_name);

                // echo $ref;
                //echo $ref2;
                //  echo $ref3;
                //  echo $ref4;
                $request->uid = auth()->id();
                $request->description = request('description');
                $request->topics = request('topics');
                $request->files = $image_name;
                $request->save();


                echo '<div style="background-color:green; color:white;font-size:25px;">Successfully ';
            } else {
                echo "wrong file type";
            }
        } else {
            $request->uid = auth()->id();
            $request->description = request('description');
            $request->topics = request('topics');
            $request->files = "forum.PNG";
            $request->save();
            echo '<div style="background-color:green; color:white;font-size:25px;">Successfully ';
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
        $request = new progress();
        $request->fkey = request("id");
        $re = "Participant";
        $request->anonymous = $re;
        $request->comment = request('comment');
        $request->uid = auth()->id();
        $request->save();
        $request = request("id");
        $query = progress::where("fkey", $request)->get();
        return view('display.foru', compact('query'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(forum $forum)
    {
        $request = request('vart');
        $query = forum::where("topics", $request)->get();
        foreach ($query as $key) {
            $comment = $key->id;

            $comm = progress::where("fkey", $comment)->get();
            return view('display.forumC', compact('query', 'comm'));
        }
    }
    public function show2(forum $forum)
    {
        $request = forum::count("id");
        //   $total_projects = DB::table('projects')->count();
        //   return view('summarys.summary')->with(['total' => $total_projects]);
        echo $request;
    }
    public function show6(forum $forum)
    {
        $request = request('t');
        echo $request;
        $query = forum::where("description", 'like', '%' . $request . '%')->get();

        return view('display.forum', compact('query'));
    }
    public function show7(forum $forum)
    {
        $request = request('td');
        // echo $request;
        $query = forum::where("description", 'like', '%' . $request . '%')->get();

        return view('display.forum', compact('query'));
    }
    public function show3(forum $forum)
    {
        $request = progress::count("fkey");
        //$total=User::select('users.id');
        //   $total_projects = ;
        //   return view('summarys.summary')->with(['total' => $total_projects]);
        echo $request;
    }
    public function show4(forum $forum)
    {
        $request = auth()->id();
        $query = forum::where("uid", $request)->get();
        return view('display.forum', compact('query'));
    }
    public function show5(forum $forum)
    {
        $request = request('vart');
        $query = progress::where("fkey", $request)->get();
        return view('display.foru', compact('query'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(forum $forum)
    {
        //
    }
}
