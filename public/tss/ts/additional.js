   $(document).ready(function () {
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $(" #form2").submit(function (e) {
           e.preventDefault();

           var formData = new FormData(this);

           $.ajax({
               type: 'POST',
               url: '/addcont',
               data: formData,
               cache: false,
               contentType: false,
               processData: false,
               success: (data) => {

                   $("#tex").html(data);
                 //  $(".refresh").show();
               },
               error: function (data) {
                   console.log(data);
               }
           });
           $("#id").show();
         var cv= $("#collect").attr('value');
       
           $.ajax({
               type: "get",
               url: "/" + cv,

               cache: false,
               success: function (data) {

                   $(".detail").html(data);

               }
           });
       });



  
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

                     $("#hytf").html(data);
  $(".refresh").show();
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