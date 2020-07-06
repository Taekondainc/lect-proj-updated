<div class="btn-group mw-100 text-white-50 align-content-center " style="font-family:'Oswald', sans-serif; width:100%;">
  <button type="button" class="btn btn-dark  bg-dark w-100 mw-100 m-md-3 dropdown-toggle text-center text-white" style="font-family:'Oswald', sans-serif ;font-size:20px;"
   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Select Students by Course
  </button>
  <div class="dropdown-menu" style="width:88%;">

@foreach ($request as $item)

  <a class="nav-link active" name="{{$item->cname}}" id="{{$item->id}}" data-toggle="pill" 
  href="/lecturer/{{$item->cname}}" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="background:black;">
 {{$item->cname}}
</a>
  

 
    
@endforeach
</div>
</div>
 <div class="ltcc" style="font-size:18px;text-transform:capitalize;"></div>