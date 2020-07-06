
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<style>
    .sdd{
        border-radius:4px;
        border:2px solid black;
    }
.opp::-webkit-scrollbar-thumb {
    border-radius: 10px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color:#74eacf;
}

.opp::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
}

.opp::-webkit-scrollbar {
    width: 12px;
    background-color:transparent;
    cursor: pointer;
}



</style>
<div id="content_container-div" >
    <div class="ccv ">
        
    <div style="background:rgb(74, 226, 74);" class="cod">
<a class="navbar-brand" href="{{ url('/') }}">
 <img src="{{asset('css/images/logoA.png')}}" > HLS</a></div>
        <button id="spn_" >X</button>
        
<div class="didd"  style="display:block;margin-top:25px;
text-align: center;background:rgba(119, 183, 236, 0.63);"><a href="/messages"> 
    <img src="{{asset('css/images/messages.png')}}" style="width:30px;height:30px;">Messages</a></div>
     <div class="didd"  style="display:block;text-align: center;background:rgba(119, 183, 236, 0.63);">
              <a id=style="display:block;width:108px;margin-top:4px;"   href="/c_courses">
                 <img src="{{asset('css/images/create.png')}}" style="width:20px;height:20px;margin:3px;">Create Course</a></div>
  <div class="didd" id="drop" style="display:block;text-align: center;background:rgba(119, 183, 236, 0.63);">
            
            <div class="nav-link dropdown-toggle text-white" style="padding:0px;" >
            <!--    <a id="y" style="diplay:block;"  href="/course"><--><a href="/course" ">
         <img src="{{asset('css/images/course.png')}}" style="width:30px;height:30px;">   Courses</a><span id="gt" class="caret bg-success" ></span>
            </div> 
             
         <div class="dropcontent1" style="display:none;text-align:center;width:100px;margin-right:25px;" >
  
<div class="cff"style="margin:10px;"><h4><b style="color:white;">Courses:</b></h4></div>
  <div class="opp" style="overflow-y:scroll; overflow-x:none; height:150px;width:130px;margin-right:10px;">
     <?php
            
use App\courses_ev;
use Illuminate\Http\Request;
            $requestd = courses_ev::where('cowner',auth()->id())->get();
       ?>
       @foreach ($requestd as $requests)  
     <div class="sdd" style="background:rgba(119, 183, 236, 0.63);margin-right:25px;padding:10px;width:116px;margin-top:10px;overflow-x:none; ">   
        <a id="y" style=" margin-bottom:2px;margin-left:-5px;background:rgba(1, 13, 26, 0.63);display:inline-block;text-align:left;width:100px;text-align:center;border-radius:3px; border:1.5px solid white;padding:3px;" href="/ht/{{$requests->id}}/content"> 
  
       {{$requests->cname}} 
         <a  style="display:inline-block;text-align:center;padding-bottom:5px;border-radius:3px;width:100px;border:1.5px solid white;padding:3px;margin-left:-5px;" href="/gt/{{$requests->id}}/course-content">
        Create Content</a>
    </a>
   
    </div>    
    @endforeach
    </div>
  </div></div>
     
 
             
  
<div class="didd" id="class" style="display:block;text-align: center;background:rgba(119, 183, 236, 0.63);">  
     <div class="nav-link dropdown-toggle text-white" style="padding:0px;" >
        <a href="/Classroom/"> <img src="{{asset('css/images/classrom.png')}}" style="width:27px;height:27px;margin:0px;">Classroom</a>
 <span id="gt" class="caret bg-success" ></span></div>
 <div class="cvdd" style="display:none;margin-top:5px;" >
     <div class="opp"  style="text-align: center; margin-bottom:3px;"><a href="/Students" style="width:100px;">Students</a></div>
<div class="opp"  style="text-align: center; margin-bottom:3px;"><a href="/cr_tut" style="width:100px;">Tutorials</a></div>
<div class="opp"  style="text-align: center;"><a href="/progress" style="border-radius:3px;width:100px;">Course Progress</a></div>
<div class="opp"  style="text-align: center; margin-top:3px;">  <a href="/resources"> <img src="{{asset('css/images/resour.png')}}" style="width:30px;height:30px;margin-top:-3px;">Resources</a></div>

 </div>
 </div>

 

 <div class="didd" id="llp" style="display:block;text-align: center;background:rgba(119, 183, 236, 0.63);">
     <div class="nav-link dropdown-toggle text-white"  style="padding:0px;margin-bottom:3px;" >
            <!--    <a id="y" style="diplay:block;"  href="/course"><--><a href="/SUBM"> 
                <img src="{{asset('css/images/file.png')}}" style="width:30px;height:30px;margin:3px;vertical-align:top;margin-top:-3px;">Submissions</a></div>
     <div class="dropcontent3" style="display:none;text-align:center;width:100px; " >
       
        <div class="opp"  style="text-align: center; margin-bottom:3px;"><a href="/grades" style="width:100px;">Grades</a></div>
         <div class="opp"  style="text-align: center;margin-bottom:3px;"><a href="/SUBMt">Tests</a></div>
<div class="opp"  style="text-align: center;"><a href="/SUBMa">Assignment</a></div></div>
 </div>
      
  
        <div class="didd" id="logo" style="background:rgba(119, 183, 236, 0.63);">
                <div class="nav-link dropdown-toggle text-white"  style="padding:0px;" >
            <!--    <a id="y" style="diplay:block;"  href="/course"><--><a href="#">
           <img src="{{asset('css/images/calendar.png')}}" style="width:30px;height:30px;margin-top:-3px;">Shedule & Tasks</a><span id="gt" class="caret bg-success" ></span>
            </div> 
         <div class="dropcontent2" style="display:none;text-align:center;width:100px; " >
<div class="opp" style="margin:6px;">  <a id="y" style=" width:113px;"  href="/calendar">Your Calendar</a></div>
  <div class="opp" style="margin:6px;">  <a id="y" style=" width:113px;"  href="/ytasks">Your Tasks</a></div>
  <div class="opp" >  <a id="y"  style="display:block;width:120px;margin-left:-8px; " href="/tasks">Create/Edit Tasks</a></div>
  </div>
  <!-- <a href="/ytasks"> Tasks</a>--></div>

  
 
        
        
        
            <div class="didd"  style="display:block;text-align: center;background:rgba(119, 183, 236, 0.63);"><a href="/forum"><img src="{{asset('css/images/forum.png')}}" style="width:30px;height:30px;margin-top:-3px;">Forum</a></div> 

    </div>
</div>