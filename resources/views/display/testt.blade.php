@foreach ($request as $item)
<div style="background:white;"><a href="/tasks" style="color:black">{{$item->Title}}</a>  </div>
@endforeach