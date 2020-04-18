<?php
 include 'php/common/config.php';
 session_start();
  if(isset($_POST['admin']))
  {
   $email=$_POST['email'];
    $password=$_POST['password'];
      $sql="SELECT email,password FROM user Where email= '" . $email. "' and password= '" . $password. "'";
     $result=mysqli_query($link,$sql);
            if($rows=mysqli_fetch_assoc($result))
             { 
               $_SESSION['email']=$email;
           $_SESSION['password']=$password;  
            $_SESSION['last_name']=$name;   
              $password == 'CoronaSpeak';
                if(md5($password) == 'aa18ca633f8192787eaef03a9d31187d'){
              
               if($_SESSION['email']=='CoronaSpeak@nixwhistle.com'&& $rows['password'] == 'CoronaSpeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/view/common/overview.php");
               // break;
               }
             }

               if($_SESSION['email']=='clinic' && $_SESSION['password'] == 'coronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/case/clinicview.php");
               // break;
               }
               if($_SESSION['email']=='testing' && $_SESSION['password'] == 'coronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/case/testingview.php");
               // break;
               }
                 if($_SESSION['email']=='hospital' && $_SESSION['password'] == 'coronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/case/hospitalview.php");
               // break;
               }
           else if($rows['email']=='idea_analyst@nixwhistle.co'&& $rows['password']=='analyst')
               {
                 // echo "Sucessfully";
                header("location:/coronaspeak/idea/view.php");
               }
            else if($rows['email']=='investigator@nixwhistle.co'&& $rows['password']=='investigator')
               {
                 // echo "Sucessfully";
                header("location:/coronaspeak/investigator/view.php");
               }
               else if($rows['email']=='reviewer@nixwhistle.co'&& $rows['password']=='reviewer')
               {
                 // echo "Sucessfully";
                header("location:/coronaspeak/reviewer/reviewerview.php");
               }
             }
             else
               {
                // echo "Error: " . $sql . "<br>" . $link->error;
                // alert("incorrect username and password");
               }
  }
?>

<?php
 include 'php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
    $secretkey=$_POST['secretkey'];
      $sql="SELECT secretkey,ran FROM `case` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/coronaspeak/case/followup.php?ran=".$rows['ran']);
               }
             }
           
               else
               {
                 $sql="SELECT secretkey,ran FROM `info` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/coronaspeak/info/followup.php?ran=".$rows['ran']);
               }
             }
               }
  }
?>
<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

       <title>Corona Speak | Coronavirus Prevention and Updated News</title>
        <meta name="description" content="Support center home example">
   

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->

           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="assets/css/demo2/pages/support-center/home-2.css" rel="stylesheet" type="text/css" />
     <link href="./assets/css/demo2/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
 
        <link rel="stylesheet" href="./assets/flags/country-flag.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="./assets/flags/country-flag.js"></script>
        <script src="assets/static/country_to_code.json"></script>
        <script src="assets/static/code_to_country.json"></script>
        <script src="assets/static/latlng.json"></script>
        <script src="assets/data/data.json"></script>
        <script src="https://d3js.org/d3.v4.js"></script>
        <script src="assets/js/today.js"></script>

    </head>
    <?php include 'siteheader.php'; ?>
  <style type="text/css">
    #banner{
    background-image: url('png/frontimg.png');
    height: 700px;
    box-sizing:cover;
    background-position: right;
      background-repeat: no-repeat;
  }
  @media only screen and (max-width: 767px) {
  #banner{
 background-image: url('png/frontimg.png');
        height: 1200px;
        width:100%;

    box-sizing:cover;
      background-repeat: no-repeat;
  }

  }
.banner-container {
    width: 45%;
    position: relative;
    top: 190px;
    left: 100px;
}
@media only screen and (max-width: 767px)
{
.banner-container {
   
    top: 0!important;
    left: 0!important;
    width: 100%!important;
}
}
.banner-container .heading {
    text-align: left;
    margin-bottom: 20px;
    line-height: 60px;
    font-size:42px;
  color:#2d2d2d;
  font-family: "Open Sans";
}
.sub-heading
{
      font-size:22px;
      color: #2d2d2d;
}
.text
{
  color: #252525;
  margin: 15px auto;
   font-size:18px;
}
.hl-help {
    width: 70%;
    margin: 0 auto 200px;
}
.hl-help .title {
    text-align: center;
    color: #171717;
    font-size: 35px;
    margin-bottom: 40px;
    font-weight: 300;
}

div {
    display: block;
}
.hl-help .help-container .content-container {
    text-align: left;
    padding-left: 1em;
}
.hl-help .help-container span:first-child {
    color: #bababa;
    font-size: 70px;
    font-weight: 600;
    margin-right: 7px;
}
.hl-help .help-container .details {
    color: #2d2d2d;
    font-size: 18px;
    font-weight: 600;
    width: 60%;
    display: inline-block;
}
@media only screen and (max-width: 767px)
{
.hl-help .help-container .details {
    font-size: 14px!important;
    width: 68%!important;
    margin-bottom: 8px;

}
}
@media only screen and (max-width: 767px)
{
#details {
  margin-top: -300px;

}
}
.hl-help .help-container .desc {
    color: #444;
    font-size: 15px;
    line-height: 26px;
    margin: 14px 0;
    width: 85%;
}
.hl-experts .title {
    background-color: #f4f6f8;
    text-align: center;
    padding-top: 150px;
}
@media only screen and (max-width: 767px)
{
.hl-experts .title {
    padding-top: 255px!important;
}
}
#shadow
{
display: inline-block;
  box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
  border-radius: 8px !important;
  width:90%;
  margin-left: 80px;
 
}
@media only screen and (max-width: 767px)
{
  #shadow
{
display: inline-block;
 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
  border-radius: 8px !important;
margin-left: -1px;
width:100%;


}
}
/*@media only screen and (max-width: 767px)
{
.card-body
 {
 position: fixed;
 }
}*/
.tab button:hover {
  background-color: #afd135;

}
.banner-container .home-actions {
    margin-bottom: 15px;
}
.banner-container .home-actions span {
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;
}
.banner-container .chat {
    background: #034ea2;
  }
.banner-container .appointment {
    background: #afd135;
  }
  /*#head1:hover
  {
    background-color: #034ea2;

  }
   #head2:hover
  {
    background-color: #afd135;
   
  }*/

#mental, #anonymous{
  font-size:35px;
  color:#ffffff;
  background-color: #034EA2;
  box-shadow: 0px 0px 4px #494848;
  border-radius: 50%;
  padding: 0.1em 0.3em;
}
#tracksub {
  font-size: 35px;
  color: #ffffff;
  border-radius: 50%;
  box-shadow: 0px 0px 5px #494848;
  padding: 0.1em 0.3em;
  background-color: #AFD135;
}
</style>


    <body  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--transparent kt-page--loading">

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                      <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

 <div class="kt-grid__item kt-grid__item--fluid" style="margin-top: -50px;" >
    <!-- begin:: Hero -->
<div class="kt-portlet">
  <div class="kt-portlet__body" id="banner">
   <div class="banner-container">
<div class="heading">
Speak.Get helps - It get better.
</div>
<div class="sub-heading">
No matter what's troubling, get the support needed, right here, right now
</div><br>
<div class="home-actions">
<span class="chat button"><a href="case/speakup.php" style="color: white;">GET STARTED NOW</a></span>
<span class="appointment button"><a href="https://telegra.ph/TN-Corona-Speak-03-27" style="color: white;">CHAT NOW</a></span>
</div>

</div>
 
</div>


<div class="container" style="text-align: center;border-bottom: 1px solid #979797" id="details">
<div class="row no-margin">
<div class="col l3 s6">
<div class="img-container">
<i class="fa flaticon2-shield" style="font-size: 50px; color: #034ea2;"></i>
</div>
<div class="text">
PRIVATE &amp; CONFIDENTIAL
</div>
</div>
<div class="col l3 s6">
<div class="img-container">
  <i class="fa fa-theater-masks" style="font-size: 50px; color: #afd135;"></i>
 </div>
<div class="text">
ANONYMOUS DISCUSSIONS
</div>
</div>
<div class="col l3 s6">
<div class="img-container">
<i class="fa fa-stopwatch" style="font-size: 50px; color: #034ea2;"></i>
</div>
<div class="text">
24X7 ROUND THE CLOCK SUPPORT
</div>
</div>
<div class="col l3 s6">
<div class="img-container">
<i class="fa fa-desktop" style="font-size: 50px; color: #afd135;"></i>
</div>
<div class="text">ASSURED SUPPORT FROM GOVERNMENT

</div>
</div>
</div>
</div>
<br><br>

<div class="hl-help">
  <div class="title">
How it Works
</div>
<div class="row no-margin">
<div class="col-md-4">
<div class="help-container">
<div class="img-container">
<img src="png/15861585380318471134359992370317.jpg" height="100%" width="100%;"  style="border:2px solid #D9D7D6;border-radius: 25px;">
</div>
<div class="content-container">
<div class="details-container">
<span>1</span>
<span class="details">Self Assess your Corona Symptoms</span>
</div>
<div class="desc">
If something bothering you feel free to connect with us. We will help you irrespective of any situation.
We will stay together and fight against it.
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="help-container">
<div class="img-container">
 <img src="png/15861585081055087752714178304005.jpg" height="100%" width="100%;" style="border:2px solid #D9D7D6;border-radius: 25px;">
</div>
<div class="content-container">
<div class="details-container">
<span>2</span>
<span class="details">Chat with Experts </span>
</div>
<div class="desc">
Never hesitate to tell us about your symptoms. Share your symptoms and get expert view about how
you should proceed
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="help-container">
<div class="img-container">
 <img src="png/15861585623313355370649561358679.jpg" height="100%" width="100%;" style="border:2px solid #D9D7D6;border-radius: 25px;">
</div>
<div class="content-container">
<div class="details-container">
<span>3</span>
<span class="details">Get realtime Information</span>
</div>
<div class="desc">
The maps and district information provides latest data on Covid19 infections, deaths, most authenticated by government.
</div>
</div>
</div>
</div>
</div>

</div>


<div class="" style="margin-top: -9%;" id="shadow">
  <div class="kt-portlet" >
  <div class="kt-portlet__body  kt-portlet__body--fit">
    <div class="row row-no-padding row-col-separator-xl">
      <div class="col-xl-4 col-md-4 col-sm-4" style="height: 160px;">
        <!--begin:: Widgets/Daily Sales-->
<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-widget14">
    <div class="kt-widget14__header kt-margin-b-30">
      <div class="row">
      <div class="col-xl-3 col-md-3 col-sm-3">
      <i class="flaticon-chat-1" id="mental"></i>
     </div>
     <div class="col-xl-9 col-md-9 col-sm-9">
      <h3 class=""  style="color: #2d2d2d; font-size: 20px;">
        Mental Health Chat
      </h3>
      <span class="kt-widget14__desc" style="font-size: 14px;font-weight: 300;">
        Check out the best mental health tips at the times of stress, addiction, other cases of extreme psychological issues
      </span>
    </div>
  </div>
    </div>
   <!--  <div class="kt-widget14__chart">
      <canvas  id="kt_chart_daily_sales"></canvas>
    </div> -->
  </div>
</div>  
</div>
       <div class="col-xl-4 col-md-4 col-sm-4" style="height: 160px;">
        <!--begin:: Widgets/Profit Share-->
<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-widget14">
     <div class="kt-widget14__header kt-margin-b-30">
    <div class="row">
      <div class="col-xl-3 col-md-3 col-sm-3">
        <i class="flaticon-placeholder-3" id="tracksub"></i>
      </div>
      <div class="col-xl-9 col-md-9 col-sm-9">
      <h3 class="" style="color: #2d2d2d; font-size: 20px;">
        Track the Submission
       </h3>
      <span class="kt-widget14__desc" style="font-size: 14px;font-weight: 300;">
       Post submission, followup about the action

      </span>
    </div>  
  </div>
</div>
  </div>
</div>    
<!--end:: Widgets/Profit Share-->     </div>
      <div class="col-xl-4 col-md-4 col-sm-4" style="height: 160px;">
        <!--begin:: Widgets/Revenue Change-->
<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-widget14">
    <div class="kt-widget14__header kt-margin-b-30">
      <div class="row">
        <div class="col-xl-3 col-md-3 col-sm-3">
          <i class="flaticon2-user-1" id="anonymous"></i>
        </div>
        <div class="col-xl-9 col-md-9 col-sm-9">
      <h3 class="" style="color: #2d2d2d;font-size: 20px;">
     
    Anonymous Assurance
 
      </h3>
      <span class="kt-widget14__desc" style="font-size: 14px;font-weight: 300;">
      Dont need to disclose identity and can check the symptoms based action guidance recommended by Government
      </span>
    </div>
     </div>
  </div>
</div>  
</div>
    </div>
    </div>
  </div>
</div>
</div>


<br>
<br>

               




<div>
<div class="kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="step-first">
      <div class="kt-grid__item kt-wizard-v2__aside">
        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v2__nav" >
          <div class="kt-wizard-v2__nav-items" >
            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
            <a class="kt-wizard-v2__nav-item"  data-ktwizard-type="step" data-ktwizard-state="current">
              <div class="kt-wizard-v2__nav-body">
                <div class="kt-wizard-v2__nav-icon">
                  <i class="flaticon-globe" style="color:#034ea2; "></i>
                </div>
                <div class="kt-wizard-v2__nav-label">
                  <div class="kt-wizard-v2__nav-label-title">
                   WORLD CASES
                  </div>
                  <div class="kt-wizard-v2__nav-label-desc">
                    WORLD CASES
                  </div>
                </div>
              </div>
            </a>
            <a class="kt-wizard-v2__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v2__nav-body">
                <div class="kt-wizard-v2__nav-icon">
                  <i class="flaticon-bus-stop" style="color: #afd135;"></i>
                </div>
                <div class="kt-wizard-v2__nav-label">
                  <div class="kt-wizard-v2__nav-label-title">
                    TOP 10 COUNTRIES
                  </div>
                  <div class="kt-wizard-v2__nav-label-desc">
                    Choose Your countries Map
                  </div>
                </div>
              </div>
            </a>
           <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-icon">
                 <i class="flaticon-globe" style="color:#034ea2; "></i>
                </div>
                <div class="kt-wizard-v3__nav-label">
                  <div class="kt-wizard-v3__nav-label-title">
                    PREDICTED CASES
                  </div>
                  <div class="kt-wizard-v3__nav-label-desc">
                    Confirmed cases for the upcoming days
                  </div>
                </div>
              </div>
            </a>
           
         
          </div>
        </div>
        <!--end: Form Wizard Nav -->

      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper" style="background-image:url('png/backimg4.jpg');">
        <!--begin: Form Wizard Form-->
        <form class="kt-form" id="kt_form" >
          <div id="#current" >
          <!--begin: Form Wizard Step 1-->
          <div class="kt-wizard-v2__content" data-ktwizard-type="step-content" data-ktwizard-state="current" >
            <!-- <div class="kt-heading kt-heading--md">Enter your Account Details</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v2__form">
               
             
                                                <div class="row">
                                                        <div class="col-md-12" id="worldmap">
                                                           <div class="header" style="background: #afd135;height: 6px;">
                                                                               
                                                                        </div>
                                                                <div class="card" style="border:2px solid #D9D7D6; box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;">
                                                                      
                                                                        <div class="card-body">
                                                                                <div id="regions_div" style="height: 550px;">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                       
                                                </div>

               

              </div>
            </div>
          </div>
        </div>
          <!--end: Form Wizard Step 1-->

          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v2__content" data-ktwizard-type="step-content">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Current Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v2__form">
               
               <div class="col-md-12" id="corona_logo">
                                                                <div class="card" style=" box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;">
                                             <div class="header" style="background: #afd135;height: 6px;">
                                                                               
                                                                        </div>
                                                                        <div class="card-body">
                                                                                <div class="table-responsive">
                                                                                <table class="table" id="my_table">
                                                                                        <thead style="font-size: 16px;">
                                                                                                <tr>
                                                                                                <!-- <th scope="col">#</th> -->
                                                                                                <th scope="col">Country</th>
                                                                                                <th scope="col">Confirmed</th>
                                                                                                <th scope="col">Death</th>
                                                                                              <!--   <th scope="col">Case</th>
                                                                                                <th scope="col">Info</th> -->
                                                                                                </tr>
                                                                                        </thead>

                                                                                        <tbody style="font-size: 16px;">

                                                                                        </tbody>
                                                                                </table>
                                                                                </div>
                                                                        </div>
                                                                             <style>
                                                        /* For the table */
                                                        thead, tbody { display: block; }
                                                        tbody {
                                                                height: 500px;       /* Just for the demo          */
                                                                overflow-y: auto;    /* Trigger vertical scroll    */
                                                                overflow-x: hidden;  /* Hide the horizontal scroll */
                                                        }
                                                        /*table,thead{
                                                          width:100%;
                                                        }
                                                        table,td {
                                                      width:100%;
                                                        }*/
                                                        </style>
                                                                </div>
                                             
                                                      </div>
                                                     


              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 2-->

          <!--begin: Form Wizard Step 3-->
		  
		  <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Current Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v3__form">
               
               <div class="col-md-12" id="corona_logo">
                                                                <div class="card" style=" box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;">
                                             <div class="header" style="background: #afd135;height: 6px;">
                                                                               
                                                                        </div>
																		<?php

$url = 'pediction_till_20th_april.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

?>

<table>
	<tbody>
		<tr>
			<th>Date</th>
			<th>Confirmed_cases_higher</th>
			<th>Confirmed_cases_lower</th>
			<th>Confirmed_cases_value</th>
		</tr>
		<?php foreach ($characters as $character) : ?>
        <tr>
            <td>  <?php echo $character->Date; ?> </td>
            <td>  <?php echo $character->Confirmed_cases_upper_limit; ?> </td>
			<td>  <?php echo $character->Confirmed_cases_lower_limit; ?> </td>
			<td>  <?php echo $character->Confirmed_cases_value; ?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>


																		
																	
                                                                        
                                                                </div>
                                             
                                                      </div>
                                                     


              </div>
            </div>
          </div>
       
          <!--end: Form Wizard Step 3-->

          <!--begin: Form Wizard Step 4-->
         
          <!--end: Form Wizard Step 4-->

          <!--begin: Form Wizard Step 5-->
         
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Wizard Step 6-->
       
          <!--end: Form Wizard Step 6-->

          <!--begin: Form Actions -->
          <div class="kt-form__actions">
          <!--   <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev" style="background-color: #afd135;" >
              Previous
            </button> -->
       <!--      <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color: #afd135;">
              Submit
            </button> -->
          <!--   <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" style="background-color: #034ea2;">
              Next Step
            </button> -->
          </div>
          <!--end: Form Actions -->
        </form>
        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>

       <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

      <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<!-- <script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script> -->
<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<!-- <script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<script src="assets/js/anna.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->

<script src="assets/js/table.js"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->
          <script src="./assets/js/demo2/pages/wizard/wizard-2.js" type="text/javascript"></script>


<script src="assets/js/anna.js"></script>

<script src="assets/js/ready.min.js"></script>
<!-- <script src="assets/js/demo.js"></script> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!-- <script src="assets/js/graph.js"></script> -->
<script src="assets/js/graph2.js"></script>
<script>
        $(".th").css("width",document.getElementById("corona_logo").clientWidth)
        $(".anna").css("height","450px");
        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
        console.log(document.getElementById("corona_logo").clientHeight + "ANNA ");
        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);

        $(window).resize(
                function resize_my(){
            // console.log("BETI");
            console.log("HIHIHI")
                        $(".anna").css("width",document.getElementById("corona_logo").clientWidth*0.8);
                        $(".face").css("height",document.getElementById("corona_logo").clientHeight*0.7);
                        $(".face").css("width",document.getElementById("corona_logo").clientWidth*0.7);
                        console.log($("#regions_div").css("width"));
                        drawRegionsMap();
                        // $("#my_dataviz_1").css("height","400");//document.getElementById("corona_logo").clientHeight*0.28)
                }
        )
</script>
<!-- <script type="text/javascript">
         $(document).ready( function() {

            $.ajax({
              type:"POST",
              dataType: "json",
              url: "case/json.php",
              data:"",
              success:category
            });
          });


         function category(data){

  Highcharts.chart('chartdiv1', {

    chart: {
            type: 'heatmap',
            marginTop: 40,
            marginBottom: 40,

},

        plotOptions: {
            heatmap: {
                allowPointSelect: true
            }
        },

        title: {
            text: ''
        },

        xAxis: {
            categories: ['Extreme', 'High', 'Medium', 'Low', 'Negligible']
        },

        yAxis: {
            categories: ['Remote', 'Unlikely', 'Possible', 'Likely', 'Propable'],
            title: null
        },
     
        colorAxis: {
            min: 0,
            minColor: '#FFFFFF',
            maxColor: Highcharts.getOptions().colors[0]
        },

        legend: {
            align: 'right',
            layout: 'vertical',
            margin: 0,
            verticalAlign: 'top',
            y: 25,
            symbolHeight: 520
        },

   
        tooltip: {
            formatter: function () {
              if(this.point.value>=75)
              {
               return '<b></b><br><b>' + this.point.value + '</b>: Possible Infection<br>';
              }
              else
              {
              return '<b></b><br><b>' + this.point.value + '</b>:Infection<br>';  
              }
            }
        },
   


        series: [{
            name: '',
            borderWidth: 1,
            drilldown: true,
            data: [{
                x: 0,
                y: 0,
                value: '77',
                color:'#64A0F2',
             
                drilldown: 'foo'
            }, {
                x: 0,
                y: 1,
                value: '81',
                 color:'#64A0F2'
            }, {
                x: 0,
                y: 2,
                value: '95',
                 color:'#6CC877'
               
            }, {
                x: 0,
                y: 3,
                value: '',
                 color:'#4CC25A'
               
            }, {
                x: 0,
                y: 4,
                value: '89',
                 color:'#4CC25A',
                drilldown: 'foo'
            }, {
                x: 1,
                y: 0,
                value: '14' ,
                color:'#D9D153'
             
            }, {
                x: 1,
                y: 1,
                value: '64',
                 color:'#64A0F2'
            }, {
                x: 1,
                y: 2,
                value: '78',
                 color:'#64A0F2'
            }, {
                x: 1,
                y: 3,
                value: '',
                 color:'#64A0F2',
                drilldown: 'foo'
            }, {
                x: 1,
                y: 4,
                value:'35' ,
                color:'#6CC877'
            }, {
                x: 2,
                y: 0,
                value: '51',
                color:'#F0635F'
            }, {
                x: 2,
                y: 1,
                value: '72',
                color:'#D9D153'
            }, {
                x: 2,
                y: 2,
                value: '',
                 color:'#D9D153',
                drilldown: 'foo',
                tooltip:''
            }, {
                x: 2,
                y: 3,
                value: '26',
                 color:'#64A0F2'
            }, {
                x: 2,
                y: 4,
                value: '57' ,
                color:'#6CC877'
            }, {
                x: 3,
                y: 0,
                value: '9',
                color:'#F0635F'
            }, {
                x: 3,
                y: 1,
                value: '82',
                 color:'#D9D153'
            }, {
                x: 3,
                y: 2,
                value: '4',
                 color:'#D9D153',
                drilldown: 'foo'
            }, {
                x: 3,
                y: 3,
                value: '',
                 color:'#64A0F2',
                drilldown: 'foo'
            }, {
                x: 3,
                y: 4,
                value: '87',
                 color:'#64A0F2'
            }, {
                x: 4,
                y: 0,
                value: '39',
                color:'#F0635F',
                drilldown: 'foo'
            }, {
                x: 4,
                y: 1,
                value: '',
                color:'#F0635F'
            }, {
                x: 4,
                y: 2,
                value: '72',
                color:'#F0635F',
                drilldown: 'foo'
            }, {
                x: 4,
                y: 3,
                value: '' ,
                 color:'#D9D153'
            }, {
                x: 4,
                y: 4,
                value: '29',
                color:'#D9D153'
            }],
            dataLabels: {
                enabled: true,
                color: 'black',
                style: {
                    textShadow: 'none',
                    HcTextStroke: null
                }
            }
        }],

        drilldown: {
            series: []
        }

 
});
   
}

      </script> -->

      </body>
      </html>