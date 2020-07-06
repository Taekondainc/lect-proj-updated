$(document).ready(function () {
     
    
    $(".test").click(function () {
                $(".contente").hide();
                $(".tests").show();
                 $(".assignment").hide();
                 $(".assi").css("border-bottom", "0px solid black");
                $(".test").css("border-bottom","3px solid black");
                  $(".disp").css("border-bottom", "0px solid black");
            });
        });  
        $(document).ready(function () {
            $(".disp").click(function () {
                $(".contente").show();
                 $(".tests").hide();
                  $(".assignment").hide();
                $(".disp").css("border-bottom", "3px solid black");
                 $(".assi").css("border-bottom", "0px solid black");
                 $(".test").css("border-bottom", "0px solid black");
            });
});
            $(document).ready(function () {
                        $(".assi").click(function () {
                            $(".assignment").show();
                            $(".tests").hide();
                             $(".contente").hide();
                              $(".assi").css("border-bottom", "3px solid black");
                            $(".disp").css("border-bottom", "0px solid black");
                            $(".test").css("border-bottom", "0px solid black");
                        });


            if (window.location == 'http://localhost:8000/SUBMt') {
               $(".contente").hide();
               $(".tests").show();
               $(".assignment").hide();
               $(".assi").css("border-bottom", "0px solid black");
               $(".test").css("border-bottom", "3px solid black");
               $(".disp").css("border-bottom", "0px solid black");
                }
                else if (window.location == 'http://localhost:8000/SUBM#test') {
                    $(".contente").hide();
                    $(".tests").show();
                    $(".assignment").hide();
                    $(".assi").css("border-bottom", "0px solid black");
                    $(".test").css("border-bottom", "3px solid black");
                    $(".disp").css("border-bottom", "0px solid black");
                } else if (window.location == 'http://localhost:8000/SUBMt#test') {
                    $(".contente").hide();
                    $(".tests").show();
                    $(".assignment").hide();
                    $(".assi").css("border-bottom", "0px solid black");
                    $(".test").css("border-bottom", "3px solid black");
                    $(".disp").css("border-bottom", "0px solid black");
                }
            else if (window.location == 'http://localhost:8000/SUBM') {
                $(".contente").show();
                $(".tests").hide();
                $(".disp").css("border-bottom", "3px solid black");
                $(".test").css("border-bottom", "0px solid ");
            }
             else if (window.location == 'http://localhost:8000/SUBMa') {
                $(".assignment").show();
                $(".tests").hide();
                $(".contente").hide();
                $(".assi").css("border-bottom", "3px solid black");
                $(".disp").css("border-bottom", "0px solid black");
                $(".test").css("border-bottom", "0px solid ");
             } 
              else if (window.location == 'http://localhost:8000/SUBM#assi') {
                  $(".assignment").show();
                  $(".tests").hide();
                  $(".contente").hide();
                  $(".assi").css("border-bottom", "3px solid black");
                  $(".disp").css("border-bottom", "0px solid black");
                  $(".test").css("border-bottom", "0px solid ");
             } else if (window.location == 'http://localhost:8000/SUBMt#assi') {
                 $(".assignment").show();
                 $(".tests").hide();
                 $(".contente").hide();
                 $(".assi").css("border-bottom", "3px solid black");
                 $(".disp").css("border-bottom", "0px solid black");
                 $(".test").css("border-bottom", "0px solid ");
             }
 //var counter=0;

    //$("#clickd").on('click', function () {
       

    //    var ele = $(this).closest('#newform').clone(true);
   //     var id = this.id;
       
    //     var t=   counter++;
//
     //  $(this).closest('#newform').after(ele);
    
     //     var counte= counter;
  // var clk= $(ele).attr("class" , id + t );
             // alert(counte);
           
 //     $('html,body').animate({
     //          scrollTop: $(clk).offset().top
     //      },
      //     'slow');
         
        //    var val = $(dft).length;
     
   // });
    
});
$(document).ready(function () {
$('body').on('click', '.formd', function (e) {
   e.preventDefault();
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  
    var formData = new FormData(document.getElementById("form"));


    $.ajax({
        type: 'POST',
        url: 'testquestions',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: (data) => {
         //   console.log(data);
         //    var thy = document.getElementsByClassName("ques");
             $('.ques').trigger("reset");
          $('#alert').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    });

     $.ajax({
         type: 'get',
         url: "/d",
         data: 'success',
         success: function (data) {

             $(".cvvv").html(data);

         },
         error: function (data) {
             console.log('Failed');
             console.log(data);
         }
     });


});
$.ajax({
            type: 'get',
            url: "/d",
            data: 'success',
            success: function (data) {
                $(".c").text("Test Deleted");
                $(".cvvv").html(data);

            },
            error: function (data) {
                console.log('Failed');
                console.log(data);
            }
            });
});
$(document).ready(function () {
    $('body').on('click', '#click', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        var formData = new FormData(document.getElementById("forms"));


        $.ajax({
            type: 'POST',
            url: 'testq',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
               
                $('#aler').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        });

  $.ajax({
      type: 'get',
      url: "/l",
      data: 'success',
      success: function (data) {

          $(".ll").html(data);

      },
      error: function (data) {
          console.log('Failed');
          console.log(data);
      }
  });

    });
 
}); 
        
           

 
$(document).ready(function () {
     $.ajax({
         type: 'get',
         url: "/f",
         data: 'success',
         success: function (data) {

             $(".dxz").html(data);

         },
         error: function (data) {
             console.log('Failed');
             console.log(data);
         }
     });
    $('body').on('click', '#clickff', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        var formData = new FormData(document.getElementById("assproj1"));


        $.ajax({
            type: 'POST',
            url: 'assignments',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {

               $('.alert').html(data);
                 $.ajax({
             type: 'get',
             url: "/f",
             data: 'success',
             success: function (data) {

                 $(".dxz").html(data);

             },
             error: function (data) {
                 console.log('Failed');
                 console.log(data);
             }
         }); 
            },
            error: function (data) {
                console.log(data);
            }
        });
        
      
        
});



    
});

$(document).ready(function () {
   $.ajax({
       type: 'get',
       url: "/a",
       data: 'success',
       success: function (data) {

           $(".lisd").html(data);

       },
       error: function (data) {
           console.log('Failed');
           console.log(data);
       }
   });
    $('body').on('click', '#clickert', function (e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        var formData = new FormData(document.getElementById("assproj2"));


        $.ajax({
            type: 'POST',
            url: 'assignment',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {

                $('.aler').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
 $.ajax({
     type: 'get',
     url: "/a",
     data: 'success',
     success: function (data) {

         $(".lisd").html(data);

     },
     error: function (data) {
         console.log('Failed');
         console.log(data);
     }
 });



    });
});
 $(document).ready(function () {
             $('body').on('click', '#button2', function (e) {
                        e.preventDefault();
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
var vd=$(this).attr("href");
           
       
          $.ajax({
              type: "POST",
              url: "/" + vd,
              dataType: "json",
              cache: false,
              success: function (jsonData) {
                  console.log(data);
                  //$("#titled").html(data);
              }
          });
            $.ajax({
                type: "get",
                url: "/d",
                dataType: "json",
                cache: false,
                success: function (jsonData) {
                   
                    $(".cvvv").html(data);
                }
            });

            });
            });
             $(document).ready(function () {
                         $('body').on('click', '#clickd', function (e) {
                               $.ajax({
                                   type: 'get',
                                   url: "/d",
                                   data: 'success',
                                   success: function (data) {

                                       $(".cvvv").html(data);

                                   },
                                   error: function (data) {
                                       console.log('Failed');
                                       console.log(data);
                                   }
                               });
                         });});

            $(document).ready(function () {
               
    $('body').on('click', '#button2', function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'get',
                    url: "/d",
                    data: 'success',
                    success: function (data) {
 $(".c").text("Test Deleted");
                           $(".cvvv").html(data);

                    },
                    error: function (data) {
                        console.log('Failed');
                        console.log(data);
                    }
                });
                });

                   $.ajax({
                       type: 'get',
                       url: "/d",
                       data: 'success',
                       success: function (data) {

                           $(".cvvv").html(data);
 
                       },
                       error: function (data) {
                           console.log('Failed');
                           console.log(data);
                       }
                   });
            
              $.ajax({
              type: 'get',
              url: "/l",
              data: 'success',
              success: function (data) {

                  $(".ll").html(data);

              },
              error: function (data) {
                  console.log('Failed');
                  console.log(data);
              }
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
                 var fd = $(this).attr("href");


                 $.ajax({
                     type: "get",
                     url: "/" + fd,
                      data: 'success',
                          success: function (data) {
                       //  console.log(data);
                         $(".ll").html(data);
                     }
                 }); });
                 $.ajax({
                     type: "get",
                     url: "/l",
                        data: 'success',
                            success: function (data) {

                          $(".ll").html(data);;
                     }
                 });

            
         });
          $(document).ready(function () {
              $('body').on('click', '#button6', function (e) {
                  e.preventDefault();
                  $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                  var fd = $(this).attr("href");


                  $.ajax({
                      type: "get",
                      url: "/" + fd,
                      data: 'success',
                      success: function (data) {
                          //  console.log(data);
                          $(".lisd").html(data);
                      }
                  });
            $.ajax({
                  type: "get",
                  url: "/a",
                  data: 'success',
                  success: function (data) {

                      $(".lisd").html(data);
                      
                  }
              });
   });
             

          });

           $(document).ready(function () {
               $('body').on('click', '#button5', function (e) {
                   e.preventDefault();
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                   var fd = $(this).attr("href");
                   $.ajax({
                       type: "get",
                       url: fd,
                       data: 'success',
                       success: function (data) {
                           //  console.log(data);
                           $("#shp").html(data);
                       }
                   });
                      $('#shp').show();
                 
               });
$('body').on('click', '#yth', function (e) {
$('#shp').hide();
});
});
   $(document).ready(function () {
               $('body').on('click', '#button1', function (e) {
                   e.preventDefault();
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                   var fd = $(this).attr("href");
                   $.ajax({
                       type: "get",
                       url: fd,
                       data: 'success',
                       success: function (data) {
                           //  console.log(data);
                           $("#shp").html(data);
                       }
                   });
                   $('#shp').show();

               });
               });
          
       $(document).ready(function () {
           $('body').on('click', '#button8', function (e) {
               e.preventDefault();
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });
               var fd = $(this).attr("href");
             
         $.ajax({
             type: "get",
             url: "/" + fd,
             data: 'success',
             success: function (data) {
                 //  console.log(data);
                
             }
         });
         $.ajax({
         type: "get",
         url: "/f",
         data: 'success',
         success: function (data) {

             $(".dxz").html(data);

         }
         });
         });
           });
          