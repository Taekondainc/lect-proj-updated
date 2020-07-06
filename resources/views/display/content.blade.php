
@foreach($request->sortBy('id') as $requests)

 <div class="ct" style="vertical-align:top;background-color: black;margin:10px;padding:20px;border:2px solid black;
 border-radius:10px; text-align:left;display:inline-block;width:47%;vertical-align:top;height:auto;">
      <h1 style="color:white;text-transform:capitalize;">{{ $requests->content }}</h1>
       <div id="itf">
          <?php
              $ht=$requests->date;
        $date = strtotime($ht);
        $rt = date('d/M/Y H:i:s', $date);
       echo $rt; ?></div>
  
             
<div style="text-align:left;color:white;text-transform:capitalize;word-break:break-all;font-size:20px;padding:10px;">
{{$requests->name}}</div>
      
<div style="text-align:left;color:white;text-transform:capitalize;word-break:break-all;font-size:20px;padding:10px;">
{{$requests->description}}</div>

     <a style="display:inline-block;word-break:break-all; color:white;font-size:17px;padding:30px;text-align:center;"
      id="download" href="{{ asset('course-contents/files/add/'.$requests->file ) }}" download>        
  Download : {{$requests->file}}  </a>        
  <div>
 <a id="ahref" class="dete" style="display:inline-block;background:red;color:white;" href="exdelete/{{$requests->id}}">
      <img  src="{{ asset('css/images/Delete.png') }}" style="width:40px;height:40px;"alt="">Delete</a>
     </div>
       </div>
     
    
 
@endforeach