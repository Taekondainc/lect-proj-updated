 <div class="event-name" style="text-align:center;color:white;"><h1>Tasks &Events</h1></div> 
 
 @foreach ($request as $requests)

 <div style="color:white;padding-top:30px;"><h3>{{ $requests->Title}}</h3></div> 
<div  style="color:white;"><h3>{{ $requests->Task}}</h3></div> 
 <div  style="color:white;"><h3>{{ $requests->date}}</h3></div>     
  

     @endforeach