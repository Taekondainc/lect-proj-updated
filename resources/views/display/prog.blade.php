@foreach ($request as $item)
    

<img src=' {{asset('course-contents/images/'.$item->clogo )}}' width='70px' height='70px'> 
@endforeach