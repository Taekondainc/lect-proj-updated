<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <title></title>

</head>
<style>
  body{font-family:'Oswald', sans-serif ;
}
#vart{
display: flex;
}
  body{font-family:'Oswald', sans-serif ;
}
#vart{
display:flex;
}
@media only screen and (max-width: 1000px) and (min-width:0px) {
#cont{
    width: auto;
    margin-top: 0;
}
#log{
    position: absolute;
    right: 10px;
}
#log2{
    position: absolute;
    right:2px;
    font-size: 18px;
    color: white;
    float: right;
    background-color: rgb(63, 65, 68);
    margin: 10px;
    text-align: center;
    border-radius: 3px;
    width: 40px;
}
#log3{
    position: absolute;
    right: 55px;
    font-size: 18px;
    color: white;
    float: right;
    background-color: rgb(63, 65, 68);
    margin: 10px;
    text-align: center;
    border-radius: 3px;
    width: 60px;
}

#vart{
display: block;
}}
#vart div{
margin-top:50px;
}
</style>
<body>

    <div id="col_div">


        <div id="login">
            <a href="/">
                <img id="logo" src="{{asset('css/images/logo.png')}}">
            </a>

            <div id="cont">
                <div id="artice">
                    Learn Using Our Interactive<br>
                    and Efficient<br>
                    Resource Managment Software
                </div>
                <div id="vart">
                    <a id="clk_able" href="/projects/">Get Started...</a>
                    <a id="clk_able" href="/projects/">Read More...</a>
                </div>
            </div>

            @if (Route::has('login'))

            @auth
            <a id="log" href="{{ url('/home') }}">Home</a>


              @else
            <a id="log2" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a id="log3" href="{{ route('register') }}">Register</a>
            @endif
            @endauth

            @endif

        </div>

    </div>

</body>

</html>
