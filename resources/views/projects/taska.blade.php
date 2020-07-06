   @foreach ($task as $tasks) <div class="task_container">
                    <div class="icon">
                        <img id="TASK_ICON"  src="{{asset('css/images/TASK.PNG')}}">

                    </div>
                    <div class="TASK_" style="text-align:center;margin-top:10px; font-size:16px; ">
                        <b style=" text-align:center; text-decoration: underline;text-transform: capitalize;">
                            {{$tasks->Title}}</b></div>
                    <div class="TASK_">
                        <b>Task:</b>
                        <h5>{{$tasks->Task}}</h5>
                    </div>

                    <div class="TASK_"> <b>Due:</b>
                        <h5 >{{$tasks->date}}</h5>
                    </div>

                    <div class="TASK_">
                         <a  style="color:white;background:green;padding:3px;border-radius:3px;" id="{{$tasks->id}}/Edit" class="ftgs" href="{{$tasks->id}}/Editl">EDIT</a>
                         <a class="clicker" style="color:white;background:red;padding:3px;border-radius:3px;" id ="{{$tasks->id}}/Delete" href="{{$tasks->id}}/Delete">DELETE</a></div>
                </div> 

            
                </div>@endforeach
                <script>$(document).ready(function () {
    $('body').on('click', '.clicker', function (e) {
                e.preventDefault();
 $(".da").html("Deleted");
 $(".da").show();
  $(".da").fadeOut(4000);
       });


    $(".task_container").show(3000);  
    $(".task_container").css("display","inline-block");  
    });
</script>