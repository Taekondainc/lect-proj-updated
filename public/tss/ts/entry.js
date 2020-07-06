$(document).ready(function() {
    $(".code").keyup(function(){
  var t=$(".code").val();
    $("#call").val(t);
    });
     });
$(document).ready(function () {
    $('#ltpcx').click(function () {

        $(".gthdiv4").toggle();

    });
    $('#ltpcx2').click(function () {

        $(".gthdiv").toggle();

    });
    $('body').on('click', '#ltpcx3', function () {

        $(".gthdiv2").toggle();

    });
    $('body').on('click', '#ltpcx4', function () {

        $(".gthdiv3").toggle();

    });

});
   $(document).ready(function (e) {

       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });



       $('#createform').submit(function (e) {
           e.preventDefault();

           var formData = new FormData(this);

           $.ajax({
               type: 'POST',
               url: '/courses',
               data: formData,
               cache: false,
               contentType: false,
               processData: false,
               success: (data) => {
                   this.reset();
                 $(".tex").html(data);
               },
               error: function (data) {
                   console.log(data);
               }
           });
       });
   });

 $(document).ready(function (e) {

     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     $('#createform').submit(function (e) {
         e.preventDefault();

         var formData = new FormData(this);

         $.ajax({
             type: 'POST',
             url: '/content',
             data: formData,
             cache: false,
             contentType: false,
             processData: false,
             success: (data) => {
                 this.reset();
                 $(".tex").html(data);
                 $(".tex").scrollTop();
             },
             error: function (data) {
                 console.log(data);
             }
         });
     });
 });

//$(document).ready(function () {
//setInterval(function () {


  // $.ajax({
  ///     type: 'get',
   //    url: "/cont",
     //   data: 'success',
    //   success: function (data) {

     //      $(".view").html(data);

   //    },
   //    error: function (data) {
     ////      console.log('Failed');
    //       console.log(data);
    //   }
  // });
  // },1000);

//});


 // var Elements = document.getElementsByClassName("[id='fts']");
 // //var t = $("[id='fts']").attr("class");
 // console.log(t);
  //s.
 //  var g =t;

 //  console.log(g);

    // $(g).click(function () {



         //

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
  $("label").click(function () {
     $(".form-checkk").show();
 $("#form").show();
 $("#yth").show();
 $(".label_con").show();
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
           });

           $("#yth").click(function () {
                      $(".form-checkk").hide();
                      $("#form").hide();
                     // $("label").children("div").fadeOut();
                         // $('pop').hide();
                     });
            });
//$("#yth").click(function () {
 //
  //  $('label').fadeIn("5000");
  //   $('.form-checkk').style.display="none";
   //
 //   });
//var numItems = $('label').length;
//var numItems = $('.list-group').length;

//var numItes = $('div.list-group').find('label').length;
//$('div.list-group').each(($(this).find('label')).length);


            // `this` is the DOM element that was clicked
       //     var index1 = $('form')[0].length;

        //    console.log(index1);
 // var index = $("form").index('form');
//console.log(index);
   // if (index==index && index1 ==index1){
    //  var1= $('index1').eq(index).show().siblings().hide();
   //   var idx = $('label form').index(this);
   //     console.log(1);
  //  }else{
// }
   //  });

  //   var btn = jQuery('label');
//console.log(btn);
     //btn.
   //  var ht=  $(btn).attr("class");
   // $("label").click(function () {
    //    if (this.class == ht) {
     //       alert('Submit 1 clicked');
      //  } else if (this.id == 'submit2') {
      //      alert('Submit 2 clicked');
     //   }
 //   });
    // $(ht).click(function () {
   //  console.log(btn);
  //    var El = $("[id = 'fts']").attr("class");
  //    document.getElementsByClassName("form-check");

//if ($(El).parents("#gt").length == 1 ) {
 //$("#" + s).show();
 //    var s = $(El).attr("id");
 //    $("#" + s).show();
  //   console.log(El);
    // YES, the child element is inside the parent

//} else {
//console.log("error");
    // NO, it is not inside

//}



  // });





   // $("[class='form-check']:first").show();
//var bothElements = document.getElementsByClassName("[class='form-check']");
//var t=$("[class='form-check']").attr("id");
//bothElements[0];

//.attr("id");
//var s=$(t).attr("id");
//var s=  t ;console.log(t);
//s.
   // $(".form-check")[0].show();
  //   $('#' + s).css("display", "inline-block");
  //   });
  //   });


 //   var tg = $("[id=link]").attr("id");

   // $("[id=link]").attr("id", "link");
   //$("#link").each(function () {
  //     if ($(this).attr("id") == "link") {
   //      $("#link").attr("id", "link2t");
   //    }else{
   //        console.log("error");
  //     }
  // });

   // $.ajax({
    //              type: 'get',
     //               url: "/tank",
       //             data: {'id': id},
     //             success: function (data) {
      //             $(".mdal").html(data)
       //           },       error: function (data) {
     ///                 console.log('Failed');
          //              console.log(data);
         //          }

  // $('div').click(function () {
    //   var id = $('div').attr('id'); // gets the id of a clicked link that has a class of menu

 //  console.log(id);
 //$f=id.data('value');
 //console.log(f);
  //   $("div").click(function () {
   //   var Id = $('div').attr('id');
  //    console.log(Id);
  // });
    //
  //   console.log(Id);


  //$(Id).attr('class');
 // console.log(Id);
  //$(Id).click(function () {
   //   console.log("success");
 // });

   // $("[id=link]").click(function (e) {
   //     e.preventDefault();
// $.ajax({
 //    type: 'get',
 //    url: "/tank",
  //  data: 'success',
  //success: function (data) {
  //     $(".mdal").html(data)
  //  },       error: function (data) {
   //   console.log('Failed');
    //       console.log(data);
    // }
   // });
 //});
//});

//$(document).ready(function (e) {


  //  $.ajaxSetup({
   //     headers: {
    //        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   //     }
    //});
   // $('form').submit(function (e) { e.preventDefault();

    //    var formData = new FormData(this);

   //     $.ajax({

     //       type: 'POST',
    //        url: '/tank',
   //         data: formData,
   //         cache: false,
    //        contentType: false,
   //         processData: false,
    //        success: (data) => {
      //          this.reset();
     //           $(".mdal").html(data);
     //       },
     //       error: function (data) {
      //          console.log(data);
     //       }
    //    });
 //   });
//});


