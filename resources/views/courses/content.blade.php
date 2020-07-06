<link rel="stylesheet" href="{{asset('css/content/course.css')}}"><link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">

<style>#createform{
     min-width: 150px;
      max-width: 150px;}
      #conta{
       padding-top: 80px;
      }@media only screen and (max-width: 1000px) and (min-width: 0px){
.tex {
    position: absolute;
    top: 500px;
    width: 100%;
    display: block;
}}
      </style>
@extends('layouts.profile')

@section('content')
<div id="conta">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" width="100px" height=100px;" alt="">
        <h5 style="font-size:13px;margin-bottom:0px;">Site Assistant</h5>
    </a>
<div class="description">
    <h1>You can create your Content for the Course Here!!</h1>
    <img id="idpic" src="{{ asset('css/images/bht.jpg') }}" alt="">
</div>
<div class="contentdipls" style="height:110%;display:block;text-align:center;">



    <form action="/content" class="cre" id="createform" method="post" style="margin-left:14px;width:200px;" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h2 id="ft_h2"><b>Create Content</b>
        </h2>@foreach ($task as $requests)
        <input type="hidden" name="ccode" value="{{$requests->cname}}" required>
        <input type="hidden" name="id" value="{{$requests->cowner}}" required>

        <div class="label_container" style="margin-top:10px;">Course Title</div>
        <input type="text" name="ctitle" id="input_sub" placeholder="Content Title" required>
        <!--  <div class="label_container">

            <select name="" id="input_sub" placeholder="course content">
                <option value="" disabled selected hidden>Choose Content Type</option>
                <option value="">Videos</option>
                <option value="">pdf</option>
                <option value="">ppts</option>
                <option value="">Doc</option>
            </select>
        </div>-->
        <div class="label_container3">content Week</div>
        <div id="cont-p"> &nbsp; Approval Status</div>
        <input type="date" name="datc" id="input_sub7" required>
        <select name="status" id="input_sub7" placeholder="course content" required>
            <option style="font-size:17px;" value="" disabled selected hidden>Choose Status</option>
            <option style="font-size:17px;" value="Approved">Approved</option>
            <option style="font-size:17px;" value="Disapproved">Disapproved</option>

        </select>


        <hr>
        <div class="label_container"> Content Comments</div>
        <textarea name="comments" id="scroll" class="form-control" id="exampleFormControlTextarea1" cols="30" rows="3" required></textarea>
        <hr>
        <div class="label_container"> Course Content</div>
        <input type="file" name="material" id="input_sub2" required>
        <div class="label_container">
            <input type="submit" value="Submit Course Content" style="width:80%;" id="input_sub3"></div>
    </form>




    <div class="content-div" style="">


        <div class="gthdiv" style="background:black;border-radius:11px; text-transform:capitalize;">
            <h1> {{$requests->cname}}
                Course Material</h1>

        </div>
        <div class="tex" style="background:green;font-size:20px;color:white;">

        </div>
        <h1>

            <a href="/ht/{{$requests->id}}/content" style="text-decoration:underline;">@endforeach Click Here To view All Content</a>
        </h1><div class=" view" style="padding:10px; display:block; overflow-y:scroll;height:77%;border-radius:10px;background:black;">

            @foreach ($tasks->sortBy('id') as $request)
            <div class=" dt{{$request->id}}" id="gt{{$request->id}}" style="display: inline-block;padding:10px;">
                <div class="ct" style="display:none;">
                    <a style="display:inline-block;padding:30px;text-align:center;color:white;" id="download" href="{{asset('course-contents/files/'.$request->cont_fil )}}" download>


        <embed style="border-radius:50%;vertical-align:top;" src=" {{asset('course-contents/files/'.$request->cont_fil )}}" width="130px" height="130px" />
      </a>   <h1 style="color:white;text-transform:capitalize;">{{$request->content}}</h1>
    </div>

            </div>

            @endforeach
        </div>

    </div>

</div>


<div class="mdal">

</div>
</div>
<script src="{{ asset('tss/ts/entry.js')}}">

</script>
</div>

<script src="{{ asset('tss/ts/content.js')}}">

</script>
<script>
    $(document).ready(function(){


    //  $("[id=news]").fadeIn(4000);
    $("[class=ct]").show(4000);   });

      if ($('html').css('background-image') != 'none') {
 $("form").css("color","white");
}else{

}

</script>
@endsection
@extends('layouts.sidebar')<!--<h1 style="color:black;">{{$requests->cname}}</h1>-->
