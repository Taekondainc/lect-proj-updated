<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('layouts.profile')
@section('content')
<style>
#input_sub{
    background:#f9fafa;font-weight: bold;text-align:center;font-size:20px;
}
textarea::placeholder{
    color:black;font-weight: bold;
}
input[type='checkbox']{
  border: 2px solid black;
 margin-top:7px;
  width:25px;color: black;
  height:25px;vertical-align: top;
  background-color:rgb(178, 197, 215);
}
input[type='checkbox']:checked{
    color: black;
}

</style>
<div id="conta" style="text-align:center;">
    <a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <h2>
        Create your forum where you , students and Educators can discuss issues or give advice
    </h2>


<div id="forum"  style="background:#000000;color:white; font-family:'Oswald', sans-serif ;padding-bottom:200px;">
<div class="searchbadiv" style="width:100%;padding:5px;display:flex;justify-content:center;">
    <h1 id="frtyp">Your Forum </h1>
     <input type="search" name="" id="searchhhhh" placeholder="Search Topics"style="vertical-align:top;height:30.5px;font-size:18px;margin-top:2px;width:30%;border:2px solid white;border-top-left-radius:3px;border-bottom-left-radius:3px;">
     <button type="submit" id="searchsub" style="width:50px;height:30.5px;vertical-align:top;margin-top:2px;margin-left:-5px;padding:0px;background:transparent;border:2px solid white;border-radius:3px;">
    <img src="{{ asset('css/images/search.png') }}" alt="" width="27px" height="27px"></button>  </div>
<div style="padding-top:5px;background:white;color:black;display:flex;flexbox:wrap;">
    <div class="plubvi" style="width:76%;margin:6px;vertical-align:top; margin-top:-1px;border-radius:5px;">
<div class="current">

</div>

</div>

<div class="containerr" style="height: 100%;width:23%;margin-right:5px;">

    <div class="cont" style="background:rgb(94, 108, 130);border-radius:4px;padding:2px;">
        <h3 style="text-align:center;border-bottom:1px solid white;color:white;">Create Your Forum</h3>
<form action="/create" id="forumf" method="post" style="width:100%;text-align:center;">
@csrf
<textarea type="text" name="description" placeholder="Content" id="" style="text-align:left;font-size:16px;height:70px;width:90%;border-radius:4px;color:black;background-color:#f9fafa;"></textarea>
<div style="margin-top:4px;">
    <select name="topics" style="font-weight:bold;height:30px;color:black;width:90%;">
<option style="color:black;font-size:21px;" value="Science" disabled selected hidden>Choose Category</option>
<option style="color:black;font-size:21px;" value="Science">Science</option>
<option style="color:black;font-size:21px;" value="Education">Education</option>
<option style="color:black;font-size:21px;" value="Politics">Politics</option>
<option style="color:black;font-size:21px;" value="Art">Art</option>
<option style="color:black;font-size:21px;" value="Health">Health</option>
<option style="color:black;font-size:21px;" value="Technology">Technology</option>
<option style="color:black;font-size:21px;" value="Business">Business</option>
  <option style="color:black;font-size:21px;" value="Others">Others</option>  </select>
</div>
<div style="padding-bottom:5px;padding-top:5px;color:white;"><h5>You Can Add Pictures</h5>
<input type="file" name="file" id="input_sub3"class="filee" style="display:none;font-size:17px;width:90%;">

</div>
<a Id="click" href="" style="">Add Pictures</a>
<a Id="click2" href="" style="background:black;color: white;border:2px solid black;padding:5px;border-radius:5px;font-size:17px;margin-top:3px;display:none; width:90%;">Cancel </a>
<div style="padding:3px;"><input type="submit" id="input_sub4" style="background:white;font-size:17px;text-align:center;padding:2px;" value="Submit"></div>
</form>
    </div>


    <div class="cont" style="border:2px solid white;background:rgb(94, 108, 130);border-radius:4px;padding:2px;display:block;margin-top:5px;color:white;">
        <h3 id="choosect">Categories</h3>
<form action="" method="post">
<h3>
    <div id="catgro"><div id="categro">Your forum</div>
    <input type="checkbox" value="Yours Forum" name="autht" id="yforum" style="display: inline-block; background-color:rgb(178, 197, 215);">
</div>
<div id="catgro"><div id="categro">Science</div>
    <input type="checkbox" value="Science" name="" id="Science" style="display: inline-block; background-color:rgb(178, 197, 215);">
</div>
<div id="catgro"><div id="categro">Technology</div>      <input type="checkbox"value="Technology"  name="" id="Technology" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
<div id="catgro"><div id="categro">Education</div>      <input type="checkbox"value="Education"  name="" id="Education" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
<div id="catgro"><div id="categro">Politics</div>      <input type="checkbox" value="Politics" name="" id="Politics" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
<div id="catgro"><div id="categro">Art</div>      <input type="checkbox" value="Art" name="" id="Art" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
<div id="catgro"><div id="categro">Health</div>      <input type="checkbox"value="Health"  name="" id="Health" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
<div id="catgro"><div id="categro">Business</div>      <input type="checkbox" value="Business" name="" id="Business" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
<div id="catgro"><div id="categro">other</div>      <input type="checkbox" value="others" name="" id="other" style="display: inline-block; background-color:rgb(178, 197, 215);"></div>
</h3>


</form>
    </div>

     <div class="cont" style="border:2px solid white;background:rgb(94, 108, 130);border-radius:4px;padding:2px;display:block;margin-top:5px;color:white;">
        <h3 style="text-align:center;border-bottom:1px solid white;">Forum Numbers</h3>
<h1 id="choosect">
    Categories:<t id="count"></t>
Participants:<t id="count1"></t>
</h1>
    </div>
</div>

</div>


</div></div>
<script src="{{ asset('tss/ts/tutorial.js')}}">

</script>
@endsection
@extends('layouts.sidebar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>// Setup the calendar with the current date
$(document).ready(function(){
$("#click").click(function(e){
e.preventDefault();
$(".filee").show();
$("#click2").show();
$("#click").hide();
});
$("#click2").click(function(e){
e.preventDefault();
$(".filee").hide();
$("#click").show();
$("#click2").hide();
});
});
</script>
<script src="{{ asset('tss/ts/forum.js')}}"></script>
