$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


   $("#updater").submit(function (e) {
       e.preventDefault();

       var formData = new FormData(this);

       $.ajax({
           type: "post",
           url: "/upd",
           data: formData,
           cache: false,
           contentType: false,
           processData: false,
           success: (data) => {

               $("#tb").html(data);
               $("html, body").animate({
                   scrollTop: $("#ghow").offset().top
               }, 1500);
               $("#grad").text('Updated');
               $("#grad").fadeOut(7000);
           },
           error: function (data) {
               console.log(data);
           }
       });


   });
});