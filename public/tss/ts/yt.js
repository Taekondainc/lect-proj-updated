 // $("span").click(function () {
  //    $("label").show();​​​​​​
  //    // $('.form-checkk').css('display'​​​​​​​​​​​​​​​​​​​​​​​​​​​, 'none');​​​​​​
 // });

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
       $('body').on('click', '.ftgk', function (e) {
 $(".llt").hide();
   $("body").css("width", "100%");
 });
    });
  $(document).ready(function (e) {

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#task_form').submit(function (e) {
          e.preventDefault();

          var formData = new FormData(this);

          $.ajax({
              type: 'POST',
              url: '/taskc',
              data: formData,
              cache: false,
              contentType: false,
              processData: false,
              success: (data) => {
                  this.reset();
                 
                   $("#titled").html(data);
              },
              error: function (data) {
                  console.log(data);
              }
          });
          $.ajax({
              type: 'get',
              url: "/taskcc",
              data: 'success',
              success: function (data) {

                  $("figure").html(data);

              },
              error: function (data) {
                  $("#title").html("Passed limitd");
              }
          });
      });
  });
$(document).ready(function () {
        $("#input_sub5").click(function () {
 $.ajax({
    type: 'get',
    url: "/taskcc",
   data: 'success',
   success: function (data) {

      $("figure").html(data);
  
    }, 
    error: function (data) {
      $("#title").html("Passed limitd");
   }
 });
 });
 

 
});
 $(document).ready(function () {
    $('body').on('click', '.ftgs', function (e) {
                e.preventDefault();
                $(".llt").show();
                $("body").css("width", "70%");
                $("body").css("float", "right");
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });

     var t = $(this).attr("id");
     var ft=t + "l";
      
       
                 $.ajax({
           type: "get",
           url: "/" + ft,
          data: 'success',
              success: function (data) {

                  $(".llt").html(data);
               
              },
              error: function (data) {
                  $("#title").html("Passed limitd");
              }
         });
        });
       
         });
 $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           ;
        $('body').on('click', '.input_sub5', function (e) {
            e.preventDefault();
        
            var formData = new FormData(document.getElementById("taskssa"));
 
    var r = confirm("do you want to update??!!!");
    if (r == true) {
     //  var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '/edittask',
                 data: formData,
                     cache: false,
                     contentType: false,
                     processData: false,
                     success: (data) => {
                         var thy=document.getElementById("taskssa");
//thy.reset(data);
                         $("#titled").html(data);
                     },
                     error: function (data) {
                         console.log(data);
                     }
                });   
               $.ajax({
                   type: 'get',
                   url: "/taskcc",
                   data: 'success',
                   success: function (data) {
                       //$("#titled").html(data);
                       $("figure").html(data);

                   },
                   error: function (data) {
                       console.log('Failed');
                       console.log(data);
                   }

               });
    } else {
        alert("ok");
    } //
                
$.ajax({
    type: 'get',
    url: "/taskcc",
    data: 'success',
    success: function (data) {
//$("#titled").html(data);
        $("figure").html(data);

    },
    error: function (data) {
        console.log('Failed');
        console.log(data);
    }

           });

            });
            });
          
  //  $($(this).data(t)).toggle();
//console.log(attr);
  //console.log($("#" + t));
//var f= $("#" + t).show();
  //var f = "#dod/" + t;
  //$("#dod/" + t).show();
  //$("#" + t).show();
  //console.log("#" + t);
 // var f="#" + t;
  //var g=$(".dod").attr("id",f);
  //var g = 
 
 //var h= $('.dod').hasId(f);
 
  //if ($('.dod').attr("id") == f) {
  //   // $('controlBar_playerVideo1').addClass('darkcontrols');
  //    $( f).show();
 // }else{
    //       $( f).show();
 // }
  // $(g).show();
         //     $.ajax({
         //        type: 'get',
         // //       url: "/taskcc",
         //       data: 'success',
         //       success: function (data) {
         //
         //          $("figure").html(data);

         //     },
         //     error: function (data) {
         //        $("#title").html("Passed limitd");
         //   }
         //  });
    



$(document).ready(function () {
$.ajax({
   type: 'get',
     url: "/taskcc",
     data: 'success',
     success: function (data) {

         $("figure").html(data);

     },
     error: function (data) {
         console.log('Failed');
         console.log(data);
     }
 });
 });

  $(document).ready(function () {
  
 $('body').on('click', '.clicker', function (e) {
          e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
       
            var t = $(this).attr("id");
            $.ajax({
            type: "get",
            url: "/" + t,
            dataType: "json",
            cache: false,
            success: function (jsonData) {
                console.log(data);
               
                $("#titled").html(data);
                  
            }
            });

$.ajax({
    type: 'get',
    url: "/taskcc",
    data: 'success',
    success: function (data) {
//$("#titled").html(data);
        $("figure").html(data);

    },
    error: function (data) {
        console.log('Failed');
        console.log(data);
    }
});
            });
 
        });
     
  