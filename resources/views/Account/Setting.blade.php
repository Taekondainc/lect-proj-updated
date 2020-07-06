<?php 
use App\background;
?><link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/index2.css')}}">
@extends('layouts.profile')
@section('content')
<style>#conta{
padding-top: 80px;
}

    


</style>
   <div class="conta" style="padding-top:50px;z-index:-1;">    
       <a  id="profile" class="list-group-item bg-dark text-white" style="z-index:-1;letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;border-radius:0px 0px 0px 10px;" href="#">
                     
                            <img id="ai_assist" class="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt=""
                             style="background:white;padding-top:1px;border-radius:50%;z-index:-1;">
        <h5>Site Assistant</h5>

  </a></div> 
          
 <h1 style="background:black;color:white;text-align:center;">Setup Wallpaper</h1>
 <div class="list-group-item bg-dark text-white" Style="z-index:0;letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;border-radius:10px 0px 0px 0px;" >   
           <form action="/backgroundimage" method="post" class="avatar" style="text-align:center;display:inline-block;width:100%;" enctype="multipart/form-data"> 
       @csrf 
      <h1>  <div class="current" style="color:white;background:green;"></div></h1>
       
         <div class="avatar-wrapper">
	<img class="profile-pic"  <?php
                            
                             $query=background::where("uid",Auth()->id())->get();  
                           ?>   @foreach ($query as $requests)
  
     
 
           

    src="{{asset('course-contents/files/backgrounds/'.$requests->image)}}"  @endforeach />
	<div class="upload-button">
		<img class="fa fa-arrow-circle-up" aria-hidden="true" src="{{ asset('css/images/upload.png') }}" style="cursor:poitner;">
	</div>
	<input class="file-upload" type="file" name="file" accept="image/*"  required/>
</div>
     
<button type="submit" class="btn btn-light" style="margin-top:-10px;letter-spacing:2px;font-weight:bold;">
   Upload</button>
</form>
</div>  
      
<script src="{{ asset('tss/ts/background.js')}}"></script>
@endsection
@extends('layouts.sidebar')
