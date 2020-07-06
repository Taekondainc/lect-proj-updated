<?php

namespace App\Http\Controllers;

use App\assignment;
use App\assignments;
use App\submission;
use App\test;
use App\testfile;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = new assignments();


        //$ref2 = request('course');

        $ref3 = request('title');
        $ref4 = request('assignment');


        // $name = request('course');
        $mat = $ref4->getClientOriginalName();
        //  echo $mat;
        $image_name = $mat;
        //.'.'.$ref4->getClientOriginalExtension();

        $allowed = array(
            "PDF", "pdf"
        );

        $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {

            $ref4->move(public_path('course-contents/files/assignment/'),  $image_name);

            // echo $ref;
            //echo $ref2;
            //  echo $ref3;
            //  echo $ref4;
            $request->uid = auth()->id();
            $request->cname = request('course');
            $request->Title = request('title');
            $request->assignment = $image_name;
            $request->save();


            echo '<div style="background-color:green; color:white;font-size:25px;">Successfully ' .  $ref3 . 'PDF Upload </div>';
        } else {
            echo "wrong file type";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $th = request('course');
        $rh = request('testn');

        $request = $th . $rh;
        $dt = submission::where("ctt", $request)->get();
        if (count($dt) < 1) {
            $request = new submission();
            $request->uid = auth()->id();
            $request->cname = request('course');
            $request->Testname = request('testn');

            $th = request('course');
            $rh = request('testn');

            $request->ctt = $th  . $rh;

            $request->qn = request('tid');
            $request->time = request('time');
            $request->date = request('date');
            $request->save();

            $th = request('course');
            $rh = request('testn');

            $request = $th  . $rh;

            $dt = submission::where("ctt", $request)->get();
            if (count($dt) == 1) {
                foreach ($dt as $dts) {
                    $t = $dts->id;
                    $request = new test();


                    $request->uid = auth()->id();
                    $request->tid = $t;
                    $th = request('course');
                    $rh = request('testn');
                    $fh = request('tid');
                    $request->ctt = $th . $fh . $rh;
                    $request->cname = request('course');
                    $request->Testname = request('testn');
                    $request->QN = request('tid');
                    $request->time = request('time');
                    $request->question = request('question');
                    $request->date = request('date');
                    $request->save();
                    $QN = request('testn');
                    $QNw = request('course');
                    echo '
<div style="background:green;color:white;font-size:20px;">

Successfully Question' . $QNw . '' . $QN . ' upload
</div>
';
                }
            } else {
                echo '
<div style="background:red;color:white;font-size:20px;">
Question exist already
</div>
';
            }
        } else {
            $th = request('course');
            $rh = request('testn');
            $fh = request('tid');
            $request = $th . $fh . $rh;

            $dtt = test::where("ctt", $request)->get();
            if (count($dtt) == 1) {
                echo '
<div style="background:red;color:white;font-size:20px;">
Question exist already
</div>
';
            } else {
                //   echo $request;
                $th = request('course');
                $rh = request('testn');

                $request = $th . $rh;
                $dt = submission::where("ctt", $request)->get();
                if (count($dt) == 1) {
                    foreach ($dt as $dts) {
                        $t = $dts->id;
                        // $t = $dts->testname;


                        $request = new test();


                        $request->uid = auth()->id();
                        $request->tid = $t;
                        $th = request('course');
                        $rh = request('testn');
                        $fh = request('tid');
                        $request->ctt = $th . $fh . $rh;

                        $request->cname = request('course');
                        $request->Testname = request('testn');
                        $request->QN = request('tid');
                        $request->time = request('time');
                        $request->question = request('question');
                        $request->date = request('date');
                        $request->save();
                        $QN = request('testn');
                        $QNw = request('course');
                        echo '
<div style="background:green;color:white;font-size:20px;">

Successfully Question ' . $QNw . '' . $QN . ' upload
</div>
';
                    }
                } else {
                    echo '
<div style="background:red;color:white;font-size:20px;">
Question exist already
</div>
';
                }
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
        $request = new testfile();


        //$ref2 = request('course');

        $ref3 = request('testn');
        $ref4 = request('question');


        // $name = request('course');
        $mat = $ref4->getClientOriginalName();
        //  echo $mat;
        $image_name = $mat;
        //.'.'.$ref4->getClientOriginalExtension();

        $allowed = array(
            "PDF", "pdf"
        );

        $file_ext = pathinfo($image_name, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {

            $ref4->move(public_path('course-contents/files/tests/'),  $image_name);

            // echo $ref;
            //echo $ref2;
            //  echo $ref3;
            //  echo $ref4;
            $request->uid = auth()->id();
            $request->cname = request('course');
            $request->Testname = request('testn');
            $request->question = $image_name;
            $request->save();


            echo '<div style="background-color:green; color:white;font-size:25px;">Successfully ' .  $ref3 . 'PDF Upload </div>';
        } else {
            echo "wrong file type";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(submission $submission)
    {

        $request = new assignment();

        $ref3 = request('title');
        //$ref2 = request('course');


        $ref4 = request('assignment');
        $request->uid = auth()->id();
        $request->cname = request('course');

        $request->Title = request('title');
        $request->assignment = request('descript');;
        $request->save();


        echo '<div style="background-color:green; color:white;font-size:25px;">Successfully ' .  $ref3 . 'PDF Upload </div>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, submission $submission)
    {

        $requestd = submission::where("uid", auth()->id())->get();

        return view('submissions.display', compact('requestd'));
    }
    public function utt(Request $request, submission $submission)
    {

        $requestd = testfile::where("uid", auth()->id())->get();

        return view('submissions.display2', compact('requestd'));
    }
    public function ult(Request $request, submission $submission)
    {
        $request = request('requests');

        $requests = testfile::where("id", $request)->delete();
        $requestd = testfile::where("uid", auth()->id())->get();

        return view('submissions.display2', compact('requestd'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(submission $submission)
    {


        $request = request('requests');
        $request4 = submission::where("id", $request)->delete();
        if ($request4 == true) {
            echo  "deleted";

            $request = request('requests');
            $requestd = test::where("tid", $request)->delete();

            $requestd = submission::where("uid", auth()->id())->get();
            if (count($requestd) == 1) {
                foreach ($$requestd as $dts) {
                    $t = $dts->id;
                }

                return view('submissions.display', compact('requestd'));
            }
        } else {
        }
    }

    public function ulta(Request $request, submission $submission)
    {
        $requestt = assignment::where('uid', auth()->id())->get();


        return view('submissions.display3', compact('requestt'));
    }

    public function delet(submission $submission)
    {


        $request = request('requests');
        $request4 = assignment::where("id", $request)->delete();
    }
    public function deletee(submission $submission)
    {


        $request = request('requests');
        $request4 = assignments::where("id", $request)->delete();
    }
    public function ddth(Request $request, submission $submission)
    {

        $requestl = assignments::where('uid', auth()->id())->get();
        return view('submissions.display4', compact('requestl'));
    }
    public function VaW(Request $request, submission $submission)
    {
        $request = request('requests');
        $requests = assignment::where('id', $request)->get();


        return view('submissions.displayalpha', compact('requests'));
    }
    public function VeW(Request $request, submission $submission)
    {
        $request = request('requests');
        $requests = submission::where('id', $request)->get();
        $request = request('requests');
        $requestsa = test::where('tid', $request)->get();


        return view('submissions.displayal', compact('requests', 'requestsa'));
    }
        
          
}
