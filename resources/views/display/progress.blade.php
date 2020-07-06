<link rel="stylesheet" href="{{asset('css/index.css')}}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<link rel="stylesheet" href="{{asset('css/progress.css')}}">
@extends('layouts.profile')
@section('content')
<style>#conta{
padding-top: 80px;
}

.progress {
  background: #363837;
  justify-content:center;
  border-radius: 18px;
  align-items: center;
 
  padding:5px;
 display:inline-block;
  height: 18%;
  width:90%;
}

.progress-value {
  animation: load 5s normal forwards;
  box-shadow: 0 10px 40px -10px #fff;
  border-radius: 15px;
  background: #fff;
  height: 98%;
  width: 0px;

}

@keyframes load {
  0% { width: 0; }
  100% {  }
}

</style>
<div id="conta" style="height: 30%;padding-top:80px;"><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
    <h2>
        Course Progress.
    </h2>
 
</div>
<div class="contas"><div id="wrapper" style="">
			
		</div>
                </div>
<script src="{{ asset('tss/ts/progress.js')}}"></script>
<script>
      if ($('html').css('background-image') != 'none') {
 $("#wrapper").css("color","white");


}else{
    
}
</script>
@endsection
@extends('layouts.sidebar')