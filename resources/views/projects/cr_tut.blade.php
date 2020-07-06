<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.profile')
@section('content')
<style></style>
<div id="conta" style="height: 100%;text-align:center;"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <h2>
        Create your personal tutorial class which you can Administrate and enjoy.
    </h2>
    <form action="/tutorials" id="tut" method="post" enctype="multipart/form-data" 
    style=" font-family:'Oswald', sans-serif ;text-align:center;padding:10px;
    border-radius:5px;border:2px solid black;display:inline-block;">
        @csrf
      <div class="containd">   <h1 style=" display:inline-block;text-align:center;">Course:</h1>
        
      </div>  <select name="course" id="input_sub" placeholder="course content" 
        style="background:white; text-align:center;width:70%;font-weight: bold;" required>   <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
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
      
      
         <div>    <h1 style="text-align:left;display:inline-block;">Upload any file you want: </h1>
            </div><input type="file" name="files" style="width:72%;font-size:20px;" id="input_sub2" required>
         <div class="label_container">
             <h1>Description:</h1>
            <textarea type="text"name="description" style="border:1px solid black;font-size:15px;width:80%;height:20%;" id="input_sub2" required></textarea>
        </div>
        <div class="label_container">
            <input type="submit" value="Submit Course Content" id="input_sub3" style="font-size:17px;padding:3px;"></div>
    </form>
   
 <div class="div" style="text-align: center; font-family:'Oswald', sans-serif ;display:block;padding-top:200px;">
        
         <div style="border:2px solid black;display:inline-block;border-radius:10px;height:100%;" class="tutorials">
<div class="div">
        <h1 id="bord-bttm" style="border-bottom:2px solid black; ">TUTORIALS</h1>
        </div>
     <h1><div class="h1"></div></h1>   
        <div class="containxxx"></div>
         </div>
    </div></div>
    
<script src="{{ asset('tss/ts/tutorial.js')}}">

</script><script>
      if ($('html').css('background-image') != 'none') {
 $("form").css("border","2px solid white");
 $(".tutorials").css("border","2px solid white");
 $("#bord-bttm").css("border-bottom","2px solid white");
 $("#button4").css("color","white");
  $("#button3").css("color","white");
}else{
    
}
</script>
@endsection
@extends('layouts.sidebar')