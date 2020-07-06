
 @foreach($requestl as $requests) 
 <a id = "button7" style = "display:inline-block;word-break:break-all; color:blue;font-size:16px;padding:20px;text-align:center;"
 id = "download"
 href = "{{ asset('course-contents/files/tests/'.$requests->assignment ) }}"
 download>Download: {{$requests->title }}</a><div> <a  id="button8" style="display:inline-block;margin:0px;
 border:1px solid red;color:white;border-radius:20px;padding:5px;background:red;width:80%;" href="afdelete/{{$requests->id}}/test"> <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">Delete</a >
 </div>@endforeach