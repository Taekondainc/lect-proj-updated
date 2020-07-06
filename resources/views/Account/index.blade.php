<?php use App\inputcontroller; ?>
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/index2.css')}}">
@extends('layouts.profile')
@section('content')
<style>#conta{
padding-top: 80px;
}

         #courss::-webkit-scrollbar-thumb {
    border-radius: 10px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color:#362c2d;
}

#courss::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;padding:.5px;
    background-color: #F5F5F5;
}

#courss:-webkit-scrollbar {
    width: 12px;
    background-color:transparent;
    cursor: pointer;
}



#privcp::-webkit-scrollbar-thumb {
    border-radius: 10px;
    cursor: pointer;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    background-color:#362c2d;
}

#privcp::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    border-radius: 10px;padding:.5px;
    background-color: #F5F5F5;
}

#privcp:-webkit-scrollbar {
    width: 12px;
    background-color:transparent;
    cursor: pointer;
}

body{
    color: black;
}
</style>

  <?php 
  use App\User;
  ?>
   

     <div class="container mt-8" style="margin-left:100px;width:100%;padding-top:40px;display:inline-block;text-align:center;">

    <div class="row" style="display:flex;justify-content:center;margin:30px;margin-top:20px;height:90%;">
        <div class="col-lg-3 pb-5" style="vertical-align:top;margin-right:-12px;">
            <!-- Account Sidebar-->
        
            <div class="wizard" >
                <nav class="list-group list-group-flush"  style="vertical-align:top;z-index:-1;">
                  <div class="list-group-item bg-dark text-white" 
                  style="z-index:0;letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;border-radius:10px 0px 0px 0px;" >   
           <form action="/file" method="post" class="avatar" style="text-align:center;display:inline-block;width:100%;" enctype="multipart/form-data"> 
       @csrf   <div class="avatar-wrapper">
	<img class="profile-pic"  <?php
                            
                             $query=inputcontroller::where("uid",Auth()->id())->get();  
                           ?>   @foreach ($query as $requests)
  
     
 
           

    src="{{asset('course-contents/files/avatar/'.$requests->file )}}"  @endforeach />
	<div class="upload-button">
		<img class="fa fa-arrow-circle-up" aria-hidden="true" src="{{ asset('css/images/upload.png') }}" style="cursor:poitner;">
	</div>
	<input class="file-upload" type="file" name="file" accept="image/*"  required/>
</div>
     
                            
                            <button type="submit" class="btn btn-light" style="margin-top:-10px;letter-spacing:2px;font-weight:bold;">Update</button>
</form>
</div>  
       <a class="list-group-item bg-dark text-white" id="profile" style="letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;" href="#">
        <i class="fe-icon-user text-muted"></i>Profile Settings</a>
                    <a  id="course" class="list-group-item bg-dark text-white" style="letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;" href="#">
                        <i class="fe-icon-map-pin text-muted"></i>Courses</a>
                    <a  id="privacy" class="list-group-item bg-dark text-white" style="letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;" href="#">
                              <div class="d-inline-block font-weight-medium text-uppercase">Privacy policy</div>
                            
                      
                    </a>
                    <a  id="profile" class="list-group-item bg-dark text-white" style="letter-spacing:2px; text-shadow:0px;color:white;font-weight:normal;text-align:center;border-radius:0px 0px 0px 10px;" href="#">
                     
                            <img id="ai_assist" class="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="" style="background:white;padding-top:1px;border-radius:50%;">
        <h5>Site Assistant</h5>

  </a>
           
                </nav>
            </div>
        </div>
        <!-- Profile Settings-->
        <div class="col-lg-8 pb-5 " style="height:100%;background:#b3b4b5;border-radius:0px 10px 10px 0px;margin:0px;">
            <form class="row" id="submitd" method="POST" action="/updateuser" style="padding-top:0px;vertical-align:middle;margin-top:100px;z-index:0">
             @csrf     <?php 
                $request=auth()->id();
                
                $query=User::where("id",$request)->get();
                ?>
                @foreach ($query as $item)
                    
          <div style="width:100%;display:block;"><h1>Edit Content</h1></div>  
                <div class="col-md-6" >
                    <div class="form-group">
                        <label for="account-fn">Full Name</label>
                    <input class="form-control" type="text" name="name" id="account-fn" value="{{$item->name}}"  style="border:1px solid black;"  required="">
                    </div>
                </div>
               
                <div class="col-md-6" >
                    <div class="form-group">
                        <label for="account-email">E-mail Address</label>
                        <input class="form-control" name="email" type="email" id="account-email" value="{{$item->email}}"  style="border:1px solid black;"  placeholder="@" required>
                    </div>
                </div>
               
                <div class="col-md-6" >
                    <div class="form-group">
                        <label for="account-pass">New Password</label>
                        <input class="form-control" type="password"  style="border:1px solid black;"  name="password" id="account-pass" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirm Password</label>
                        <input class="form-control" type="password" style="border:1px solid black;"  id="account-confirm-pass" required>
                    </div>
                </div> 
               <div class="col-12"> <div class="conlt"  style="background:green;color:white; font-size:25px;text-align:center; border-radius: 5px 5px 0px 0px;"></div>
                     <div class="2cnt" style="background:red;color:white; font-size:25px;text-align:center; border-radius: 0px 0px 5px 5px;"></div>
                   <hr class="mt-2 mb-3">
                    <div class="btn" style="text-align:center;display:flex;justify-content:center;width:100%;">
                      
                        <button style="display:inline-block;" class="btn btn-style-1 bg-dark text-white" 
                        type="submit" data-toast="" data-toast-position="topRight"
                         data-toast-type="success" data-toast-icon="fe-icon-check-circle"
                          data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                    </div>
                      
              
                     @endforeach
                </div>
            </form>
            <div class="course" style="display:none;margin-top:85px;">
                <h1>Courses</h1>
             <div id="alert" style="background:green;color:white;font-size:20px;"></div>
                <div id="courss" style="height:75%;overflow-y:scroll;">

            </div>
              
            </div>
           <div class="privacy" style="display:none;margin-top:85px;">
                <h1>Privacy</h1>
                <div id="privcp" style="height:80%;overflow-y:scroll;text-align:justify;">
                   <h1>HLMS Privacy Policy</h1>

<p>Last updated: April 17, 2020</p>

<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>

<p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of <a href="https://www.termsfeed.com/privacy-policy-generator/">Privacy Policy Generator</a>.</p>

<h1>Interpretation and Definitions</h1>
<h2>Interpretation</h2>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
<p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

<h2>Definitions</h2>
<p>For the purposes of this Privacy Policy:</p>
<ul>
    <li>
        <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
          </li>
    <li>
        <p><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to HLMS.</p>
          </li>
      <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
    <li><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</li>
  <li><strong>Website</strong> refers to HLMS, accessible from hls.com</li>        <li><strong>Service</strong> refers to the Website.</li>
      <li><strong>Country</strong> refers to: Guyana</li>
    <li>
        <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
          </li>
    <li><strong>Third-party Social Media Service</strong> refers to any website or any social network website through which a User can log in or create an account to use the Service.</li>
      <li>
        <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
                </li>
  <li><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>      <li><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
      </ul>

<h1>Collecting and Using Your Personal Data</h1>
<h2>Types of Data Collected</h2>

<h3>Personal Data</h3>
<p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
<ul>
  <li>Email address</li>  <li>First name and last name</li>          <li>Usage Data</li>
</ul>


<h3>Usage Data</h3>
<p>Usage Data is collected automatically when using the Service.</p>
<p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
<p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
<p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>



    <h3>Tracking Technologies and Cookies</h3>
    <p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service.</p>
    <p>You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service.</p>
    <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close your web browser. Learn more about cookies: <a href="https://www.termsfeed.com/blog/cookies/">All About Cookies</a>.</p>
    <p>We use both session and persistent Cookies for the purposes set out below:</p>
    <ul>
        <li>
            <p><strong>Necessary / Essential Cookies</strong>
            <p>Type: Session Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
        </li>
        <li>
            <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
            <p>Type: Persistent Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
        </li>
        <li>
            <p><strong>Functionality Cookies</strong></p>
            <p>Type: Persistent Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
        </li>
                </ul>
    <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy.</p>

<h2>Use of Your Personal Data</h2>
<p>The Company may use Personal Data for the following purposes:</p>
<ul>
    <li><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</li>
    <li><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
    <li><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>
    <li><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
    <li><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
    <li><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</li>
</ul>

<p>We may share your personal information in the following situations:</p>

<ul>
    <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service,  to contact You.</li>
    <li><strong>For Business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of our business to another company.</li>
    <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
    <li><strong>With Business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
    <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
</ul>

<h2>Retention of Your Personal Data</h2>
<p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
<p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>

<h2>Transfer of Your Personal Data</h2>
<p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
<p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
<p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>

<h2>Disclosure of Your Personal Data</h2>
<h3>Business Transactions</h3>
<p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
<h3>Law enforcement</h3>
<p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
<h3>Other legal requirements</h3>
<p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
<ul>
    <li>Comply with a legal obligation</li>
    <li>Protect and defend the rights or property of the Company</li>
    <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
    <li>Protect the personal safety of Users of the Service or the public</li>
    <li>Protect against legal liability</li>
</ul>

<h2>Security of Your Personal Data</h2>
<p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>

    <h1>Detailed Information on the Processing of Your Personal Data</h1>
    <p>Service Providers have access to Your Personal Data only to perform their tasks on Our behalf and are obligated not to disclose or use it for any other purpose.</p>

  
  
  
  
  
          <h2>Usage, Performance and Miscellaneous</h2>
        <p>We may use third-party Service Providers to provide better improvement of our Service.</p>
        <ul>
                                            <li>
                  <p><strong>FreshDesk</strong></p>
                  <p>FreshDesk is a customer support software. The service is operated by Freshworks, Inc.</p>
                  <p>FreshDesk service may collect information from Your Device.</p>
                  <p>The information gathered by FreshDesk is held in accordance with its Privacy Policy: <a href="https://www.freshworks.com/privacy/">https://www.freshworks.com/privacy/</a></p>
              </li>
                            </ul>
  




    <h1>Children's Privacy</h1>
    <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
    <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>


<h1>Links to Other Websites</h1>
<p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>

<h1>Changes to this Privacy Policy</h1>
<p>We may update our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
<p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</p>
<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>

<h1>Contact Us</h1>
<p>If you have any questions about this Privacy Policy, You can contact us:</p>
<ul>
        <li>By email: hlsms@gmail.com</li>
        </ul> 
                </div>
    </div>   
        </div>
</div> 

@endsection
@extends('layouts.sidebar')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    if ($('html').css('background-image') != 'none') {
 $("body").css("color","black");
}else{
    
}      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   $('#account-confirm-pass').keyup(function () {   
       var password= $('#account-pass').val();
    var confirm=$('#account-confirm-pass').val();
        if (password==confirm){
           
               $('.conlt').css("background","green"); 
             $('.conlt').text("Password Match");
             
        }else{
            
              $('.conlt').text("Password Dont Match");
               $('.conlt').css("background","RED"); 
                
        } });

         $('#account-pass').keyup(function () {   
              var password= $('#account-pass').val();
    var confirm=$('#account-confirm-pass').val();   
    var minLength = 7;
    var midLength = 9;

    if (password.length >= midLength   ){
      $('.2cnt').text("Strong");
             $('.2cnt').css("background","Green");              
          }else if(password.length >= minLength )
          {
  $('.2cnt').text("GOOD but could be stronger Keep going");
         $('.2cnt').css("background","orange"); 

         }else{ 
 $('.2cnt').css("background","red");
        $('.2cnt').text("Password too Short"); 
} 
        });
     $('#submitd').submit(function (e) {
           e.preventDefault();

            var formData = new FormData(this);    
 $.ajax({
          type: 'POST',
          url: '/updateuser',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: (data) => {

              $(".conlt").html(data);
            
          },
          error: function (data) {
              console.log(data);
          }
      });});
        
 $('.avatar').submit(function (e) {
e.preventDefault();

var formData = new FormData(this);
$.ajax({
type: 'POST',
url: '/file',
data: formData,
cache: false,
contentType: false,
processData: false,
success: (data) => {

$(".conlt").html(data);

},
error: function (data) {
console.log(data);
}
});});

    });

    $(document).ready(function() {
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
     $("#profile").click(function(){
                $("#submitd").show(1000);
               $(".course").hide();
                $(".privacy").hide(); 
     }); 
                 $("#privacy").click(function(){
                $("#submitd").hide();
               $(".course").hide();
                $(".privacy").show(1000); 
     }); 
          $("#course").click(function () {  
              $("#submitd").hide();
               $(".course").show(1000);
                $(".privacy").hide(); 
     });  
   $('body').on('click', '#ahref', function (e) {
e.preventDefault();
var nmg =$(this).attr("href");
 $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
$.ajax({
               type: "get",
               url: "/deleted/" + nmg,

               cache: false,
               success: function (data) {

                   $("#alert").html(data);
                   $("#alert").show(2000);
               }
           }); 
           $.ajax({
               type: "get",
               url: "/view",

               cache: false,
               success: function (data) {

                   $("#courss").html(data);
                   $("#courss").show(2000);
               }
           });            
 }); 
 $.ajax({
               type: "get",
               url: "/view",

               cache: false,
               success: function (data) {

                   $("#courss").html(data);
                   $("#courss").show(2000);
               }
           });  
});
</script>