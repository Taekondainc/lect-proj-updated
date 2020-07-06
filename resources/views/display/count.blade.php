 <?php 
 use App\register;
 foreach ($request as $value) {
         $course=$value->cname;
           $task = register::where("cname",$course)->count("cname");
    ?><div id="countstud"> <div style="height:300px;margin:3px;padding:2px;">  
    <a style="display:inline-block;color:white;text-align:center;
    height:200px;padding:10px;margin:15px;border-radius:10px; border:2px solid rgb(31, 81, 76);
     background:rgb(1, 1, 1,0.8); " href="{{$value->id}}/course-content">
            <img src="{{asset('course-contents/images/'.$value->clogo )}}" alt="" width="100px" height="100px" style="border-radius:50px;margin-bottom:10px;margin-top:10px;" title="" />
         <h1>{{$value->cname}}</h1>  </a></div>
           <div style="">   <h1 style="width:100%;">  <?php       echo $course; ?><br>Number of Students:
            <?php echo $task; ?>
     </h1></div> </div>
  <?php }?>
 
