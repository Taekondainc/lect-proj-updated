 <link rel="stylesheet" href="{{ asset('css/content/course.css') }}">
 <div class="cont-g"><spn id="yth" >x</spn></div>
@foreach($task as $requests)


          <div class="contep">
            
<form action="/submit" method="post" id="form" style="text-align: center;" enctype="multipart/form-data">
 @csrf <div id="alert"></div>    <h1>  {{$requests->content}} </h1> 
      <input type="hidden"  name="id" value="{{$requests->id}}">
     
 <div class="label_con">
 <input type="text" name="content" id="input_sub" value="{{$requests->content}}">
</div>
 <div class="label_con">
 <textarea  name="cded" id="input_sub" cols="30" class="w-55 p-3" value="{{$requests->Cdesc}}" rows="4">{{$requests->Cdesc}}</textarea>
</div>
 <div class="label_con">
 <input type="file" name="cnt" id="input_sub" value="{{$requests->cont_fil}}">
</div>
 
       <div class="label_con">
        <select name="status" id="input_sub" placeholder="course content">
            <option style="font-size:17px;" value="" disabled selected hidden>Choose Status</option>
            <option style="font-size:17px;" value="Approved">Approved</option>
            <option style="font-size:17px;" value="Disapproved">Disapproved</option>

        </select></div>

 <div class="label_con"><b>
 <input type="submit" name="" class="input_sub6" id="input_sub4" value="Edit"></b>
</div>
 <div class="label_con" >
 <a id="ahref" style="padding:10px;" href="edelete/{{$requests->id}}"> <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">Delete</a>
</div>
</form>


<div class="addmore">
    <form action="/addcont" method="post" id="form2" style="text-align: center;" 
    enctype="multipart/form-data">
  @csrf    <h1>  {{$requests->content}} </h1> 
       <h1 >  Add more Files </h1> 
      <input type="hidden" id="collect"  value="add/{{$requests->id}}">
        <input type="hidden"  name="id" value="{{$requests->id}}">
      <input type="hidden" name="coursename" id="input_sub" value="{{$requests->cname}}">

 <div class="label_con">
 <input type="hidden" placeholder="Title" name="lecture" id="input_sub" value="{{$requests->content}}">
</div>
 <div class="label_con">
 <input type="text" placeholder="Content Name" name="noc" id="input_sub" value="">
</div>
 <div class="label_con">
     <h5 id="input_sub" style="border:2px solid black;text-align:center;">Add file</h5>
 <input type="file" name="files" id="input_sub" value="">
</div>
 <div class="label_con">
 <input type="cdesc" placeholder="Description" col="3"  name="descript" id="input_sub" value="">
</div>
<div class="label_con">
 <input type="date" name="date" id="input_sub" value="">
</div>
 <div class="label_con"><b>
 <input type="submit" name="" class="clcikt" id="input_sub6" value="Add"></b>
</div>
</form>
<div id="tex" style="border-radius:2px;display:block;background:green;color:green;text-align:center;font-size:21px;" >
</div></div></div> <script src="{{ asset('tss/ts/additional.js') }}">

</script>
@endforeach
