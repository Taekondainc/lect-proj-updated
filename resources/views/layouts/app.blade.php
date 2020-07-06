  <?php

                            use App\User; ?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HLS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <!-- Styles -->

    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
</head>
<style>
  body{font-family:'Oswald', sans-serif ;
  font-size: 20px;
}
.nav-link:hover{
border-bottom:2px solid white;
}
</style>
<body>

  <div id="app">
        <nav class="navbar navbar-dark bg-dark fixed-top  navbar-expand-sm py-3  shadow-sm" style="z-index:1;height:65px;padding:0px;" id="navbar-black">
        <a href="/" style="text-align:right;">
                <img id="logo" src="{{asset('css/images/logo.png')}}" width="40px" height="50px;" style="display:inline-block;margin-left:10px;">
          </a>


           <!-- Right Side Of Navbar -->
<ul class="list-inline" >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" style="display:inline-block;">
                                <a class="nav-link" id="click" style="color:white;"href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="display:inline-block;">
                                    <a class="nav-link" id="click2" style="color:white;"href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>

                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" style="margin-right:20px;"class="nav-link dropdown-toggle bg-white text-white rounded" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <t style="color:black;">{{ Auth::user()->name }}</t>   <span class="caret bg-dark" style="background:black;"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                           <?php
                              $request=Auth()->id();
                              $req=User::where('id',$request)->get();?>

                                 <div class="cl-div"> <a id="vg" class="dropdown-item" href="/<?php    foreach ($req as  $value) {

                                $t=$value->role;
          //echo $t;

                           if ($t=="Administrator") {  Echo "home";}else{Echo "Index";}} ?> ">Home</a> </div>


                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>


</div>
                        @endguest
                    </ul>


        </nav>


       </div>
        <main class="py-4">

            @yield('content')
        </main>


</body>
</html>
