
@foreach ($requestd as $requests) 

    <div style="margin:5px;">    
     <a  style="font-size:20px;margin:2px;display:inline-block;text-align:center;padding-bottom:5px;border-radius:10px;
          width:100px;border:1.5px solid black;padding:3px;" id="button1"  href="/test/{{$requests->id}}/course-content">
        {{$requests->Testname}} </a>
 <div> <a style="display:inline-block;margin:0px;border:1px solid black;color:white;border-radius:20px;padding:5px;background:red;width:80%;" id="button2" href="delete/{{$requests->id}}/test">
    <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt=""> Delete</a> </div>
    </div>   
      @endforeach  