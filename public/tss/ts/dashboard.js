$(document).ready(function(){
    $("#hm_bg").click(function(){
      $("#display_content").css("width", "100%");
      $("#content_container-div").show();

    ///   $('').toggleClass('show');
    // $(".ccv").toggle('show');
     $(".ccv").show("slow");
$(".ccv").css("left","0px");
$("#content_container-div").css("left", "0px");
      // $(".ccv").css("transition", " left .3 s ease out");
 $(".ccv").show("slow");
     // $("#side_menu").hide();
    $("body").css("width","86%");
     $("body").css("float", "right");
   // //  $("body").animate({
   //       left: '250px'
    //  })

    });
  });

$(document).ready(function () {
  $("#spn_").mouseover(function () {
    $("#display_content").css("width", "100%");
    $("#content_container-div").show();
    $("#side_menu").hide();
  //  $("body").css("width", "86%");



  });
  $(document).ready(function () {


      $("#close2").click(function () {
          $("#hytt").hide();
      });
  });
  //alert(window.location);
  //if (window.location == 'http://localhost:8000/home') {
  //     $("t").show();
 //$("#tg").hide();
 // }
  //else{
   //   $("#tg").show();
  //    $("t").hide();
 // }
});


$(document).ready(function () {


  //$.ajax({
  //    url: 'https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=4dbc17e007ab436fb66416009dfb59a8',
 //     method: "GET",
 //     type: "JSON",
 //     data: JSON.stringify(),
 //     success: function (data) {
 //       $('.apii').html(JSON.stringify(data), 2)
  //    }
 // });




});

$(document).ready(function () {

    // $("#Search").keyup(function(e){
    //var num=e.target.value;
    //console.log(num);
    // $.ajax({
  //       url: "http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3",
    //     method: "GET",
   //      dataType: "json",
       //  success: function (data) {
   //      // alert(JSON.stringify(data.title,undefined));
     //    }
   //  });
 // $.ajax({
  //    url: "http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3",
  //    method: "GET",
  //    dataType: "json",
  //    data:"json" ,
  //   success: function (data) {
   //       //alert(data);
         // console.log(data);
  //         $('.apii').html(data);
  //    }
 // });
 //  $.ajax({
   //    type: "GET",
  //     url: 'http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=cedd0e9b1d6d4fad8a6e1490e2abd5c3',
   //    data: 'json',
//
   //    success: function (data) {
   //      $.each(data,function(i,item){
  // $('.apii').text(item.title);
   //      });

   //    }
  // });
});


  $(document).ready(function(){
    $("#spn_").click(function () {
     $("body").css("width", "100%");
     $("#side_menu").show();
      $("#display_content").css("width", "600px");
      $("#content_container-div").fadeOut(1000);
      $(".ccv").hide("slow");
      $(".ccv").css("@keyframes example", " from {transform: transition(3 em, 0)}to {transform: transition(0, 0)}");

//$(".ccv").hide();
$(".ccv").css("left", "-200px");
    });
    //$(".ccv").mouseleave(function(){
    //  $("body").css("width", "auto");
    //  $("#side_menu").show();
    //  $("#display_content").css("width", "600px");
    //  $("#content_container-div").fadeOut(1000);

  // });

  });

  $(document).ready(function () {
$("#drop").mouseover(function () {
  $(".dropcontent1").show();
  $(".dropcontent1").css("display","inline-block");
  //$("#drop").css("background", "rgba(119, 183, 236, 0.63)");
 });
 });
  $(document).ready(function () {
      $("#drop").mouseleave(function () {
          $(".dropcontent1").hide();
      });
  })
  $(document).ready(function () {
      $("#logo").mouseover(function () {
          $(".dropcontent2").show();
          $(".dropcontent2").css("display", "inline-block");
      });
  });
    $(document).ready(function () {
        $("#class").mouseover(function () {
            $(".cvdd").show();
          $(".cvdd").css("display", "inline-block");
        });
    });

   $(document).ready(function () {
       $("#llp").mouseover(function () {
           $(".dropcontent3").show();
           $(".dropcontent3").css("display", "inline-block");
       });
   });

    $(document).ready(function () {
        $("#llp").mouseleave(function () {
            $(".dropcontent3").hide();
        });
    });
 $(document).ready(function () {
     $("#logo").mouseleave(function () {
         $(".dropcontent2").hide();
     });
 });
$(document).ready(function () {
    $("#class").mouseleave(function () {
        $(".cvdd").hide();
    });
});

