<div style="position: absolute;right:0px;color:white;">
  <div>
    <spn id="yth" style="cursor:pointer;border:2px solid white;padding:30px;text-align:center;height:100px;background:white;width:100px;border-radius:50px;position:absolute;
right:0px;font-size:20px;color:black;" >
<h1>x</h1>
</spn>
</div>
<h1 style="position:absolute;top:110px;cursor:pointer;right:10px;background:black;border-radius:3px;"><div>Close</div></h1>
</div>
@foreach ($requests  as $request) 
   <div style="background:black;border-radius:4px;width:80%;border:2px solid white;"> 
    <h1 style="color:white;">Assignment:</h1>
    <h1 style="color:white;">Course:{{$request->cname}}</h1>     
  <h1 style="color:white;">Title:{{$request->title}}</h1>  
    <h1 style="color:white;">Assignment:{{$request->assignment}}</h1>  
   </div>
       @endforeach