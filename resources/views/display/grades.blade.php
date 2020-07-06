<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
@extends('layouts.profile')
@section('content')
<style>#conta{
padding-top: 80px;
}
@import "compass/css3";

.table-editable {
  
  
  .glyphicon {
    font-size: 20px;
  }
}

.table-remove {
  color: #700;
  cursor: pointer;
  
  &:hover {
    color: #f00;
  }
}

.table-up, .table-down {
  color: #007;
  cursor: pointer;
  
  &:hover {
    color: #00f;
  }
}

.table-add {
  color: #070;
  cursor: pointer;
  position: absolute;
  top: 8px;
  right: 0;
  
  &:hover {
    color: #0b0;
  }
}

input{
    font-weight:bold;
}

</style>
<div id="conta" style="height: 18%;padding-top:60px;"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" width="30px" height="40px"alt="">
        <h5>Site Assistant</h5>
    </a>
  
</div><h1 style="color:white;z-index:1px;position:relative;text-shadow:3px 2px 2px 2px white;text-align:center;padding-top:40px;">
  <div style=" background: rgba(27, 26, 26, 0.814);border-radius:5px;width:30%; display:inline-block;">    Create Course grades</div>
    </h1>  
<div style="text-align:center;margin-top:-80px;z-index:-10;position:relative;padding-top:20px;">
   <img  src="{{ asset('css/images/grades.jpg') }}" alt="" width="100%" height="530px">
</div><div style="padding-top:70px;padding-bottom:70px;">
<div style="text-align:center;padding-top:60px;">
      <h1 style="font-weight:bold;padding-bottom:50px;"> Create Course grades by Forms or uploading a PDF</h1>
     <form action="/grades" method="post" id="grades">

@csrf
<input type="text" name="name"  placeholder="Student" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required>
<input type="text" name="submission"  placeholder="Submission" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required>     
<input type="number" name="grade"  placeholder="Grade of Student" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required> 
<input type="number" name="weight"  placeholder="Grade of content" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required>
<input type="date" name="datename" id="input_sub"style="padding-bottom:14px;font-size:14px;width:13%;" required> 
       <select name="course" id="input_sub" placeholder="course content" 
        style="background:white; text-align:center;width:15%;font-weight: bold;" required>   <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
            
use App\courses_ev;
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
       </select>
     
            <input type="submit" value="Submit Grade" id="input_sub3" style=" font-weight:normal;font-size:20px;">
    </form>
<div style="padding-top:70px;">
    <form action="/gshow"   id="ghow" method=post"  style="display:inline-block;padding-top:50px;width:500px;">
@csrf
       <select name="course" id="input_sub" class="cour" placeholder="course content" 
        style="background:white; text-align:center;width:32%;border:2px solid black;border-radius:20px;font-weight: bold;" required>   <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
 
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
       </select>
     
            <input type="submit" value="Find Grades" id="input_sub3" style="width:27%;  font-weight:normal;font-size:20px;">
    </form>
    <form action="/gshoy" method="post" id="ghoi"  style="display:inline-block;padding-top:50px;width:700px;">
@csrf
      <select name="course" id="input_sub" class="cour" placeholder="course content" 
        style="background:white; text-align:center;width:32%;border:2px solid black;border-radius:20px;font-weight: bold;" required>   <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
 
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
       </select>
       <input type="text" name="subm" placeholder="Search submission" id="input_sub" required>
     
            <input type="submit" value="Find Grades" id="input_sub3" style="width:18%;  font-weight:normal;font-size:20px;">
    </form></div>
    <div style="padding-top:50px;">
     <h1 style="background:green;color:white;" id="grad"></h1>
      <h1 style="background:red;color:white;" id="gtt"></h1>
    <div id="table" class="table-editable">
<table class="table" ><tr><h1>Grades</h1></tr>    
<tr><th style="width:20%;"> Students</th>  <th style="width:15%;">Submissions</th>
    <th style="width:15%;">grade</th><th style="width:15%;">Weight</th><th style="width:15%;">Course</th> <th style="width:15%;">Edit/delete</th></tr>
   </table>
    <table class="table" id="tb" style="padding-top:150px;">
 
    </table>
  </div></div>
</div> 





<div style="padding-top:200px;padding-bottom:70px;text-align:center;">
    <h1> Submit PDF OR EXCEL Instead</h1> 
     <form action="/filesub" method="post" id="filesub"  style="padding-top:50px;" enctype="multipart/form-data">
   @csrf 
    <label><h5 style="font-weight: bold;">File:</h5></label>   
<input type="file" name="file"  placeholder="" id="input_sub" style="padding-bottom:20px;font-size:14px;width:15%;"  required>   
<input type="text" name="size"  placeholder="Class size" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required>     
<input type="text" name="sub"  placeholder="Submission" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required> 
<input type="number" name="grd"  placeholder="Grade of content" id="input_sub" style="padding-bottom:20px;font-size:14px;width:11%;"  required>

       <select name="course" id="input_sub" placeholder="course content" 
        style="background:white; text-align:center;width:15%;border:2px solid black;border-radius:20px;font-weight: bold;" required>   <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
 
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
       </select>
     
            <input type="submit" value="Submit Grades" id="input_sub3" style="width:13%;  font-weight:normal;font-size:20px;">
    </form>
      <div id="table" class="table-editable" style="padding-top:50px;">
 <h1 style="background:green;color:white;" id="gett"></h1>
      <h1 style="background:red;color:white;" id="gatt2"></h1>
    <table class="table" style="padding-top:150px;">
   <tr>
    <h1>Grades</h1></tr>    <tr>
    <th  style="width:15%;">Course</th><th  style="width:15%;"> PDF File</th> <th  style="width:15%;"> Amount of Students</th>  <th  style="width:15%;">Submission</th><th  style="width:15%;">Weight</th><th  style="width:15%;"> Delete</th></tr>
    </table>
     <table class="table" id="form" style="padding-top:150px;">
  
      
    </table>
  </div></div>
</div>
<div id="shp" style="background:rgb(0,0, 7,0.8);width:100%;height:100%;position:fixed;top:0px;display:none;">
<div id="h"></div>
</div>
<script src="{{ asset('tss/ts/grades.js')}}">

</script>
@endsection
@extends('layouts.sidebar')