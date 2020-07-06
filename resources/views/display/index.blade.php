 @foreach ($request as $requests)


  <div  id="courselook" style="">  <a style="display:inline-block;color:white;text-align:center;height:200px;padding:10px;margin:15px;border-radius:10px; border:2px solid rgb(31, 81, 76); background:rgb(1, 1, 1,0.8); " href="{{$requests->id}}/course-content">
            <img src="{{asset('course-contents/images/'.$requests->clogo )}}" alt="" width="100px" height="100px" style="border-radius:50px;margin-bottom:10px;margin-top:10px;" title="" />
            <h1>{{$requests->cname}}</h1>  </a> <div style="display:block;height:70px;">
                 <a id="ahref" style="display:block;padding:10px;background:red;color:white;height:50px;border-radius:4px;"
                  href="deletec/{{$requests->id}}">
                     <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">
                     Delete</a>
        </div></div>

     @endforeach
