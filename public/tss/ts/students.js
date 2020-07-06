$(document).ready(function () {
$.ajax({

 type: 'get',
     url: "/studs",
     data: 'success',
     success: function (data) {

         $(".containn").html(data);

     },
     error: function (data) {
         console.log('Failed');
         console.log(data);
     }
 });
  });