

@foreach ($task->sortBy('id') as $requests)
<div class="modalt">
    <div class="span">X</div>
    <div class="modal-contain">
        <h1>EDIT CONTENT</h1>
        <div class="form">
            <form action="" method="post">
                <input type="hidden" name="" id="input_sub" value=" {{$requests->id}}">
                <input type="text" name="" id="input_sub" value=" {{$requests->cname}}">
                <input type="text" name="" id="input_sub" value=" {{$requests->content}}">
                <input type="text" name="" id="input_sub" value=" {{$requests->cdesc}}">
                <input type="text" name="" id="input_sub" value=" {{$requests->cont_fil}}">
                <input type="text" name="" id="input_sub" value=" {{$requests->appr}}">

            </form>
        </div>
    </div>
</div>
@endforeach