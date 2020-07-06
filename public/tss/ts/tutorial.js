$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(" #tut ").submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '/tutorials',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
            
                $(".containxxx").html(data);
               $("html, body").animate({
                   scrollTop: $(".containxxx").offset().top
               }, 1500);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });


    
});
$(document).ready(function () {
    $('body').on('click', '#button4', function (e) {
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
            dataType: "json",
            cache: false,
            success: function (data) {

              $(".containxxx").html(data);
            }
        });

    });
      $.ajax({
          type: "get",
          url: "/tutort",
         
          cache: false,
          success: function (data) {

              $(".containxxx").html(data);
          }
      });

});

  $(document).ready(function () {
           $('body').on('click', '#button4', function () {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
   $.ajax({
       type: "get",
       url: "/tutort",

       cache: false,
       success: function (data) {
$(".h1").text("wait 3 seconds");
$(".h1").fadeOut(3000);
           $(".containxxx").html(data);
           
       }
   });
                   });

                   });