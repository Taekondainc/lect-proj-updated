
 <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">

 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  @extends('layouts.profile')
  @section('content')


    <div class="cloa" style="padding-top:60px;text-align:center;font-family:'Oswald', sans-serif ;">

        <h2 class="resize">
 <div id="cont-linka">  <a id="task_link" id="fronta" href="/cr_tut"><img id="img" src="{{ asset('css/images/tutorial_class.png') }}" alt="">
  <div>  View Tutorials</div></a>
         </div>
         <div id="cont-linka"> <a id="task_link" id="fronta" href="/tasks" ><img id="img" src="{{ asset('css/images/create_task.png') }}" alt="">
          <div>Create Task/Do</div> </a>
        </div>
        <div id="cont-linka"><a id="task_link" id="fronta" class="ai_assist" ><img id="ai_assist"
            src="{{ asset('css/images/ai_assist.png') }}" alt=""><div> Site Assistant</div></a></div> </h2>
        <div class="contente" style="">
            <h1 style="border-bottom:3px solid white; width:50%;display:inline-block;"> NewsFeed</h1>
            <div class="apii" style="padding:20px;margin-top:-60px;">
         <?php
    $q = "http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3";
    $json = file_get_contents($q);
    $details = json_decode($json,true);
   // print_r($distance=$details->articles[0]->title);
    //$distance=$details->articles[0]->title;
    //echo "<h1>" . $distance ."</h1>";
  $json_string = file_get_contents("http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3");
    $parsed_json = json_decode($json_string);


 foreach ($parsed_json->{'articles'} as $item) {
 $publ = $item->publishedAt;
 $rty=date_create(preg_replace("/[^0-9.]/","" ,$publ));

  $newformat = date_format($rty,"Y/m/d H:i:s");

$author = $item->author;
 $source = $item->source->name;
 $title = $item->title;

 echo "<div id='news' style=''>
  <div><h3>". $title ."</h3><h4 style='margin-top:-10px;'></h4><h5>". $newformat."<br>". $author."</h5></div>";

?>

 <?php
  $image = $item->urlToImage;
  echo "<div  style='text-align:center;padding:40px;'><img style=' display:inline-block;max-width: 100%;max-height: 70%;' src='" .  $image ."'></div>";
   $content = $item->content;
  echo "<div><article><h4>". $content."</h4></article></div>";
  $rt = $item->url;
echo  "<div style='text-align:center;margin-top:30px;'><a style='font-size:20px;border:2px solid
   transparent;display:inline-block;background:#0a97c9;color:white;border-radius:5px;' href='".$rt."'>Click to read more...</a></div></div>";
 //$q = "https://www.insidehighered.com/news/feed";
  //  $json = simplexml_load_file($q);
 //print_r($json->title);

  }

?>
            </div>
        </div>
    </div>

  @endsection
 @extends('layouts.sidebar')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>// Setup the calendar with the current date
$(document).ready(function(){


    //  $("[id=news]").fadeIn(4000);
    $("[id=news]").show(4000);
      $("[id=news]").css("display", "inline-block");
      $("[id=news]").height("60%");
       $(".clickme2").show("slow");  $(".events-container").css("top","50");
        $(".clickme").hide("slow"); $(".events-container").show("slow");
      //  $(".events-container").css("top","220px");
      $(".events-container").css("@keyframes example", " from {transform: transition(-400px,180)}to {transform: transition(0, -400px)}");

//$(".ccv").hide();
$(".events-container").css("right", "0px");
$(".calendar").css("margin-left", "-110px");


                });
    </script>
