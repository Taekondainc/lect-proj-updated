
   
@foreach($task->sortBy('id') as $requests)

      <div class="ct" style=" background-color: rgba(75, 98, 100, 0.214);margin:10px;padding:20px;border:2px solid black;border-radius:10px; text-align:left;display:inline-block;width:47%;vertical-align:top;height:auto;">
      <h1 style="color:black;text-transform:capitalize;">{{ $requests->content }}<div style="text-align:center;color:black;font-size:20px;text-transform:capitalize;border:2px solid black;border-radius:10px;width:auto;padding:3px;float:right;" id="{{$requests->Appr}}">{{$requests->Appr}}</div></h1>
       <div id="itf">
          <?php
              $ht=$requests->date;
        $date = strtotime($ht);
        $rt = date('d/M/Y H:i:s', $date);
       echo $rt; ?></div>
  
   <div class="dodd" style="width:100%;float:right;">
        
<div style="text-align:left;color:black;text-transform:capitalize;word-break:break-all;font-size:20px;padding:10px;">{{$requests->Cdesc}}</div>

                


                </div>
                  
            <a style="display:inline-block;word-break:break-all; color:black;font-size:17px;padding:30px;text-align:center;" id="download" href="{{ asset('course-contents/files/'.$requests->cont_fil ) }}" download>        
  Download : {{$requests->cont_fil}}  </a>         
            <label  class="edit/{{$requests->id}}/content" id="contedit"  style="text-decoration:underline;cursor:pointer;display:block;"> 
                  <h1 style="text-align:center;">  Edit Content </h1> </label>  
          
        </div> 

@endforeach
<script src="{{ asset('tss/ts/content.js') }}">

</script>