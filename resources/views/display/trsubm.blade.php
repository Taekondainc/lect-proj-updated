  
    @foreach ($request as $item)
    <tr id="gshow">
     
 <td style="width:20%;">{{$item->student}}</td>  
 <td style="width:15%;">{{$item->submission}}</td>
 <td style="width:15%;">{{$item->gos}}</td>
 <td style="width:15%;">{{$item->goc}}</td>
 <td style="width:15%;">{{$item->cname}}</td> 
<td style="width:15%;">
 <a id="ahref"  class="edit" style="padding:10px;border-radius:3px; background:green;color:white;font-size:13px;" href="editd/{{$item->id}}">
     <img  src="{{ asset('css/images/ed.png') }}" style="width:20px;height:20px;"alt="">Edit</a>   
    
    <a id="ahref"  class="delet" style="padding:10px;border-radius:3px; background:red;color:white;font-size:13px;" href="edele/{{$item->id}}">
     <img  src="{{ asset('css/images/Delete.png') }}" style="width:20px;height:20px;"alt="">Delete</a>
</td> 
 </tr>
 @endforeach
