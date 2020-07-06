<?php

namespace App\Http\Controllers;

use App\courses_ev;
use App\progress;
use App\tasks;
use DateTime;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "hello";
        $request = courses_ev::where('cowner', auth()->id())->get();
        foreach ($request as $key) {
            $rt = $key->cname;
            $ft = $key->date;
            $zt = $key->clogo;
            $s = $key->created_at;
            $f = date_format($s, "Y/m/d");
            // echo $ft;
            $st = $key->created_at;
            // echo  $rt;
            // echo  $ft;
            // echo  $st;
            $to_date = strtotime($st);
            $from_date = strtotime($ft);
            $day_diff = $to_date - $from_date;
            //echo $day_diff/(60*60*24);
            //echo "<br>";
            $dateOne1 = new DateTime(date('Y-m-d'));
            $dateTwo1 = new DateTime($ft);

            $diff1 = $dateTwo1->diff($dateOne1)->format("%a");
            //echo $diff1 . "<br><br>";

            $dateOne = new DateTime($ft);
            $dateTwo = new DateTime($st);

            $diff = $dateTwo->diff($dateOne)->format("%a");
            //echo  "<br>". $diff . "days<br><br>";




            $subst = $diff - $diff1;
            //echo abs($subst) . "<br><br>";

            $percent = ($diff / $diff1) * 100;
            //echo $percent . "<br><br>";

            $percent1 = ($subst / $diff1) * 100;
            //echo $percent1 . "<br><br>";
            $ttl = abs($percent1);

            // href = "{{asset('css/images/logo.png')}}"
            echo '<div id="divvy" style="width:48%;vertical-align:top;border-radius:7px;border:2px solid black;height:40%;margin:4px;">';

            echo '<div><h1 style="text-align:center;font-weight:bold;text-transform: capitalize;color:black;font-size:30px;">' . $rt . '  at  ' . number_format($ttl, 1) . '%</h1></div>
            <div class="progress" style="font-weight:bold;text-transform: capitalize;color:white;font-size:14px;">
 <div class="progress-value" style="width:' . $ttl . '%;background-color:#91ccb3;font-size:13px;color:black;">' . number_format($ttl) . '%</div>
</div><div style="margin-top:20px;">
<h4 style="text-align:center;font-weight:bold;text-transform: capitalize;color:black;font-size:14px;">Course Started at:' . $f . '.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Course Finishes at ' . $key->date . '.</h4></div></div>

';
echo '<script>if ($("html").css("background-image") != "none") { $("h1").css("color","white");$("h4").css("color","white");
    $("h4").css("letter-spacing","2px");$("h4").css("font-family","Nunito");}else{}</script>';
            //$date1=date_create($ft);
            // $date2=date_create($st);
            // $diff=date_diff($date1,$date2);
            //   echo "</br>" . $diff . "days" . "<br><br>";
            //  echo $diff->format("<br> %a <br>days");

            // $date1=  new DateTime($ft);
            // $date2 = new DateTime($st);
            //  $days  = $date2->diff($date1)->format('%d'); 
            //    $date = new DateTime(date('Y-m-d'));
            //  $days1  = $date->diff($date1)->format('%d'); 
            //   echo "</br>" . $days ."<br>";
            //   $date3 =  new DateTime($ft);

            // $date = new DateTime(date('Y-m-d'));
            //  $days2  = $date3->diff($date)->format('%d'); 
            //  echo "</br>" . $days2."days". "<br><br>";
            //$date1 = new DateTime($ft);
            //$date2 = new DateTime($st);
            //$days  = $date1->diff($date2)->format('%d');
            // echo $days;

            //$datetime1 = date_create($ft);
            //$datetime2 = date_create($st);
            //$rty = date_create(preg_replace("/[^0-9.]/", "", $ft));

            //$newformat1 = date_format($rty, "Y/m/d");
            // $fop= new DateTime($newformat1);
            //$rty = date_create(preg_replace("/[^0-9.]/", "", $st));

            // $newformat = date_format($rty, "Y/m/d");
            //$fop2 = new DateTime($newformat);

            // $days  = $fop2->diff($fop)->format('%d');
            //$ft= new DateTime(date("Y/m/d"));
            // $ft = date("Y/m/d");
            //$re=new DateTime($ft);
            // $percentage = $days / $re// * 100;
            //   $percentageRounded = round($percentage);
            //  echo    $days."-".$percentage;
            // Calculates the difference between DateTime objects 
            // $interval = date_diff($datetime2, $datetime1);
            //echo $interval;

            // Display the result 
            //echo $interval->format('Difference between two dates: %R%a days');
            //   $today = time();

            //  $dateDiff = $date2 - $date1;
            // $dateDiffForToday = $today - $date1;

            //  $percentage = $dateDiffForToday / $dateDiff * 100;
            //   $percentageRounded = round($percentage);

            //  echo $percentageRounded . '%';
            //  echo $percentageRounded . '%';
        }
    }
    public function images()
    {
        $request = courses_ev::where('cowner', auth()->id())->get();

        return view('display.prog', compact('request'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(progress $progress)
    {
        $request = tasks::where('userid', auth()->id())->get();
        return view('display.task', compact('request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, progress $progress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(progress $progress)
    {
        //
    }
}
