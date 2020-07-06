$(document).ready(function () {

    $.ajax({
        type: 'get',
       url: "/it",
       data: 'success',
    success: function (data) {

           $("#count").html(data);

     },
       error: function (data) {
           console.log('Failed');
            console.log(data);
       }
  });
  $.ajax({
      type: 'get',
      url: "/it2",
      data: 'success',
      success: function (data) {

          $("#count1").html(data);

      },
      error: function (data) {
          console.log('Failed');
          console.log(data);
      }
  });
  $.ajax({
      type: 'get',
      url: "/it3",
      data: 'success',
      success: function (data) {

           $(".current").html(data);
 $("#forer").show(3000);
 $('[id=forer]').css("display", "inline-block");
      },
      error: function (data) {
          console.log('Failed');
          console.log(data);
      }
  });

  
    //  $.ajax({
    //   type: 'get',
    //   url: "/x",
    //   data: 'success',
    //   success: function (data) {
    //
    //     $("#images//").html(data);
    //
    //  },
    //  error: function (data) {
    //    console.log('Failed');
    //    console.log(data);
    // }
    //  });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(" #forumf ").submit(function (e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '/create',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {

                        $(".current").html(data);
                        
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
               


        
});
    $('body').on('click', '#Science', function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
               var vart=$(this).attr("value");
            $(this).prop("checked", true);
  $.ajax({
  type: "get",
  url: "/td/"+vart,
  cache: false,
  success: function (data) {

      $(".current").html(data);
      $("#forer").show(1000);
      $('[id=forer]').css("display", "inline-block");
  }
  });
  });

 $('body').on('click', '#Technology', function (e) {
     e.preventDefault();
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     var vart = $(this).attr("value");
      $(this).prop("checked", true);
     $.ajax({
         type: "get",
         url: "/td/" + vart,
         cache: false,
         success: function (data) {

             $(".current").html(data);
             $("#forer").show(1000);
            $('[id=forer]').css("display", "inline-block");
            
         }
     });
 });
 

$('body').on('click', '#Education', function (e) {
      e.preventDefault();
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      var vart = $(this).attr("value");
     $(this).prop("checked", true);
      $.ajax({
          type: "get",
          url: "/td/" + vart,
          cache: false,
          success: function (data) {

              $(".current").html(data);
              $("#forer").show(1000);
            $('[id=forer]').css("display", "inline-block");
          }
      });
  });

   $('body').on('click', '#Politics', function (e) {
       e.preventDefault();
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       var vart = $(this).attr("value");
       $(this).prop("checked", true);
       $.ajax({
           type: "get",
           url: "/td/" + vart,
           cache: false,
           success: function (data) {

               $(".current").html(data);
               $("#forer").show(1000);
               $('[id=forer]').css("display", "inline-block");
           }
       });
   });

    $('body').on('click', '#Art', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var vart = $(this).attr("value");
      $(this).prop("checked", true);
        $.ajax({
            type: "get",
            url: "/td/" + vart,
            cache: false,
            success: function (data) {

                $(".current").html(data);
                $("#forer").show(1000);
               $('[id=forer]').css("display", "inline-block");
            }
        });
    });

     $('body').on('click', '#Health', function (e) {
         e.preventDefault();
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         var vart = $(this).attr("value");
         $(this).prop("checked", true);
         $.ajax({
             type: "get",
             url: "/td/" + vart,
             cache: false,
             success: function (data) {

                 $(".current").html(data);
                 $("#forer").show(1000);
               $('[id=forer]').css("display", "inline-block");
             }
         });
     });
         $('body').on('click', '#Business', function (e) {
             e.preventDefault();
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             var vart = $(this).attr("value");
              $(this).prop("checked", true);
             $.ajax({
                 type: "get",
                 url: "/td/" + vart,
                 cache: false,
                 success: function (data) {

                     $(".current").html(data);
  $("#forer").show(1000);
  $('[id=forer]').css("display", "inline-block");
                 }
             });
         });
          $('body').on('click', '#other', function (e) {
              e.preventDefault();
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              var vart = $(this).attr("value");
              $(this).prop("checked", true);
              $.ajax({
                  type: "get",
                  url: "/td/" + vart,
                  cache: false,
                  success: function (data) {

                      $(".current").html(data);
                      $("#forer").show(1000);
                      $("[id=forer]").css("display", "inline-block");
                  }
              });
          });
            $('body').on('click', '#other', function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var vart = $(this).attr("value");
                $(this).prop("checked", true);
                $.ajax({
                    type: "get",
                    url: "/td/" + vart,
                    cache: false,
                    success: function (data) {

                        $(".current").html(data);
                        $("#forer").show(1000);
                        $("[id=forer]").css("display", "inline-block");
                    }
                });
            });

        $('body').on('click', '#searchsub', function () {
         
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

     var t = $("#searchhhhh").val();
     $.ajax({
         type: "get",
         url: "/search/" + t,
         cache: false,
         success: function (data) {

             $(".current").html(data);
             $("#forer").show(1000);
             $("[id=forer]").css("display", "inline-block");
         }
     });
          
        });
       $("#searchhhhh").keyup(function () {

             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

             var td = $(this).val();
             $.ajax({
                 type: "get",
                 url: "/search1/" + td,
                 cache: false,
                 success: function (data) {

                     $(".current").html(data);
                     $("#forer").show(1000);
                     $("[id=forer]").css("display", "inline-block");
                 }
             });

         });
});