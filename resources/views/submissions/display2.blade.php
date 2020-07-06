
       @foreach ($requestd as $requests) 
          <a style="display:inline-block;word-break:break-all; color:blue;font-size:15px;padding:5px;text-align:center;" id="button3" id="download" href="{{ asset('course-contents/files/tests/'.$requests->question ) }}" download>        
  Download : {{$requests->question}}  </a>     
        <div>  <a style="width:80%;display:inline-block;margin:0px;border:1px solid black;color:white;border-radius:20px;padding:5px;background:red;" id="button4" href="fdelete/{{$requests->id}}/test">
             <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">Delete</a>  
         </div>  @endforeach 