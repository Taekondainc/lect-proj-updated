<div style="position: absolute;right:0px;color:white;">
  <div>
    <spn id="yth" style="cursor:pointer;border:2px solid white;padding:30px;text-align:center;height:100px;background:white;width:100px;border-radius:50px;position:absolute;
right:0px;font-size:20px;color:black;" >
<h1>x</h1>
</spn>
</div>
<h1 style="position:absolute;top:110px;cursor:pointer;right:10px;background:black;border-radius:3px;"><div>Close</div></h1>
</div>

    
<div style="text-align:center;padding:20px;">
<form action="/upd" id="updater" method="post" style="border-radius:5px;padding:30px;display:inline-block;text-align:center;background:white;width:30%;">
@csrf
    @foreach ($request as $item)
 <input type="hidden" name="id" id="input_sub" value=" {{$item->id}} ">
 <div style="margin-top-top:70x;"> 
    <h4>Student</h4> 
    <input type="text" name="name" id="input_sub" value=" {{$item->student}} "> </div>
 <div style="margin-top:70x;"> 
    <h4>Submission</h4> 
    <input type="text" name="submission" id="input_sub" value=" {{$item->submission}}"> </div>
 <div style="margin-top:70x;"> 
    <h4>Grade</h4> 
    <input type="text" name="grade" id="input_sub" value=" {{$item->gos}}"> </div>
 <div style="margin-top:70x;"> 
    <h4>Weight</h4> 
    <input type="text" name="weight" id="input_sub" value=" {{$item->goc}}"> </div>@endforeach
 <div style="margin-top:70x;"> 
    <h4 >Course</h4> 
   <select name="course" id="input_sub" placeholder="course content" 
        style="background:white; text-align:center;width:60%;font-weight: bold;" required>   <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
            
use App\courses_ev;
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
       </select> </div>
<input type="submit" value="Update" id="input_sub3" style="width:40%;margin-top:50px;font-size:23pxmargin-top">
</form>
</div>
<script src="{{ asset('tss/ts/ugrades.js')}}">

</script>