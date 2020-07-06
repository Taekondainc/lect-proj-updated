$(document).ready(function(){
   $(".ai_assist").click(function (e) {
       e.preventDefault();
       $(".create").hide();
       $(".hide").show();
       $(".a").hide();
       $(".cl").hide();
       $(".s").hide();
       $(".f").hide();
       $(".m").hide();
       $(".ct").hide();
       $(".extra").hide();
        $(".intro").show();
      $(".videocontainer").show();
       responsiveVoice.cancel();
       responsiveVoice.speak(document.getElementById('content').textContent,
           document.getElementById('voiceselection').value);


   });
   $("#close").click(function (e) {
       e.preventDefault();
      $(".videocontainer").hide();   
       responsiveVoice.cancel();
         responsiveVoice.speak(document.getElementById('').textContent,
             document.getElementById('voiceselection').value);
      
   
   });
    $("#intro").click(function (e) {
        e.preventDefault();
        $(".create").hide();
        $(".tasks").hide();
        $(".a").hide();
        $(".cl").hide();
        $(".s").hide();
        $(".f").hide();
        $(".m").hide();
        $(".ct").hide();
        $(".intro").show();
  $(".extra").hide();
        responsiveVoice.cancel();
        responsiveVoice.speak(document.getElementById('content').textContent,
            document.getElementById('voiceselection').value);


    });

    $("#extra").click(function (e) {
        e.preventDefault();
        $(".create").hide();
        $(".tasks").hide();
        $(".a").hide();
        $(".cl").hide();
        $(".s").hide();
        $(".f").hide();
        $(".m").hide();
        $(".ct").hide();
        $(".intro").hide();
 $(".extra").show();

        responsiveVoice.cancel();
        responsiveVoice.speak(document.getElementById('extras').textContent,
            document.getElementById('voiceselection').value);


    });
  
    $("#create").click(function(e){
        e.preventDefault();
$(".tasks").hide();
$(".m").hide();$(".ct").hide();
$(".a").hide();
$(".cl").hide();
$(".s").hide();
$(".f").hide();
$(".intro").hide();
$(".create").show();
$(".extra").hide();
    });
    create.onclick = function () {
     responsiveVoice.cancel();
     responsiveVoice.speak(document.getElementById('content1').textContent, 
     document.getElementById('voiceselection').value);

 };
 


    $("#tasks").click(function(e) {
         e.preventDefault();
$(".create").hide();
$(".tasks").show();
$(".a").hide();
$(".intro").hide();
$(".cl").hide();
$(".s").hide();
$(".f").hide();
$(".extra").hide();
$(".m").hide();
$(".ct").hide();
   responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('content2').textContent,
     document.getElementById('voiceselection').value);


    });
    
 

    $("#m").click(function(e) {
           e.preventDefault();
$(".create").hide();
$(".tasks").hide();
$(".m").show();
$(".ct").hide();
$(".cl").hide();
$(".f").hide();
$(".a").hide();
$(".s").hide();
$(".extra").hide();
$(".intro").hide();
    responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('Messages').textContent, document.getElementById('voiceselection').value);


    });

    $("#ct").click(function(e) {
 e.preventDefault();
 $(".create").hide();
 $(".tasks").hide();
 $(".m").hide();
$(".ct").show();
$(".cl").hide();
$(".a").hide();
$(".f").hide();
$(".intro").hide();
$(".s").hide();
$(".extra").hide();
    responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('ViewContent').textContent, document.getElementById('voiceselection').value);

stopbutton.onclick = function () {
    responsiveVoice.cancel();
};

    });
    $("#a").click(function(e) {
e.preventDefault();
$(".create").hide();
$(".tasks").hide();
$(".m").hide();
$(".ct").hide();
$(".a").show();
$(".f").hide();
$(".cl").hide();
$(".s").hide();
$(".extra").hide();
$(".intro").hide();
    responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('account').textContent, document.getElementById('voiceselection').value);

stopbutton.onclick = function () {
    responsiveVoice.cancel();
};

    });
    $("#cl").click(function(e) {
e.preventDefault();
$(".create").hide();
$(".tasks").hide();
$(".m").hide();
$(".ct").hide();
$(".a").hide();
$(".cl").show();
$(".intro").hide();
$(".s").hide();
$(".f").hide();
$(".extra").hide();
    responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('class').textContent, document.getElementById('voiceselection').value);

stopbutton.onclick = function () {
    responsiveVoice.cancel();
};

    });

    $("#s").click(function(e) {
e.preventDefault();
$(".create").hide();
$(".tasks").hide();
$(".m").hide();
$(".ct").hide();
$(".a").hide();
$(".intro").hide();
$(".cl").hide();
$(".s").show();
$(".extra").hide();

$(".f").hide();
responsiveVoice.speak(document.getElementById('cont').textContent, document.getElementById('voiceselection').value);

stopbutton.onclick = function () {
    responsiveVoice.cancel();
};

    });

    $("#f").click(function(e) {
e.preventDefault();
$(".create").hide();
$(".tasks").hide();
$(".m").hide();
$(".intro").hide();
$(".ct").hide();
$(".a").hide();
$(".cl").hide();
$(".f").show();
$(".extra").hide();
$(".s").hide();

    responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('for').textContent, document.getElementById('voiceselection').value);

stopbutton.onclick = function () {
    responsiveVoice.cancel();
};

    });
 
   
});

$(document).ready(function () {
    $("#altss").click(function () {
        $("#hytt").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'get',
            url: "/altss",
            data: 'success',
            success: function (data) {

                $("#cloop").html(data);

            },
            error: function (data) {
                console.log('Failed');
                console.log(data);
            }
        });
    });
    $("#hytt").mouseleave(function () {
        $("#hytt").hide();
    });
    $("#mtgs").click(function () {
        $("#hytt").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'get',
            url: "/mtgs",
            data: 'success',
            success: function (data) {

                $("#cloop").html(data);

            },
            error: function (data) {
                console.log('Failed');
                console.log(data);
            }
        });
    });
    $("#hytt").mouseleave(function () {
        $("#hytt").hide();
    });
});