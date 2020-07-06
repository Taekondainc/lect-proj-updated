$(document).ready(function () {
    $("#cht").click(function () {
        $(".Chat").show();
        $(".groups").hide();
        $(".lecturers").hide();
        $(".messagess").hide();
    });
    $("#ltr").click(function () {
        $(".Chat").hide();
        $(".groups").hide();
        $(".lecturers").show();
        $(".messagess").hide();
    });
    $("#grp").click(function () {
        $(".Chat").hide();
        $(".groups").show();
        $(".lecturers").hide();
        $(".messagess").hide();
    });
    $("#clm").click(function () {
        $(".Chat").hide();
        $(".groups").hide();
        $(".lecturers").hide();
        $(".messagess").show();
    });

    $.ajax({
        type: 'get',
        url: "/lecturers",
        data: 'success',
        success: function (data) {

            $(".ltc-c").html(data);

        },
        error: function (data) {
            console.log('Failed');
            console.log(data);
        }
    });

    $('body').on('click', '.nav-link', function (e) {
        //  alert("hello"); 
        var contentid = $(this).attr("href");
        var contentd = $(this).attr("id");
       // $("#hj").text(contentd);
       //// console.log(contentid);
        $("#name").text(contentid);

      //  $("#respondent").attr("value", contentid);
        $.ajax({
            type: 'get',
            url:  contentid,
            data: 'success',
            success: function (data) {

                $(".ltcc").html(data);

            },
            error: function (data) {
                console.log('Failed');
                console.log(data);
            }
        });



    });
   
        $('body').on('click', '.nav-li', function (e) {
            //  alert("hello"); 
            var contenttid = $(this).attr("href");
            var contentd = $(this).attr("id");
            var contenth = $(this).attr("name");
          //  console.log(contentd);
            $("#hj").text(contenth);
         //   console.log(contenttid);
            $("#name").text(contenttid);

            $("#respondent").attr("value", contentd);
            $.ajax({
                type: 'get',
                url: "/t"+contenttid,
                data: 'success',
                success: function (data) {

                    $(".messcont").html(data);

                },
                error: function (data) {
                    console.log('Failed');
                    console.log(data);
                }
            });
setInterval(function () {
    $.ajax({
        type: 'get',
        url: "/t"+contenttid,
        data: 'success',
        success: function (data) {

            $(".messcont").html(data);

        },
        error: function (data) {
            console.log('Failed');
            console.log(data);
        }
    });

}, 20000);


        });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(" #mess ").submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: '/message',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {

                $(".messcont").html(data);

            },
            error: function (data) {
                console.log(data);
            }
        });
    });
      $("#messagesearch").keyup(function () {

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          var td = $(this).val();
          $.ajax({
              type: "get",
              url: "/messagesearch/" + td,
              cache: false,
              success: function (data) {

                  $(".persons").html(data);

              }
          });

      });
});