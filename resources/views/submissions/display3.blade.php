@foreach ($requestt as $requests) 
          <a id="button5" style="font-size:20px;display:inline-block;text-align:center;padding-bottom:10px;margin:7px;border-radius:10px;
          width:60%;border:1.5px solid black;padding:3px;"  href="/assignment/{{$requests->id}}/course-content">
        {{$requests->title}} </a>
    <div>  <a  id="button6" style="display:inline-block;margin:0px;border:1px solid red;color:white;width:80%;border-radius:20px;padding:5px;background:red;" href="atdelete/{{$requests->id}}/test">
       <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">Delete</a>
      </div> @endforeach