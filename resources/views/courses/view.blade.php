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
    

   .detail::-webkit-scrollbar-thumb {
    border-radius: 10px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color:blanchedalmond;
}

.detail::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color:black;
}

.detail::-webkit-scrollbar {
    width: 12px;
    background-color:transparent;
    cursor: pointer;
}
.detail{
    margin-right: 20px;
}
#hover:hover{
    background:rgb(77, 224, 47);  border-top-left-radius: 3px;
    border-top-right-radius: 3px;
   text-shadow: 2px 2px 2px 2px black;
}
#clicko:hover{
    background:rgb(77, 224, 47); 
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;color:black;
   text-shadow: 2px 2px 2px 2px black;
}
</style>
@section('content')
<div id="conta">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" width:100px;
            height:100px;alt="">
        <h5 style="font-size:13px;margin-bottom:0px;">Site Assistant</h5>
    </a>
     <div class="gthdiv" style="display:inline-block;background:black;margin-top:10px; text-align:center;width:100%;text-transform:capitalize;color:white">
        <h1 id="gop" style="display:inline-block">  {{$tt}} @foreach($task as $requests)
       @if($loop->first)
          <!--   // do something-->
            {{ $requests->cname }}
            <input type="hidden" name="" class="view" value=  {{ $requests->cname }}"">
     @else
         
     @endif
          
      <!--  This is the first iteration.-->
    
          @endforeach   Course Material  </h1>
          
    <div class="refresh"  style="display:none;background:rgb(160, 35, 35);
    border-radius:11px;text-align:center;width:100%;position:fixed;
    color:white;">
    <a  style="color:white;" 
    href="/ht/<?php $request=request('requests');
    echo $request; ?>/content">
            <img  src="{{ asset('css/images/refresh.png') }}" style="width:40px;height:40px;"alt="">Click to see new content<div id="hytf" style="color:white;"></div> </a></div> 
    </div>
   
<div class="container_form" style="align-items: flex-start;
 justify-content: center;padding:20px;border-radius:10px;  font-family:'Oswald', sans-serif ;margin-top:20px;">

   
@foreach($task->sortBy('id') as $requests)

 <div class="ct" style="">
      <h1 style="color:white;text-transform:capitalize;">{{ $requests->content }}
        <div style="text-align:center;color:white;font-size:20px;text-transform:capitalize;border:2px solid rgb(77, 224, 47);border-radius:10px;width:auto;padding:3px;float:right;
        " id="{{$requests->Appr}}">{{$requests->Appr}}</div></h1>
       <div id="itf" style="color:white;">
          <?php
              $ht=$requests->date;
        $date = strtotime($ht);
        $rt = date('d/M/Y H:i:s', $date);
       echo $rt; ?></div>
  
   <div class="dodd" style="width:100%;float:right;">
        
<div style="text-align:left;color:white;text-transform:capitalize;word-break:break-all;font-size:20px;padding:10px;">
{{$requests->Cdesc}}</div>

                


                </div>
     
            <a style="display:inline-block;width:100%;word-break:break-all;color:white;font-size:17px;padding:30px;text-align:center;" id="download" href="{{ asset('course-contents/files/'.$requests->cont_fil ) }}" download>        
  Download : {{$requests->cont_fil}}  </a>    <h1>     
      <a  id="clicko"  style="color:white;border-bottom:2px solid white;padding:3px;width:60%;font-size:20px;"href="add/{{$requests->id}}">See Additional content</a>      </h1>       
            <label  class="edit/{{$requests->id}}/content" id="contedit"  style="text-decoration:underline;cursor:pointer;text-align:center;display:block;margin-top:20px;"> 
                  <h1 id="hover"style="text-align:center;color:white;border-bottom:2px solid white;font-size:20px;width:60%;display:inline-block;">  Edit Content </h1> </label>  
          
       </div>
         
 
@endforeach
<div id="id" style="">
         <h1 style="color:white;">Additional Content   <button id="spn_" class="addi" >X</button></h1>
        <div class="detail" style="color:white;overflow-y:scroll;height:70%;"></div></div>
<script src="{{ asset('tss/ts/content.js') }}">

</script>
<script src="{{ asset('tss/ts/additionals.js') }}">

</script> 
</div> 
  <div class="form-checkk" id="pop" style="  font-family:'Oswald', sans-serif ;z-index: 1;"> </div></div>
<script src="{{ asset('tss/ts/entry.js') }}">

</script>
<script src="{{ asset('tss/ts/content.js') }}">

</script>

@endsection
@extends('layouts.sidebar')

  <!-- <embed style="border-radius:50%;background:black;vertical-align:top;" src="// asset('course-contents/files/'.$requests->cont_fil ) }}" width="130px" height="130px" />-->
       
