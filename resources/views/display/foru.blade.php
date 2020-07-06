<h1 style="text-align: center;color:white;border-bottom:3px solid white;">Comments</h1>
@foreach ($query as $items)
<div style="text-align:left;width:100%;background:white;border-radius:3px;border:2px solid white;margin:3px;">
<h5 style="color:black;text-align:center;font-size:14px;">
    {{$items->anonymous}} - {{$items->created_at}} </h5>
<h5 style=" color:black;font-size:14px;">{{$items->comment}}</h5>
</div>

@endforeach