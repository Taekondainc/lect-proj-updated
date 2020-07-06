
$(document).ready(function () {
      $('body').on('click', '#clicko', function (e) {
    e.preventDefault();
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          var vd = $(this).attr("href");

 $("#id").show();
          $.ajax({
            type: "get",
              url: "/" + vd,
      
               cache: false,
            success: function (data) {

                 $(".detail").html(data);

           }
          });

     });
       $('body').on('click', '.addi', function (e) {
       $("#id").hide();


       });

       $('body').on('click', '.dete', function (e) {
           e.preventDefault();
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           var vd = $(this).attr("href");


           $.ajax({
               type: "get",
               url: "/" + vd,

               cache: false,
               success: function (data) {

                   $("#hytf").html(data);
                   $(".refresh").show();
               }
           });

       });
     });
     
       //$.ajax({
        //   type: "get",
          // url: "/tutort",

         //  cache: false,
          // success: function (data) {

           //   $(".containxxx").html(data);
        //   }
      // });

  // });

  // $(document).ready(function () {
     //  $('body').on('click', '#button4', function () {
   //   //     $.ajaxSetup({
          //     headers: {
        //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         //      }
         //  });
         //  $.ajax({
           //    type: "get",
          //     url: "/tutort",
//
           //    cache: false,
           // //  success: function (data) {
             //      $(".h1").text("wait 3 seconds");
            //       $(".h1").fadeOut(3000);
           //        $(".containxxx").html(data);

           //    }
        //  });
     //  });

  // });