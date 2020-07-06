$(document).ready(function () {
    $('body').on('click', '#contedit', function () {
       var tf = $(this).attr("class"); 
       //console.log(tf);
     //   alert("hello");
     $(".form-checkkt").show();
        // $("body").css("width", "70%");
// $("body").css("float", "right");
 $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
});
 //var t = $(this).attr("id");
 //console.log(t)
  $.ajax({
       type: 'POST',
     url:"/" + tf,
  data: 'success',
 success: function (data) {

       $("#pop").html(data);
$(".label_con").show();
$("#yth").show();
 },
  error: function (data) {
     $("#title").html("Passed limitd");
 }
  });
  });


});



$(document).ready(function () {
    $('[id=Approved]').css("background-color", "rgb(77, 224, 47)");
    //$('[id=Approved]').css("border", "rgb(53, 218, 20)");
    $('[id=Disapproved]').css("background-color", "#D62929");
    $('[id=Disapproved]').css("color", "white");
    $('[id=Disapproved]').css("border", "2px solid #D62929");
    // var tex = $('[id=Approved]').length;
    // console.log(tex);
    // if (tex === "Approved") {

    //     $('[id=Approved]').css("background-color", "rgb(77, 224, 47)");
    // } else {
    //      $('[id=Approved]').css("background-color", "#D62929");
    // }//

});



  $(document).ready(function () {
       $('body').on('click', '#yth', function () {
  $("#pop").hide();
  });
  });
 

 
 $(document).ready(function () {
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });;
     $('body').on('click', '.input_sub6', function (e) {
         e.preventDefault();

         var formData = new FormData(document.getElementById("form"));

         
             $.ajax({
                 type: 'POST',
                 url: '/submit',
                 data: formData,
                 cache: false,
                 contentType: false,
                 processData: false,
                 success: (data) => {
                    var thy = document.getElementById("form");
                     thy.reset(data);
                     $("#alert").html(data);
                 },
                 error: function (data) {
                     console.log(data);
                 }
             });

          ////

        // $.ajax({
         //    type: 'get',
        //     url: "/taskcc",
         //    data: 'success',
          //   success: function (data) {
                 //$("#titled").html(data);
          //       $("figure").html(data);
//
         //    },
         //    error: function (data) {
        //         console.log('Failed');
        //         console.log(data);
       //      }

      //   });

     });
     });
 
 // $(document).ready(function () {
    //  $("label").click(function () {
     //     $(".form-checkk").show();
    //      $("#form").show();
     //     $("#yth").show();
    //      $(".label_con").show();
          // `this` is the DOM element that was clicked

          // $("label").click(function () {
          //        var index = $(this).index();
          //      $(this).children().show();

          //    });
          //    $("#yth").click(function () {
          //      $("label").children("div").fadeOut();
          //       $("label").find("form").hide();
          //     $("label").find("span").hide();
          //     //  $("label").find("div").css("background","white");
          //   $("label").find("div").css("top", "-1000px");
          //       // $('pop').hide();
          //   });
          //
          //  $("label").click(function () {
          //      var index = $(this).index();
          //     $(this).children().fadeIn();


          //  });
      //});

   //  $("#yth").click(function () {
     //     $(".form-checkk").hide();
    //      $("#form").hide();
          // $("label").children("div").fadeOut();
          // $('pop').hide();
   //   });
 // }); 
//$(document).ready(function (event) {
  //   var formData =$(".view").attr("value");
  //   
   // var id =$("#gop").text();
   // alert(id);
  // $('body').on('click', '.input_sub6', function (e) {
              // e.preventDefault();
  //  $.ajax({
  //     type: 'get',
  //   url: "/view",
  //  data: {request:formData},
 // success: function (data) {

    //    $(".container_form").html(data);
   
   //   }, 
  //  error: function (data) {
   //    console.log('Failed');
    //    console.log(data);
  //  }
 //  }); 
//});
  
//});