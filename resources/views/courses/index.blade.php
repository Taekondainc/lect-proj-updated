<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
@extends('layouts.profile')
@section('content')




<div id="conta" style="height: 100%; "><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <div class="header">
        <h1>Welcome to your Courses!!!</h1>
    </div>
    @extends('layouts.sidebar')
    <h1 id="th1" style="background:green;color:white;"></h1>
   <div class="contcourse" id="contc" style="">
 </div>


@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('tss/ts/index.js') }}">

</script>
