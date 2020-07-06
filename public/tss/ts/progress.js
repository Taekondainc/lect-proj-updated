$(document).ready(function () {
           
                $.ajax({
                    type: 'get',
                    url: "/I",
                    data: 'success',
                    success: function (data) {

                        $("#wrapper").html(data);

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


            });