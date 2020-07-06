 @foreach ($requests as $request) 
 <h1>{{$request->cname}}</h1>
 <a style="display:inline-block;word-break:break-all; color:blue;font-size:17px;padding:5px;text-align:center;" id="button3"
  id="download" href="{{ asset('course-contents/files/tutorials/'.$request->tutorial ) }}" download>        
  Download : {{$request->tutorials}}  </a> 
  <div><h3> {{$request->description}}</h3></div>    
<div><a style="width:80%;display:inline-block;margin:0px;border:1px solid black;color:white;border-radius:20px;padding:5px;background:red;" 
    id="button4" href="ttdelete/{{$request->id}}/tutorial"> <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">Delete</a>  
 </div> 
  @endforeach 

  <script>
      if ($('html').css('background-image') != 'none') {

  $("[id=button3]").css("color","white");
  $("[id=button3]").css("text-decoration","underline");
}else{
    
}
</script>