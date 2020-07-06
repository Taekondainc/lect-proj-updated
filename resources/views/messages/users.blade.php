@foreach ($query as $key) 
    
<div id="clall" class="{{ $key->id}}">
<a class="nav-lin" id="{{ $key->id}}" name="{{$key->name}}" data-toggle="pill" 
  href="/{{ $key->id}}" role="tab" aria-controls="v-pills-profile" aria-selected="false" 
  style="background:white; color:black;padding:10px;margin:10px;display:block;font-size:20px;">
 {{ $key->name}}
</a></div>
@endforeach