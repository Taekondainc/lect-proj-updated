<div  class="ftgk" style="float:right;border-radius:50%;height:100px;width:100px;border:2px solid white;text-align:center;font-size:43px;margin:20px;padding:10px;color:white;" >x</div>
             @foreach ($taskss as $t)
               <div class="Edit" id="dod/{{$t->id}}/Edit">
                       <form  id="taskssa" action="/edittask"  method="POST">
                @csrf
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
               
                <input type="hidden" name="id" value="{{$t->id}}">

                <div class="label_container"><div class="label_container" style="color:white;text-align:center;margin-top:100px;">
                   Title</div>
                    <input type="text" style="background:white;color:black;"name="titled" id="input_sub" value=" {{$t->Title}}"  required>
                </div>
                <div class="label_container" style="color:white;">
                    Description</div>
                <div class="label_container">
                    <input type="text" name="task" style="background:white;color:black;" id="input_sub" value="{{$t->Task}}"></div>
 
                <div class="label_container" style="color:white;">
                    Due Date</div>

                <div class="label_container">
                    <input type="date" name="date"style="background:white;color:black;" id="input_sub" value="{{$t->date}}"></div>
                <div class="label_container">
                    <input type="submit" style="background:white;color:black;" class="input_sub5" id="input_sub5" class="{{$t->id}}/Edit" value="Create">
                </div>

            </form>@endforeach
            