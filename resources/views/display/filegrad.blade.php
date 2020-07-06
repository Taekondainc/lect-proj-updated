  
    @foreach ($request as $item)
    <tr id="gshow">
     
 <td style="width:15%;">{{$item->cname}}</td>  
 <td style="width:15%;"> 
    <a style="word-break:break-all; color:blue;font-size:17px;text-align:center;"
     id="download"  class="dtgr"  href="{{ asset('course-contents/files/grades/'.$item->file  ) }}" download> {{$item->file}} </a> </td>
 <td style="width:15%;">{{$item->size}}</td>
 <td style="width:15%;">{{$item->sub}}</td>
 <td style="width:15%;">{{$item->grd}}</td> 
<td style="width:15%;">
    <a id="ahref"  class="deled" style="padding:10px;border-radius:
    3px; background:red;color:white;font-size:13px;" href="ddele/{{$item->id}}">
     <img  src="{{ asset('css/images/Delete.png') }}" style="width:20px;height:20px;"alt="">Delete</a>
</td> 
 </tr>
 @endforeach
<script>
      if ($('html').css('background-image') != 'none') {

 $(".dtgr").css("color","white");

}else{
    
}</script>