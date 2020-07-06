@foreach ($request as $item)
    
<div class="nav-li" name="{{ $item->uid}}" id="{{ $item->uid}}" data-toggle="pill" 
  href="/messagecontent/{{$item->id}}" 
  role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color:white;">

</div><div style="width:40%;display:inline-block;text-align:center;"><div style="background:white;border-radius:13px;color:black;">
  <h5 style="color:black;"> {{ $item->message}}</h5></div><div class="card-group" style="color:white;">{{$item->created_at}}</div></div>@endforeach
