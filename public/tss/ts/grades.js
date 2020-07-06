$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(" #grades ").submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '/grades',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {

                $("#grad").html(data);
                  $("#grad").fadeOut(6000);
                $("html, body").animate({
                    scrollTop: $(".cour").offset().top
                }, 1500);
            },
            error: function (data) {
                console.log(data);
            }
        });
        $.ajax({
                    type: "get",
                    url: "/tvd",
                    cache: false,
                    success: function (data) {

                        $("#tb").html(data);
                    }
                    });
         

    });
     $(" #ghow ").submit(function (e) {
         e.preventDefault();

         var formData = new FormData(this);

         $.ajax({
          type: "post",
           url: "/gshow",
             data: formData,
             cache: false,
             contentType: false,
             processData: false,
             success: (data) => {

             $("#tb").html(data);
              $("html, body").animate({
                  scrollTop: $("#ghow").offset().top
              }, 1500);
              
             },
             error: function (data) {
                 console.log(data);
             }
         });


     });
    
   $(" #ghoi ").submit(function (e) {
       e.preventDefault();

       var formData = new FormData(this);

       $.ajax({
           type: "post",
           url: "/gshoy",
           data: formData,
           cache: false,
           contentType: false,
           processData: false,
           success: (data) => {

              
                $("#tb").html(data);
                $("html, body").animate({
                    scrollTop: $("#ghow").offset().top
                }, 1500);
           },
           error: function (data) {
               console.log(data);
           }
       });


   });

 $('body').on('click', '.edit', function (e) {
     e.preventDefault();
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     $("#shp").show();
     var vd = $(this).attr("href");

$.ajax({
    type: "get",
    url: "/" + vd,
    cache: false,
    success: function (data) {

        $("#h").html(data);
    }
});
 });
$('body').on('click', '.delet', function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var vd = $(this).attr("href");

 
    $.ajax({
                type: "post",
                url: "/"+vd,

                cache: false,
                success: function (data) {

                    $("#tb").html(data);
                     $("#gtt").text("Deleted");
                       $("#gtt").fadeOut(3000);
                }
});
});
 $('body').on('click', '#yth', function (e) {
      $("#shp").hide();
 });


 $(" #filesub ").submit(function (e) {
     e.preventDefault();

     var formData = new FormData(this);

     $.ajax({
         type: 'POST',
         url: '/filesub',
         data: formData,
         cache: false,
         contentType: false,
         processData: false,
         success: (data) => {
$("#form").html(data);
             $("html, body").animate({
                 scrollTop: $("#form").offset().top
             }, 1500);
             $("#gett").text('File Stored');
             $("#gett").fadeOut(7000);
         },
         error: function (data) {
             console.log(data);
         }
   

 });  $.ajax({
         type: "get",
         url: "/tsv",
         cache: false,
         success: function (data) {

             $("#form").html(data);
         }
     });
  });
   
 $.ajax({
 type: "get",
 url: "/tsv",
 cache: false,
 success: function (data) {

     $("#form").html(data);
 }
 });
$('body').on('click', '.deled', function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var vd = $(this).attr("href");


    $.ajax({
        type: "post",
        url: "/" + vd,

        cache: false,
        success: function (data) {

            $("#form").html(data);
            $("#gatt2").text("Deleted");
            $("#gatt2").fadeOut(5000);
        }
    });
});
});