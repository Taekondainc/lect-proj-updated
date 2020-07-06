   $(document).ready(function () {
      
         
       
           $.ajax({
               type: "get",
               url: "/coursess",

               cache: false,
               success: function (data) {

                   $("#contc").html(data);

               }
           });
       });



     $(document).ready(function () {
         $('body').on('click', '#ahref', function (e) {
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

                     $("#th1").text("Course and its Resources Deleted!!!!");
                 }
             });
             $.ajax({
                 type: "get",
                 url: "/coursess",

                 cache: false,
                 success: function (data) {

                     $("#contc").html(data);

                 }
             });

         });
         $('body').on('click', '.addi', function (e) {
             $("#id").hide();


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