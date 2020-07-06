 
<link rel="stylesheet" href="{{asset('css/content/course.css')}}"><link rel="stylesheet" href="{{asset('css/index.css')}}">
<link rel="stylesheet" href="{{asset('css/tasks.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">

@extends('layouts.profile')
@section('content')
<div id="cont-x" style="padding-top:70px;">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
</div>
<div class="taskvid">
    <h1>Create and view your Tasks</h1>
    <img id="idpic1" src="{{ asset('css/images/task2.jpg') }}" alt="">
</div>
<div class="form_view_task">

    <div id="con_a">
        <div id="ft_div">
            <h1>Create Task</h1>
            <form action="/taskc" id="task_form" method="POST">
                 @csrf
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
               
                <div id="titled">
                    
                </div>

                <div class="label_container">
                    <input type="text" name="title" id="input_sub" placeholder="Task Title" required>
                </div>
                <div class="label_container">
                    <input type="text" name="task" id="input_sub" placeholder="Task"></div>

                <div class="label_container">
                    Due Date</div>

                <div class="label_container">
                    <input type="date" name="date" id="input_sub" placeholder="Task"></div>
                <div class="label_container">
                    <input type="submit" id="input_sub5" value="Create">
                </div>

            </form>
        </div>
    </div>
    <div id="cont_view_task">
        <h1 id="fpth">Here are your Tasks </h1><div class="da" style="color:red;"></div>
        <div class="cont_view">
             <figure>
              
              
              

            </figure> 
        </div>
    </div>
</div>

<div class="llt" style="display:none;position:fixed;left:0px;width:30%;height:100%;top:0px;background:black;text-align:center;padding:40px;z-index: 100;">

</div>
<script src="{{ asset('tss/ts/yt.js') }}">
</script>
@endsection
@extends('layouts.sidebar')
