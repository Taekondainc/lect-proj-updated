<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@extends('layouts.profile')
@section('content')
<style>#conta{
padding-top: 80px;
}
</style>
<script> $(document).ready(function () {
    if ($('html').css('background-image') != 'none') {

$(".ctop").css("background","white");

 $(".disp").css("border-bottom","3px solid white");

$("#ftestt ").css("background","black");

$("#assiment ").css("background","black");
$(".astg").css("color","black");
$(".testts").css("color","black");
$(".ctop").css("color","black");
}else{
$("body").css("color","black");
$("form").css("color","white");
}



    $(".test").click(function () {
                $(".contente").hide();
                $(".tests").show();
                 $(".assignment").hide();
                 $(".assi").css("border-bottom", "0px solid black");
                $(".test").css("border-bottom","3px solid black");
                  $(".disp").css("border-bottom", "0px solid black");
            });
        });
        $(document).ready(function () {
            $(".disp").click(function () {
                $(".contente").show();
                 $(".tests").hide();
                  $(".assignment").hide();
                $(".disp").css("border-bottom", "3px solid black");
                 $(".assi").css("border-bottom", "0px solid black");
                 $(".test").css("border-bottom", "0px solid black");
            });
});
            $(document).ready(function () {
                        $(".assi").click(function () {
                            $(".assignment").show();
                            $(".tests").hide();
                             $(".contente").hide();
                              $(".assi").css("border-bottom", "3px solid black");
                            $(".disp").css("border-bottom", "0px solid black");
                            $(".test").css("border-bottom", "0px solid black");
                        });  });</script>
<div id="conta" ><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>




    
   <h2>
        <div style="display: flex; justify-content:space-evenly;">
        <a id="task_link" class="disp" style="border-bottom:3px solid black;color: black;" href="#">
            <img  id="img" src="{{ asset('css/images/subm.png') }}" alt=""><div> Submissions</div></a>
            <a id="task_link" class="test" href="#test" style="color: black;"><img id="img" src="{{ asset('css/images/test.png') }}" alt="">
               <div> Create Test</div></a>
            <a id="task_link" class="assi" href="#assi" style="color: black;">
                <img id="img" src="{{ asset('css/images/assi.png') }}" alt=""><div> Create Assignments</div></a>
         </div> </h2>
           <div class="contente" style="height:auto;border-radius:0px;">
            <h1 id="submtt" style="border: 0px solid transparent;"> Submissions</h1>
            
        </div><div class="apii">
             
            </div>
        <div class="tests" style="height:auto;text-align:center;display:none;">
            <h1 id="ftestt" style="display:inline-block;border:2px solid black;width:100%;"> Test</h1> 
            <div class="create-tes"><h2 style="padding:30px;">Create Your Test Using Our form or Send using PDF </h2> 
                <div class="testts" style="">
                    <h1 style="border-bottom:3px solid black; color:black">Your Online Tests</h1>
                <div class="tess"> <div class="cvvv" style="height: 200px;overflow-y:scroll;"></div>
                <div class="separate" style="border-top:4px solid black;margin-top:10px;">
        <div><h1>Test Files</h1></div> <div class="ll" style="height: 200px;overflow-y:scroll;margin-top:4px;"></div></div></div> </div>
                        <div class="cl" style="">
                       
                    <div id="cl-cont"> 
                         <div id="newform" class="formm" >
                        <h1 style="padding:5px;font-family:'Oswald', sans-serif ;">Question</h1> 
                          <form action="/testquestions" id="form" method="post" style="text-align:center;font-family:'Oswald', sans-serif ;">
<div id="alert"></div>
 @csrf
                          
        <select name="course" id="input_sub" placeholder="course content" style="background:white; text-align:center;width:90%;border-radius:3px;" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
            
use App\courses_ev;
use Illuminate\Http\Request;
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
          

        </select>
                          

<input type="text" name="testn" id="input_sub" style="text-align:center;;vertical-align:top;display:inline-block;
background:white;font-weight: bold;font-weight: bold;background:white; text-align:center;width:90%;border-radius:3px;" placeholder="Test Name" required> 
 <input type="text" name="tid" id="input_sub" class="ques" style="background:white; text-align:center;width:90%;border-radius:3px;text-align:center;vertical-align:top;display:inline-block;
 background:white;font-weight: bold;" placeholder="question number" required> 
   
  <div style="padding-bottom:20px;"> <h3><b  style="vertical-align:left;"> Time-limit: </b></h3> 
    <input type="time" name="time" id="input_sub" style="text-align:center;padding:0px;margin:0px;vertical-align:top;
    display:inline-block;background:white;font-weight: bold;background:white; text-align:center;width:90%;border-radius:3px;padding:4px;"placeholder="question number" required> 
  </div > 
      <div style="padding-bottom:20px;"> 
       <h3> <b > Date: </b></h3>  
          <input type="date" name="date" id="input_sub" style="text-align:center;padding:0px;margin:0px;vertical-align:left;
           background:white; text-align:center;width:90%;border-radius:3px;padding:4px;vertical-align:top;display:inline-block;background:white;font-weight: bold;"  placeholder="question number" required>
           </div> 


 
                
 <div style="display:inline-block;vertical-align:top;margin:0px;"> <h3 style="padding:1px;">Enter question here</h3>  </div>      
 <textarea type="text" class="ghjk" cols-"30" name="question" id="input_sub" style="
 width:90%;height:90px; border-radius:3px;font-size:13px; display:inline-block;background:white;padding:8px;margin:0px;" required></textarea>
 
              
 <div style="display:inline-block;width:100%;">
 <input id="clickd" class="formd" type="submit" 
 style="border:2px solid black;border-radius:10px; width:90%;FONT-WEIGHT:BOLD;background:transparent;font-size:19px;
 vertical-align:top;margin-top:20px;background:white;" value=" Submit"></div>       </form>  </div> 
              
                    
                   


                        <div class="cl2" style="">
                        <h1 style="font-family:'Oswald', sans-serif ;">Submit PDF</h1>
                         <form action="/testq" id="forms" method="post" enctype="multipart/form-data" style="font-family:'Oswald', sans-serif ;">
<div id="aler"></div>
 @csrf
                          
        <select name="course" id="input_sub" placeholder="course content" style="
        background:white; text-align:center;background:white; text-align:center;width:90%;border-radius:3px;" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;background:white; text-align:center;width:90%;border-radius:3px;" value="" disabled selected hidden>Choose course</option>
             <?php

            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;background:white; text-align:center;width:90%;border-radius:3px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
          

        </select>
                          
<div>
<input type="text" name="testn" id="input_sub" style="background:white; text-align:center;width:90%;border-radius:3px;
text-align:center;vertical-align:top;display:inline-block;background:white;font-weight: bold;font-weight: bold;" placeholder="Test Name" required> 

</div><div> <input type="file" name="question" id="input_sub" style="background:white; text-align:center;width:90%;border-radius:3px;font-size:20px;
border:2px solid black;vertical-align:top;display:inline-block;background:white;"></div>  
              
 <div style="display:inline-block;width:100%;">
 <input id="click" class="formm" type="submit" style="
  background:white; text-align:center;width:90%;border-radius:3px;color:black;FONT-WEIGHT:BOLD;
    background:transparent;font-size:16px;vertical-align:top;margin-top:20px;background:white;" value=" Submit"></div>       </form>
                    </div>  </div> 
            </div>  </div>
        </div>

        <div class="assignment" style="height:auto;text-align:center;display:none;">


            <h1 id="assiment" style="display:inline-block;border:2px solid black;width:100%;"> Assignments</h1> 
        <h2  style="padding:30px;">Send using PDF or Create Your Assignments Using Our form</h2> 
         <div class="astg"style="">
        <h2 style="display:inline-block;border-bottom:2px solid black;">Assignments</h2>  
       <div class="lisd" style="height: 200px;overflow-y:scroll;"></div>
          <div class="separate" style="border-top:4px solid black;margin-top:120px;">
        <div><h1>Assignment Files</h1></div>
        <div class="dxz" style="height: 200px;overflow-y:scroll;"></div>
    </div>
        


        </div>   <div style="display:flex;flex-wrap: wrap; width:68%;margin-right:60px;padding-top:50px;float:right;"> 
                   <form action="/assignments" id="assproj1" method="post" style="font-family:'Oswald', sans-serif ;background:rgb(77, 224, 47);margin:10px; border:2px solid black;padding:15px;border-radius:10px;width:50%;" enctype="multipart/form-data">
  <div class="alert"></div><h3><div style="width:100px;display:inline-block;"> Course</div></h3>
   <select name="course" id="input_sub" placeholder="course content" style="background:white; text-align:center;width:70%;border:2px solid black;border-radius:20px;" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
            

            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
          

        </select>                       

<h3> <div style="display:inline-block; line-height:60px;"> Assignment Name</div>          </h3>  
<input type="text" name="title" id="input_sub" style="width:70%;vertical-align:top; border:2px solid black;background:white;">
<div><h1>Assignment</h1></div>
<input type="file" name="assignment" id="input_sub"  style="width:70%;height:10%;padding:5px; border:2px solid black;vertical-align:top;display:inline-block;background:white;">                      
<div><button id="clickff" style="border:2px solid black; border-radius:3px;background:transparent;font-size:16px;vertical-align:top;margin-top:20px;background:white;"> Submit</button>
      </div>                   
                           




                     </form>
                     
                      <form action="/assignment" id="assproj2" method="post" style="font-family:'Oswald', sans-serif ;background:rgb(77, 224, 47);height:40%;width:40%; border:2px solid black;padding:15px;border-radius:10px;">
   <div class="aler"></div><h3><div style="width:100px;display:inline-block;"> Course</div></h3>
   <select name="course" id="input_sub" placeholder="course content" style="background:white; text-align:center;width:60%;border:2px solid black;border-radius:20px;" required>
            <option style="font-size:17px; text-align:center;font-weight: bold;border-radius:20px;" value="" disabled selected hidden>Choose course</option>
             <?php
            

            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
   <option style="font-size:20px;text-align:center;font-weight: bold;border-radius:20px;" value=" {{$requests->cname}}">
       {{$requests->cname}} 
    </option>   
       
    @endforeach
          

        </select>                       

<h3> <div style="display:inline-block; line-height:60px;"> Assignment Name</div> </h3>          
<input type="text" name="title" id="input_sub" style="width:60%;vertical-align:top; border:2px solid black;background:white;"> 
<div><h3 style="padding-top:20px;">What the assignment is about???</h3></div>
<textarea type="text" name="descript" id="input_sub"  style="width:90%;height:70%; border:2px solid black;vertical-align:top;display:inline-block;background:white;">                      
</textarea>
<div><button id="clickert" style="border:2px solid black; border-radius:3px;background:transparent;font-size:16px;vertical-align:top;margin-top:20px;background:white;"> Submit</button>
      </div>                   
                           

  


                     </form></div>
        </div>
        

<div id="shp" style="background:rgb(0,0, 7,0.8);width:100%;height:100%;position:fixed;top:0px;display:none;">
<div id="h">

</div>
</div></div>
@endsection
<script src="{{ asset('tss/ts/slide.js')}}"></script>
<script>
      if ($('html').css('background-image') != 'none') {
 $(".test").css("background","white");
 
 $(".disp").css("border-bottom","3px solid white");
$("#submtt").css("border","2px solid white");
$("#ftestt ").css("border","2px solid white");
$("#assiment ").css("border","2px solid white");
$(".astg").css("color","black");

}else{
    
}$(document).ready(function () {



    $(".test").click(function () {
                $(".contente").hide();
                $(".tests").show();
                 $(".assignment").hide();
                 $(".assi").css("border-bottom", "0px solid black");
                $(".test").css("border-bottom","3px solid white");
                  $(".disp").css("border-bottom", "0px solid black");
            });
        });  
        $(document).ready(function () {
            $(".disp").click(function () {
                $(".contente").show();
                 $(".tests").hide();
                  $(".assignment").hide();
                $(".disp").css("border-bottom", "3px solid white");
                 $(".assi").css("border-bottom", "0px solid black");
                 $(".test").css("border-bottom", "0px solid black");
            });
});
            $(document).ready(function () {
                        $(".assi").click(function () {
                            $(".assignment").show();
                            $(".tests").hide();
                             $(".contente").hide();
                              $(".assi").css("border-bottom", "3px solid white");
                            $(".disp").css("border-bottom", "0px solid black");
                            $(".test").css("border-bottom", "0px solid black");
                        });  });
</script>
@extends('layouts.sidebar')