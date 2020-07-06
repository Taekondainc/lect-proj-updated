<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ asset('css/images/logo.png') }}">
<link rel="stylesheet" href="{{ asset('css/content/course.css') }}">

@extends('layouts.profile')
<style>
    #conta{
        padding-top: 70px;
    }
</style>
@section('content')
<div id="conta">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" width:100px;
            height:100px;alt="">
        <h5 style="font-size:13px;margin-bottom:0px;">Site Assistant</h5>
    </a></div> 
     <h1 style="background:#4f589c;color:white;">Your Resources <div id="ltpcx"  class="btn btn-success w-25"> <img id="ai_assist" src="{{ asset('css/images/down.png') }}" style="background:transparent;" width:100px;
            height:100px;alt=""></div></h1>
    <div class="gthdiv4" style="border-radius:11px;margin-top:5px;display: none;
  flex-wrap: wrap;text-align:center;text-transform:capitalize;color:white;background:black; ">
          @foreach($request->sortBy('id') as $requests)
       <div class="g" style="width:300px;display:inline-block;margin-left:20px;">   <h4 style="color:white;">{{$requests->content}}  </h4> <h4 style="color:black;">{{$requests->cname}}  </h4>
        <embed style="background:black;vertical-align:top;" src="{{asset('course-contents/files/'.$requests->cont_fil ) }}" width="200px" height="430px" />
        <a style="display:inline-block;word-break:break-all; color:white;font-size:17px;padding:30px;text-align:center;" id="download" href="{{ asset('course-contents/files/'.$requests->cont_fil ) }}" download>        
  Download : {{$requests->cont_fil}}  </a>
         
         </div>
      @endforeach  </div>

        <h1 style="background:#4f589c;color:white;">Your Lectures Additional content <div id="ltpcx2"  class="btn btn-success w-25"> <img id="ai_assist" src="{{ asset('css/images/down.png') }}" style="background:transparent;" width:100px;
            height:100px;alt=""></div></h1>  
    <div class="gthdiv" style="border-radius:11px;margin-top:5px;display: none;
  flex-wrap: wrap;text-align:center;text-transform:capitalize;color:white;background:black;color:white; ">
    
   <?php
  use App\additional;
  
        $request=additional::where("uid",auth()->id())->get();
        
 ?>
        @foreach($request->sortBy('cname') as $requests)
       <div class="g" style="width:300px;display:inline-block;margin-left:20px;color:white;"><h4 style="color:white;">{{$requests->cname}}  </h4>   <h4 style="color:white;">{{$requests->name}}  </h4>
        <embed style="background:black;vertical-align:top;" src="{{asset('course-contents/files/add'.$requests->file ) }}" width="200px" height="430px" />
        <a style="display:inline-block;word-break:break-all; color:white;font-size:17px;padding:30px;text-align:center;" id="download" 
        href="{{ asset('course-contents/files/add'.$requests->file ) }}" download>        
  Download : {{$requests->file}}  </a>
         
         </div>
        @endforeach <?php    ?> </div>  
        
        
        <h1 style="background:#4f589c;color:white;">Test Files <div id="ltpcx3"  class="btn btn-success w-25"> <img id="ai_assist" src="{{ asset('css/images/down.png') }}" style="background:transparent;" width:100px;
            height:100px;alt=""></div></h1>
        <div class="gthdiv2" style="border-radius:11px;margin-top:5px;display: none;
  flex-wrap: wrap;text-align:center;text-transform:capitalize;color:white;background:black;color:white; ">

   <?php
  use App\testfile;
 
      
       // $request = gradfile::where('cname', $t)->get();
        $request=testfile::where("uid",auth()->id())->get();
        
 ?>
        @foreach($request->sortBy('cname') as $requests)
       <div class="g" style="width:300px;display:inline-block;margin-left:20px;color:white;"><h4 style="color:white;">{{$requests->cname}}  </h4>  
         <h4 style="color:white;">{{$requests->Testname}}  </h4>
        <embed style="background:black;vertical-align:top;" src="{{asset('course-contents/files/'.$requests->question ) }}" width="200px" height="430px" />
        <a style="display:inline-block;word-break:break-all; color:white;font-size:17px;padding:30px;text-align:center;" id="download" href="{{ asset('course-contents/files/tests/
        '.$requests->question ) }}" download>        
  Download : {{$requests->question}}  </a>
         
         </div>
        @endforeach <?php    ?> </div>
        <h1 style="background:#4f589c;color:white;">Assignments <div id="ltpcx4"  class="btn btn-success w-25"> <img id="ai_assist" src="{{ asset('css/images/down.png') }}" style="background:transparent;" width:100px;
            height:100px;alt=""></div></h1>       <div class="gthdiv3" style="border-radius:11px;margin-top:5px;display: none;
  flex-wrap: wrap;text-align:center;text-transform:capitalize;color:white;background:black;color:white; ">
   
   <?php 
  use App\assignments;
  
        $request=assignments::where("uid",auth()->id())->get();
        
 ?>
        @foreach($request->sortBy('cname') as $requests)
       <div class="g" style="width:300px;display:inline-block;margin-left:20px;color:white;"><h4 style="color:white;">{{$requests->cname}}  </h4>  
         <h4 style="color:white;">{{$requests->assignment}}  </h4>
        <embed style="background:black;vertical-align:top;" src="{{asset('course-contents/files/'.$requests->assignment ) }}" width="200px" height="430px" />
        <a style="display:inline-block;word-break:break-all; color:white;font-size:17px;padding:30px;text-align:center;" id="download" href="{{ asset('course-contents/files
        /assignment/
        '.$requests->assignment ) }}" download>        
  Download : {{$requests->assignment}}  </a>
         
         </div>
        @endforeach <?php    ?> </div>
 
</div>
  <div class="form-checkk" id="pop"> </div>
<script src="{{ asset('tss/ts/entry.js') }}">

</script>

</script>
@endsection
@extends('layouts.sidebar')

  <!-- <embed style="border-radius:50%;background:black;vertical-align:top;" src="// asset('course-contents/files/'.$requests->cont_fil ) }}" width="130px" height="130px" />-->
       
