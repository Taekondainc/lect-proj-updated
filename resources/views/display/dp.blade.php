 <?php
            
use App\courses_ev;
use App\studentreg;
use Illuminate\Http\Request;
            $requestd=courses_ev::where('cowner',auth()->id())->get();
           
       ?>
       @foreach ($requestd as $requests)  
   <div style="height:240px;margin:3px;padding:2px;width:30%;display:inline-block;">  <a style="display:inline-block;color:white;text-align:center;height:200px;padding:10px;margin:15px;border-radius:10px; border:2px solid rgb(31, 81, 76); background:rgb(1, 1, 1,0.8); " href="{{$requests->id}}/course-content">
            <img src="{{asset('course-contents/images/'.$requests->clogo )}}" alt="" width="100px" height="100px" style="border-radius:50px;margin-bottom:10px;margin-top:10px;" title="" />
            <h1>{{$requests->cname}}</h1>  </a> <div style="display:block;height:70px;">
                 <a id="ahref" style="display:block;padding:10px;background:red;color:white;height:50px;border-radius:4px;" href="{{$requests->cname}}"> 
                     <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">
                    Delete</a>
        </div></div>   
@endforeach 
                </div>