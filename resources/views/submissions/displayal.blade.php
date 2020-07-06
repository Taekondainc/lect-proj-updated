<div style="position: absolute;right:0px;color:white;">
  <div>
    <spn id="yth" style="cursor:pointer;border:2px solid white;padding:30px;text-align:center;height:100px;background:white;width:100px;border-radius:50px;position:absolute;
right:0px;font-size:20px;color:black;" >
<h1>x</h1>
</spn>
</div>
<h1 style="position:absolute;top:110px;cursor:pointer;right:10px;background:black;border-radius:3px;"><div>Close</div></h1>
</div>
@foreach ($requests as $request) 
   <div style="background:black;border-radius:4px;width:80%;border:2px solid white;height:700px;overflox-y:scroll;"> 
    <h1 style="color:white;">Test:{{$request->qn}}</h1>
    <h1 style="color:white;">Course:{{$request->cname}}</h1>  
  <h1 style="color:white;">Title:{{$request->Testname}}</h1><h1>Starting Time:{{$request->time}}</h1>  
  <h1 style="color:white;">Date:{{$request->date}}</h1> 
  <div style="height:360px;width:100%; overflow-y:scroll; ">
 <table >
    @foreach ($requestsa->sortBy('created_at') as $requestt) 
  
  <tr style="margin-top:10px;margin-bottom:10px;">  <td style="color:white;font-size:20px;">Question Number:</td><td style="color:white;font-size:20px;">{{$requestt->QN}}<td> </tr> 
   <tr> <td style="color:white;font-size:20px;">Question:</td><td style="color:white;font-size:20px;">{{$requestt->question}}  </td> </tr> 
  
       @endforeach</table> </div>
   </div>
       @endforeach 
      