$(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".avatar").submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: '/backgroundimage',
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



             var readURL = function (input) {
                 if (input.files && input.files[0]) {
                     var reader = new FileReader();

                     reader.onload = function (e) {
                         $('.profile-pic').attr('src', e.target.result);
                     }

                     reader.readAsDataURL(input.files[0]);
                 }
             }

             $(".file-upload").on('change', function () {
                 readURL(this);
             });

             $(".upload-button").on('click', function () {
                 $(".file-upload").click();
             });



            });