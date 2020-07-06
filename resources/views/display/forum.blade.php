 <?php
 use App\progress; ?>
 @foreach ($query->sortBy('id') as $item)
<div id="forer" style="height:auto;margin:10px;vertical-align:top;display:none;padding:10px;border:2px solid white;border-radius:5px;background:black;width:98%;text-align:left;">
<div style="width:100%;"><h5 style="display:inline-block;font-size:27px;line-height:100px;color:white;">Category:{{$item->topics}}</h5>
<img src="{{ asset('course-contents/files/forum/'.$item->files ) }}" width='200px' height='200px'>
<h5 style="color:white;word-break:break-all;">{{$item->description}}  </h5>
<input type="submit" class="{{$item->id}}" style="font-size:23px;border:2px solid black;" id="input_sub3" value="Comments">

<input type="submit" class="{{$item->id}}" style="font-size:23px;border:2px solid black;" id="input_suo" value="Reply">
<div id="amountt" style="background:red;position:relative;top:-44px; left:17px;width:28px;height:28px;border-radius:50px;
text-align:center;color:white;font-size:20px;">
 <?php

 $t=$item->id;
echo $request = progress::where("fkey",$t)->count();
   
 ?> </div></div><div id="commt" style="width:100%;overflow-y:scroll;overflow-x:hidden;vertical-align:top;height:30%;">

</div>
<form style="display:none;margin:2px;text-align:center;width:100%;" class="dissappear" action="/comments" id="coml{{$item->id}}" method="post">
 @csrf
 <input type="hidden" value="{{$item->id}}"  name="id">   
<textarea name="comment" placeholder="Your Comment" style="text-align:left;font-size:16px;height:80px;
width:100%;border-radius:4px;color:black;background-color:#f9fafa;" 
id="" cols="30" rows="10"></textarea>
<input type="submit" id="input_sub3" value="Submit" style="width:30%;padding:10px;font-size:23px;border:2px solid black;">
<a  id="input_sub3" class="cancel" style="font-size:23px;border:2px solid white;padding:10px;" value="Submit">Cancel</a>
</form>
</div>
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>// Setup the calendar with the current date
$(document).ready(function(){
 $('body').on('click', '#input_sub3', function () {
      var vart=$(this).attr("class");
   $.ajax({
                    type: "get",
                    url: "/t/"+vart,
                    cache: false,
                    success: function (data) {
  $("#commt").show();
                       $("#commt").html(data);
                       
                    }
                });           
 
 });
 $('body').on('click', '#input_suo', function () {
 var vart=$(this).attr("class");
 $("#coml"+ vart).show();
   $("html, body").animate({
                   scrollTop: $("#forer").offset().top
               }, 1500);
 });

 $('body').on('click', '.cancel', function () {
 var vart=$(this).attr("class");

 $(".dissappear").hide();
  $("#commt").hide();
 });
    //  var varf=$(this).attr("class");
      // $.ajax({
               //     type: "get",
             //       url: "/t/"+varf,
               //     cache: false,
               //     success: function (data) {

                //       $("#commt").html(data);
             //          
             //       }
            //    });   
     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(" .dissappear").submit(function (e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '/comments',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
 $("#commt").show();
                       $("#commt").html(data);
                      
                        
                    },
                    error: function (data) {
                        console.log(data);
                    }
                }); });

    });
</script>