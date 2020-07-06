<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{ asset('css/images/logo.png') }}">

<link rel="stylesheet" href="{{ asset('css/messages.css') }}">
@extends('layouts.profile')
<style>
    #conta{
        padding-top: 70px;
    }
    @media only screen and (max-width: 1000px) and (min-width: 0px){
.containerr {
    width: unset;
    display: block;
    margin: unset;
    height: unset;
}
.contacts {
    width: unset;
    height: unset;
    flex-basis: unset;
}
}
</style>
@section('content')
<div id="conta" style="margin-bottom:30px;">
    <a class="ai_assist">
        <img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" width:100px;
            height:100px;alt="">
        <h5 style="font-size:13px;margin-bottom:0px;">Site Assistant</h5>
    </a></div>
    <h1 style="text-align:center;margin-bottom:0px;">Message and Collaborate with lecturers and Students</h1>
  <div class="containerr" style="" >
	<div class="contacts">

	<h3>	<div class="btn-group mw-100 text-white-50 align-content-center " style="font-family:'Oswald', sans-serif; width:100%;">
  <button type="button" class="btn btn-dark  bg-dark w-100 mw-100 m-md-3 dropdown-toggle text-center text-white" style="font-family:'Oswald', sans-serif ;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Messages
  </button>
  <div class="dropdown-menu" style="width:88%;">
    <a class="dropdown-item w-100 text-lg-center"  id="cht"  href="#cht">Chat</a>
    <a class="dropdown-item w-100 text-lg-center"  id="ltr"  href="#ltr">Students</a>


  </div>
</div></h3>
	<div class="contacts bg-dark h-100" >
<div class="Chat bg-dark h-100 text-white text-lg-center " style="display:none;">
	<h1>Chat</h1>
	<div class="cmessages" >
        <h1 id="alerttest">Scroll to see contacts if you're in mobile view here <img id="ai_assist" style="background: transparent;" src="{{ asset('css/images/downbuttn.png') }}" alt=""></h1>
<div class="input-group mb-3">
  <input type="search" class="form-control" id="messagesearch" placeholder="Recipient's username"
   aria-label="Recipient's username" aria-describedby="basic-addon2">



</div>
<h1 style="font-size:15px;">Students or Lecturers</h1>
<div class="persons" style="font-size:19px;height:58%;overflow-y:scroll;">

</div>

	</div>
</div>
<div class="lecturers  bg-dark h-100 text-white text-lg-center" style="display:none;">
<h1>Course Students</h1>
<div><div class="ltc-c" >

	</div></div>
</div>


		</div>
	</div>
	<div class="messages">
		<h1><div id="hj" class="pop  text-lg-center " style="color:white;"></div></h1>
		<div class="messcont"></div>
	</div>

	<div class="form">
		<div class="form-inner">
		<form action="/messages" id="mess" method="post">
		@csrf
		 <input type="hidden" id="respondent" name="uid" value="">
		   <textarea type="text" name="message" id="">
            </textarea>
            <button><img src="{{ asset('css/images/send.png') }}" width="60px;" height="60px;"alt=""></button></form>

		</div>
	</div>
</div>
<script src="{{ asset('tss/ts/chat.js') }}">

</script>
<script src="{{ asset('tss/ts/ai-chabot.js')}}">
</script>
@endsection
@extends('layouts.sidebar')
