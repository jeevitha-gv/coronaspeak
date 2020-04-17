<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit']))
   {
     $category=$_POST['selimg'];
     
          $countries=$_POST['countries'];
           $Description=htmlspecialchars($_POST['Description']);
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
               $ran=$_POST['tipno'];
                $secretkey=$_POST['passkey'];
                $likelihood=$_POST['likelihood'];
                $impact=$_POST['impact'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];



$sql="INSERT INTO `case`(countries,Description,name,email,phone,ran,secretkey,Artifacts,status,likelihood,impact)
     values('$countries','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$likelihood','$impact')";

        if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:casecode.php");
        }
        else
        {
           // echo "Error: " . $sql . "<br>" . $link->error;
          }
   
     
     
      }
 
?>
<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['login']))
   {
     $category=$_POST['info'];
     
          $countries=$_POST['countries1'];
           $Description=htmlspecialchars($_POST['Description1']);
           $name=$_POST['name1'];
           $email=$_POST['email1'];
           $phone=$_POST['phone1'];
               $ran=$_POST['tipno1'];
                $secretkey=$_POST['passkey1'];
               
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name1'];


 $sql1="INSERT INTO `info` (category,countries,Description,name,email,phone,ran,secretkey,Artifacts,status)
     values('$category','$countries','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status')";

        if(mysqli_query($link,$sql1))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:../info/infocode.php");
        }
        else
        {
           echo "Error: " . $sql1 . "<br>" . $link->error;
          }
   
     
     
      }
 
?>
<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title></title>
        <meta name="description" content="Wizard examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">        <!--end::Fonts -->

       
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
       
        <!--begin:: Global Mandatory Vendors -->
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                   
                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
    </head>
    <?php include '../siteheader.php'; ?>
     <style type="text/css">
    $easeOutBack: cubic-bezier(0.175, 0.885, 0.320, 1.275);
$color-range-output: #383c42;
$color-input-placeholder: #c3c4c6;
$height-range-bounds: 22px;
$background-color-range-thumb: #333940;
$radius-range-thumb: 100px;
$height-range-thumb: 24px;
$width-range-thumb: 24px;
$size-range-thumb-shadow: 25px;
$color-range-thumb-shadow: rgba(#000, .5);
$shadow-offset-y-range-thumb: 4px;
$shadow-offset-x-range-thumb: 0px;
$border-width-range-thumb: 6px;
$border-color-range-thumb: #fff;
$width-range-track: 100%;
$height-range-track: 4px;
$radius-range-track: 100px;
$fill-range-track: #e6e6e6;
$fill-range-track-active: #60cd18;

//Output
$height-range-output: 60px;
$min-width-range-output: 32px;
$padding-x-range-output: 20px;
$size-range-output-arrow: 10px;
$offset-y-range-output: 4px;

.range {
  @mixin range-track() {
    box-sizing: border-box;
    width: $width-range-track;
    height: $height-range-track;
    background: $fill-range-track;
    border-radius: $radius-range-track;
  }
  @mixin range-thumb() {
    box-sizing: border-box;
    box-shadow: $shadow-offset-x-range-thumb $shadow-offset-y-range-thumb $size-range-thumb-shadow $color-range-thumb-shadow;
    border: $border-width-range-thumb solid $border-color-range-thumb;
    height: $height-range-thumb;
    width: $width-range-thumb;
    border-radius: $radius-range-thumb;
    background: $background-color-range-thumb;
    cursor: pointer;
  }

  position: relative;

  //Native
  input[type=range] {
    appearance: none;
    padding: 0;
    width: $width-range-track;
    height: $height-range-bounds;
    cursor: pointer;
    display: block;

    &:focus {
      outline: none;
    }
    &[disabled] {
      opacity: .3;
      cursor: default;
    }
  }

  //Plugin wrapper
  .rangeslider {
    position: relative;
    height: $height-range-bounds;
    cursor: pointer;
    user-select: none;
  }

  //Track
  .rangeslider:before {
    @include range-track();
    content: "";
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  }
  input::-webkit-slider-runnable-track, {
    @include range-track();
    margin: $height-range-bounds / 2 0;
  }
  input::-moz-range-track {
    @include range-track();
    margin: $height-range-bounds / 2 0;
  }
  input::-ms-track {
    @include range-track();
    color: transparent;
    padding: $height-range-bounds / 2 0;
    background: transparent;
    border-color: transparent;
  }

  //Track fill
  input::-ms-fill-lower,
  input::-ms-fill-upper {
    @include range-track();
  }
  input::-ms-fill-lower {
    background: $fill-range-track-active;
  }
  .rangeslider-fill-lower {
    background-color: $fill-range-track-active;
    border-radius: $radius-range-track;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: $height-range-track;
    will-change: width;
  }

  //Thumb
  input::-webkit-slider-thumb {
    @include range-thumb();
    appearance: none;
    transform: translateY(-50%);
    margin-top: $height-range-track / 2;
  }
  input::-moz-range-thumb {
    @include range-thumb();
  }
  input::-ms-thumb {
    @include range-thumb();
  }
  .rangeslider-thumb {
    @include range-thumb();
    position: absolute;
    touch-action: pan-x;
    top: 50%;
    transform: translateY(-50%);
    will-change: left;
  }

  .range-output {

    position: absolute;
    left: ($width-range-thumb - $border-width-range-thumb * 2) / 2;
    top: ($width-range-thumb - $border-width-range-thumb * 2) / 2;
    transform-origin: 0 0;
    transition: transform .4s $easeOutBack;
    user-select: none;

    .output {
      display: block;
      position: absolute;
      height: $height-range-output;
      line-height: $height-range-output;
      min-width: $min-width-range-output;
      padding: 0 $padding-x-range-output;
      top: - ($width-range-thumb / 2) - $offset-y-range-output - $size-range-output-arrow;
      transform: translate(-50%, -100%);
      background: $color-range-output;
      color: #fff;
      border-radius: 100px;
      white-space: nowrap;
      font-weight: bold;
      font-size: 1.2em;
      text-align: center;

      &:before {
        content: "";
        position: absolute;
        bottom: - $size-range-output-arrow + 2px; //Subtract 2 to get slight overlap that renders more nicely
        left: 50%;
        border: $size-range-output-arrow solid $color-range-output;
        border-bottom: none;
        border-left-color: transparent;
        border-right-color: transparent;
        transform: translateX(-50%);
      }
    }
  }
}

//Demo stuff

main {
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  color: #333;
}

form {
  max-width: 100%;
  min-width: 100%;
}

h2 {
  font-weight: 300;
  text-align: center;
  margin-bottom: 30px;
}
@media screen and (min-width: 320px) {
.rangeslider{
  width: 100%;
}
}
  </style>

<style>
.zoom {

  transition: transform .2s; /* Animation */

}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

    <body  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  style="background-color: #F0ECED;"><br><br>
               <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <div class="row">
    <div class="col">
        <div class="zoom">
        <div class="alert alert-light alert-elevate fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
             component with a variety of options to provide uniquely looking Modal component that matches the Metronic's design standards.
                <br>
                For more info please visit the plugin's <a class="kt-link kt-font-bold" href="" target="_blank">Documentation</a>.
            </div>
        </div>
    </div>
    </div>
</div>
</div>
                <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                         <div class="kt-portlet">
           <!--  <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    TITLE
                    </h3>
                </div>
            </div> -->
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" >
                        <a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1">
                            <i class="la la-comment" style="font-size: 50px; color: #005eaa;"></i>  <label style="font-size:20px;font-weight: 500;color: black;">CASE</label>
                        </a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3">
                            <i class="la la-cloud-download" style="font-size: 50px; color: #4b830d;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">INFO</label>
                        </a>
                    </li>
                 
                </ul>                    

                <div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
                      <form class="kt-form" method="post">
                    <!--begin: Form Wizard Step 1-->
                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                      <div class="kt-container" style="padding-left: 10%; padding-right: 10%;">
                        <div class="kt-heading kt-heading--md" style="font-size: 18px; font-weight: 300">Setup Your Current Case:</div>
                        <div class="kt-form__section kt-form__section--first">
                            <div class="kt-wizard-v1__form">
                                <div class="form-group">
                                 <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Likelihood:</label>
                    </div>  

                                 <div class="row">
                                  <form class="rangeslider" oninput="output.value = Math.round(range.valueAsNumber / 1000)">
                                  <div class="range rangeslider">
                                    <div class="range-output">
                                      <output class="output" name="output" for="range">
                                       
                                      </output>
                                    </div>
                                    <input name="range" class="custom-range" type="range" min="0" max="100000">
                                   
                                    <span class="font-weight-bold">Low</span>
                                    <span class="font-weight-bold" style="margin-left:27%;" >Medium</span>
                                    <span class="font-weight-bold" style="margin-left: 27%;">High</span>
                                    <span class="font-weight-bold" style="float: right;">Extreme</span>

                                 </div>
                               </form>
                                 </div>
                                  <!--   <span class="form-text text-muted">Please enter your Address.</span> -->
                                </div>

                                <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Impact:</label>
                    </div>  
                                <div class="row">
                                  <form class="rangeslider" oninput="output.value = Math.round(range.valueAsNumber / 1000)">
                                  <div class="range rangeslider">
                                    <div class="range-output">
                                      <output class="output" name="output" for="range">
                                       
                                      </output>
                                    </div>
                                    <input name="range1" class="custom-range" type="range" min="0" max="100000">
                                   
                                    <span class="font-weight-bold" style="">Remote</span>
                                    <span class="font-weight-bold" style="margin-left:27%;" >Unlikely</span>
                                    <span class="font-weight-bold" style="margin-left: 27%;color: ">Possible</span>
                                    <span class="font-weight-bold" style="float: right;">Likely</span>


                                 </div>
                               </form>
                                 </div>

                                </div>
                           
                                  <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Symptoms:</label>
                    </div>  
                                  <div class="row">
                                    <div class="col-md-3">
                                        <!-- <input type="radio" name="Symptoms"> -->
                                        <span style="font-size: 50px;">&#129298;</span>
                                    </div>
                                     <div class="col-md-3">
                                        <!-- <input type="radio" name="Symptoms"> -->
                                       <span style="font-size: 50px;">&#129319;</span>
                                    </div>
                                     <div class="col-md-3">
                                        <!-- <input type="radio" name="Symptoms"> -->
                                         <span style="font-size: 50px;">&#128555;</span>
                                    </div>
                                     <div class="col-md-3">
                                        <!-- <input type="radio" name="Symptoms"> -->
                                        <span style="font-size: 50px;">&#128567;</span>
                                    </div>
                                   <!--   <div class="col-md-2">
                                        <input type="radio" name="Symptoms">
                                    </div> -->
                                  </div>
                                </div>
                           
                             
                                        <div class="form-group">
                                               <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600; width: 100%;">Country:</label>
                    </div>
                                        <select name="countries" class="form-control">
                                            <option value="">Select</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU" selected>Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Description:</label>
                    </div>
                                 <textarea type="text" rows="8" class="form-control" name="Description" id="Description" ></textarea>
                                 
                                </div>
                               <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Artifacts:</label>
                    </div>  
                     <div class="form-group">
       
          <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
            <div class="dropzone-msg dz-message needsclick">
                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                <!-- <span class="dropzone-msg-desc">Upload up to 10 files</span> -->
                <label for="Artifacts" aria-hidden="true">

         <img src="csv.svg" title="Upload File" width="35" height="35" >
                 <input type="file" name="Artifacts" id="Artifacts" style="display: none;">
               </label>
            </div>
          </div>
      </div>
     </div>

                                        <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Your Details:</label>
                    </div>  
                     <div class="form-group ">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;font-size: 14px;">
         <input type="radio" name="radio1" value="Anonymous" id="Anonymous" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black; font-size: 14px;">
             <input type="radio" name="radio1" value="disclose" id="disclose"> Keen to disclose

             <span></span>
           </label>


      </div>
     </div>
           <div id="details">
            <div class="row">
         <div class="col-md-4 ">
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control" required="">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Email" id="email" name="email" class="form-control">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control" required="">
      </div>


  </div>
</div>

                            </div>
                        </div>
                    </div>
                  </div>
                     <input type="hidden" name="passkey" id="passkey">
          <input type="hidden" name="tipno" id="tipno">
                   <div style="text-align:center">  
    <input type="submit" name="submit" value="submit" class="btn btn-success" style="display: inline-block;border-radius: 8px solid #4b830d;color:#fff;background:#005eaa;width: 30%;">  
</div>  
                </form>
                    </div>
               
                    <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                      <form class="kt-form" method="post">
                    <!--begin: Form Wizard Step 1-->
                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" style="padding-left: 10%; padding-right: 10%;">
                        <div class="kt-heading kt-heading--md" style="font-size: 18px; font-weight: 300">Setup Your Current Info:</div>
                        <div class="kt-form__section kt-form__section--first">
                            <div class="kt-wizard-v1__form">
                                <div class="form-group">
                                 <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Info:</label>
                    </div>  

                              <div class="row">
                                  <div class="col-md-2" style="text-align: center;">
                                     <i class="fa fa-user-shield" style="font-size: 50px; color: #005eaa;"></i>
                                  
                                    <div>
                                      Death
                                    </div>
                                  </div>
                                  <div class="col-md-2" style="text-align: center;">
                                    <i class="fa fa-hands-helping" style="font-size: 50px; color: #4b830d;"></i>
                                    <div>
                                      Neighborhood Alert
                                    </div>
                                  </div>
                                  <div class="col-md-2" style="text-align: center;">
                                     <i class="fa fa-bus-alt" style="font-size: 50px; color: #005eaa;"></i>
                                    <div>
                                      Travel Alert
                                    </div>
                                  </div>
                                  <div class="col-md-2" style="text-align: center;">
                                    <i class="la la-feed" style="font-size: 50px; color: #4b830d;"></i>
                                    <div>
                                      Feed
                                    </div>
                                  </div>
                                     <div class="col-md-2" style="text-align: center;">
                                    <i class="fa fa-ambulance" style="font-size: 50px; color: #005eaa;"></i>
                                    <div>
                                      Operation
                                    </div>
                                  </div>
                                </div>
            
                                  <!--   <span class="form-text text-muted">Please enter your Address.</span> -->
                                </div>
                                        <div class="form-group">
                                               <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Country:</label>
                    </div>
                                        <select name="countries1" class="form-control">
                                            <option value="">Select</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU" selected>Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                   
                                    <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Description:</label>
                    </div>  
                         <textarea type="text" rows="8" class="form-control" name="Description1" id="Description1"></textarea>
                                </div>
                               <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Artifacts:</label>
                    </div>  
                     <div class="form-group">
       
          <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
            <div class="dropzone-msg dz-message needsclick">
                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                <!-- <span class="dropzone-msg-desc">Upload up to 10 files</span> -->
                <label for="Artifacts1" aria-hidden="true">
         <img src="csv.svg" title="Upload File" width="35" height="35" >
                 <input type="file" name="Artifacts1" id="Artifacts1" style="display: none;">
               </label>
            </div>
          </div>
        </div>
      </div>

                                        <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Your Details:</label>
                    </div>  
                     <div class="form-group">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;font-size: 14px;">
         <input type="radio" name="radio1" value="Anonymous1" id="Anonymous1" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black; font-size: 14px;">
             <input type="radio" name="radio1" value="disclose1" id="disclose1"> Keen to disclose

             <span></span>
           </label>


      </div>
     </div>
           <div id="details1">
            <div class="row">
         <div class="col-md-4">
           <input type="text" placeholder="FullName" id="name" name="name1" class="form-control" required="">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Email" id="email" name="email1" class="form-control">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone1" class="form-control" required="">
      </div>


  </div>
</div>

                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="passkey1" id="passkey1">
          <input type="hidden" name="tipno1" id="tipno1">
                   <div style="text-align:center">  
    <input type="submit" name="login" value="submit" class="btn btn-success" style="display: inline-block;border-radius: 8px solid #4b830d;color:#fff;background:#4b830d;width: 30%;">  
</div>  
                </form>
                    </div>
                 
                </div>      

            </div>
        </div>
 </div>
           

<?php include '../footer.php'; ?>
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

        <!--begin:: Global Mandatory Vendors -->
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
                   
                   <script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

       
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo2/pages/wizard/wizard-1.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>
<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>
<script>
$(document).ready(function(){
  $("#details1").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous1")
{
$("#details1").hide();
}
if($(this).val()=="disclose1")
{
$("#details1").show();
}
});
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
 $("#Description").click(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey").value=result;
     
});


});

</script>
<script type="text/javascript">
  $(document).ready(function(){
 $("#Description1").click(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno1").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey1").value=result;
     
});


});

</script>