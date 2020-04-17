<?php
   include "../php/common/config.php";
$target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if(isset($_POST['submit']))
   {
     $company=$_POST['company'];
      $category=$_POST['category'];
       $relationship=$_POST['relationship'];
        $encounter=$_POST['encounter'];
         $department=$_POST['department'];
          $place=$_POST['place'];
           $monetaryvalue=$_POST['monetaryvalue'];
            $period=$_POST['period'];
             $namepi=$_POST['namepi'];
              $designationpi=$_POST['designationpi'];
               $departmentpi=$_POST['departmentpi'];
 $nameyd=$_POST['nameyd'];
         $emailyd=$_POST['emailyd'];
          $phonenoyd=$_POST['phonenoyd'];
           $authorityknows=$_POST['authorityknows'];
            $nameauth=$_POST['nameauth'];
             $emailauth=$_POST['emailauth'];
              $phoneauth=$_POST['phoneauth'];
               $incidentinfo=$_POST['incidentinfo'];
 $NPname=$_POST['NPname'];
         $BName=$_POST['BName'];
          $bankaccountno=$_POST['bankaccountno'];
           $AHN=$_POST['AHN'];
            $bankname=$_POST['bankname'];
             $BANo=$_POST['BANo'];
              $btcaddress=$_POST['btcaddress'];
               $ethaddress=$_POST['ethaddress'];
               $ran=$_POST['ran'];
                $secretkey=$_POST['secretkey'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];


           // $SMLoss=$_POST['SMLoss'];
           //    $MOperandi=$_POST['MOperandi'];
           //     $WBUpdate=$_POST['WBUpdate'];
           //     $MUpdate=$_POST['MUpdate'];
          // $check = getimagesize($_FILES["Artifacts"]["name"]);


    $sql="INSERT INTO blower(company,category,relationship,encounter,department,place,monetaryvalue,period,namepi,designationpi,departmentpi,nameyd,emailyd,phonenoyd,authorityknows,nameauth,emailauth,phoneauth,incidentinfo,
    NPname,BName,bankaccountno,AHN,bankname,BANo,btcaddress,ethaddress,ran,secretkey,Artifacts,status)
     values('$company','$category','$relationship','$encounter','$department','$place','$monetaryvalue','$period','$namepi','$designationpi','$departmentpi','$nameyd','$emailyd','$phonenoyd','$authorityknows','$nameauth','$emailauth','$phoneauth','$incidentinfo','$NPname','$BName','$bankaccountno','$AHN','$bankname','$BANo','$btcaddress','$ethaddress','$ran','$secretkey','$Artifacts','$status')";

        if(mysqli_query($link,$sql))
        {   
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            } 
              echo "successfully";
           header("location:secretkey.php");
        }
        else
        {
           // echo "Error: " . $sql . "<br>" . $link->error;
          }
   }
?>


<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Nix Whistle | blower</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
 <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="coronaspeak/LG3.png" />
       
    </head>
    <style>
 
  .hide{
    display: none;
  }
  .investigator {
    color: #000;
  }
  .blower{
    color: #8ac6d1;
  }
  .message{
    font-size: 11px;
  }
  .labelt{
    font-size: 13px;
  }


  .collapsible {
   
  cursor: pointer;
 
  width: 9%;
  border: none;
  text-align: right;
  outline: none;
  font-size: 15px;
  background: #FAFAFA;

}


.content {
  display: none;
  overflow: hidden;
 
}

    .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid #2A5AA8 1px;
        padding: 3px 10px;
        width: 500px;
    }

    .image {
      position: absolute;
      right: 24px;
      bottom: 149px;
    }
 

</style>

    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-image: url(./assets/media/bg/bg-7.jpg);margin-right : 90px;">

 
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item">
 

<!-- <div class="kt-portlet"> -->
<div class="kt-portlet__head kt-portlet__head--lg" >
<div class="kt-portlet__head-label">

</div>        
</div>


  <form class="kt-form kt-form" method="POST" enctype="multipart/form-data" >
        <div class="kt-portlet__body" style="margin-left: 100px; margin-top:-100px;" >
          <div class="container">
           <h3 style="text-align: center;color: white;"> Want to SpeakUp for an Issue?</h3>
          </div>
          <br><br>
     
          <div class="form-group row" style="color: white;">
            <label for="example-text-input" class="col-2 col-form-label">Category</label>
             <div class="col-10">
              <input list="company" id="searchbox" name="company" class="text-line" placeholder="Select or Enter Business Unit......" style="width: 88%;">
        <datalist id="company" name="company">
          <option>Accounting and Other Financial Impropriety</option>
          <option>Bribery or Corruption</option>
          <option>Money Laundering</option>
          <option>Sanctions</option>
          <option>Theft/Fraud</option>
          <option>Health & Safty</option>
          
         <!--  <option value="Other">Other</option> -->
        </datalist>
         
    </div>
          </div>
          <div class="form-group row" id="div2" style="color: white;">
            <label for="example-search-input" class="col-2 col-form-label">Business Unit</label>
              <div class="col-10">
                <input list="category" name="category" id="searchbox1" class="text-line" placeholder="Select Category ......" style="width: 88%;">
        <datalist id="category" name="category">
       <option value="Pied_Piper">Pied Piper</option>
          <option value="Hooli">Hooli</option>
          <option value="FixNix">FixNix</option>
        </datalist>
         <!--    <span id="san1" style="color: red;"></span>     -->
      </div>
          </div>
          <div class="form-group row" id="div3" >
            <label for="example-email-input" class="col-2 col-form-label"style="color: white;">Relationship</label>
            <div class="col-10">
            <input list="relationship" name="relationship" id="searchbox2" name="association" class="text-line" placeholder="Select Relationship ......." style="width: 88%;">
        <datalist id="relationship" style="color: white;" name="relationship" >
       
          <option>Employee</option>
           <option>Temporary Employee</option>
          <option>Contractror</option>
          <option>Consultant</option>
          <option>Former Employee</option>
             

        </datalist>
         <span id="san2" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div4" >
            <label for="example-url-input" class="col-2 col-form-label"style="color: white;">Encounter</label>
            <div class="col-10">
              <input list="aware" name="encounter" id="searchbox3" class="text-line" placeholder="Select Encounter ......." style="width: 88%;">
                  <datalist id="aware" name="encounter">
       
          <option>It happened to me</option>
          <option>I observed it</option>
          <option>Told to me by co-worker</option>
          <option>Told to me by someone outside the company</option>
          <option>I heared it</option>
        </datalist>
                    <span id="san3" style="color: red;"></span>    

            </div>
          </div>
          <div class="form-group row" id="div5" >
            <label for="example-tel-input" class="col-2 col-form-label"style="color: white;">Department</label>
            <div class="col-10">
              <input list="department" id="searchbox4" name="department" class="text-line" placeholder="Select Department ......." style="width: 88%;">
               <datalist id="department" name="department" >
   
          <option>Marketing</option>
          <option>Software</option>
          <option>Development</option>
          <option>Sales</option>
          <option>Risk</option>
          <option>Research</option>
          <option>HR</option>
          <option>Health</option>

        </datalist>
         <span id="san4" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div6" >
            <label for="example-password-input" class="col-2 col-form-label"style="color: white;">Location</label>
            <div class="col-10">


             <input type="text" name="place" placeholder="Location......." id="placeofoccurance" class="text-line" style="width: 88%;">
                <span id="san5" style="color: red;"></span>  
            </div>
         
          </div>
          <div class="form-group row" id="div7" >
            <label for="example-number-input" class="col-2 col-form-label"style="color: white;">Monetary value</label>
            <div class="col-10">
              <input list="monetaryvalue" name="monetaryvalue" id="searchbox5" class="text-line" placeholder="Select Monetary Value ......." style="width: 88%;">
               <datalist id="monetaryvalue" name="monetaryvalue" >
       
          <option>$0 to $1000</option>
          <option>$1000 to $100,000</option>
          <option>$100,000 to $200,000</option>
          <option>$200,000 to $300,000</option>
          <option>$300,000 to $400,000</option>
          <option>$400,000 to $500,000</option>
          <option>$500,000 and Above</option>
        </datalist>
         <span id="san6" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div8" >
            <label for="example-datetime-local-input" class="col-2 col-form-label"style="color: white;">Period</label>
            <div class="col-10">
              <input list="period" name="period" id="searchbox6" class="text-line" placeholder="Select Period ......." style="width: 88%;">
              <datalist id="period" name="period">
     
          <option>once</option>
          <option>one week</option>
          <option>1 to 3months</option>
                </datalist>
                 <span id="san7" style="color: red;"></span>  
            </div>
          </div>
          <div class="form-group row" id="div9" >
            <label for="example-date-input" class="col-2 col-form-label"style="color: white;">People Involved</label>
            <div class="col-10">
               <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;" >
            <input type="radio" name="aware" value="peos" checked="checked">Not Aware&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span></span>
             <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;" >
          <input type="radio" name="aware"value="peo" >Aware  
          <span></span>
            </div>
          </div>


         <div id="people" class="">
         <div class="input-group" style="margin-left: 16%;">
          <div class="col-3">
            <label style="color: white;">Full Name:</label>
           <input type="text" name="namepi" placeholder="Full Name" class="form-control" id="persons" style="background: transparent; color: white;">
            <!-- <span id="persons" class="form-control"></span> -->
          </div>
          <div class="col-3">
            <label style="color: white;">Designation:</label>
            <input type="text" name="designationpi" placeholder="Designation" id="Designation" class="form-control"style="background: transparent;color: white;">
            <!-- <span id="Designation" class="form-control"></span> -->
          </div>
          <div class="col-3">
            <label style="color: white;">Department:</label>
            <input type="text" name="departmentpi" placeholder="Department" id="DepartmentIn" class="form-control"style="background: transparent;color: white;">
           <!-- <span id="DepartmentIn" class="form-control"></span> -->
          </div>
       
       <div class="input-group after-add-more col-md-1">
                  <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:35px; margin-top: 14px; margin-left: 10px;" class="fa flaticon-plus"></i></button>
              </div>
              </div>                                    
       <div class="copy hide">
                <div class="control-group input-group">
                  <!-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here"> -->
                  <div class="col-3">
            <label style="color: white;">Full Name:</label>
            <input type="text" class="form-control" id="personsplus"style="background: transparent;color: white;">
          </div>
          <div class="col-3">
            <label style="color: white;">Designation:</label>
            <input type="text" class="form-control" id="Designation1"style="background: transparent; color: white;">
          </div>
          <div class="col-3">
            <label style="color: white;">Department:</label>
            <input type="text" class="form-control" id="Department1"style="background: transparent;color: white;">
          </div>
                 <div class="input-group col-md-1">
                    <button class="btn remove" type="button" title="Delete Row"><i class="fa flaticon-cancel" style="color: red;font-size: 35px; margin-top: 14px;margin-left: 10px;"></i></button>
                </div>
                </div>
              </div>
      </div><br>


          <div class="form-group row" id="div10" >
            <label for="example-month-input" class="col-2 col-form-label" style=" color: white;" >Your details:</label>
            <div class="col-10">
               <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
             <input type="radio" name="radio1" value="Anonymous"  checked="checked" id="Anonymous">Keen to be Anonymous&nbsp;&nbsp;&nbsp;
             <span></span>
              <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;">
         <input type="radio" name="radio1" value="disclose" id="disclose">Keen to disclose
         <span></span>
            </div>  
          </div>


        <div id="details" >
          <div class="input-group" style="margin-left: 16%;">
         <div class="col-3 input_val">
           <label style="font-size: 13px; color: white;">Full Name:</label>
           <input type="text" name="nameyd" placeholder="FullName" class="form-control"style="background: transparent;color: white;">
        </div>
      <div class="col-md-3">
        <label style="font-size: 13px; color: white;">Email:</label>
        <input type="text" name="emailyd" placeholder="Email" class="form-control" style=" background: transparent;color: white;">
      </div>
      <div class="col-md-3" >
        <label style="font-size: 13px; color: white;">Phone no:</label>
        <input type="text" name="phonenoyd" placeholder="Phone" class="form-control"style="background: transparent;color: white;">
      </div>

          <div class="control-group3 after-add-more3">
             <div class="input-group-btn">
<button class="btn add-more3"type="button" title="Add Row"><i style="color:green;font-size:35px; margin-top: 14px; margin-left: 20px;" class="fa flaticon-plus"></i></button>
             </div>
          </div>
   <div class="copy6 hide">
            <div class="kt-container--fluid control-group3 input-group" >
              <div class="col-md-3">
        <label style="font-size: 13px; color: white;">Full Name:</label>
        <input type="text" placeholder="Full Name" class="form-control" style="background: transparent;color: white;">
      </div>
      <div class="col-md-3">
          <label style="font-size: 13px; color: white;">Email:</label>
          <input type="text" placeholder="Email" class="form-control" style="background: transparent;color: white;">
      </div>
      <div class="col-md-3">
        <label style="font-size: 13px; color: white;">Phone No:</label>
        <input type="text" placeholder="Phone Number" class="form-control" style="background: transparent;color: white;">
      </div>
       <button class="btn remove3" type="button" title="Delete Row"><i class="fa flaticon-cancel" style="color: red;font-size: 35px; margin-top: 14px;margin-left: 20px;"></i></button>
               
            </div>
          </div>
    </div>
  </div>
    <br>

          <div class="form-group row" id="div11" >
            <label for="example-week-input" class="col-2 col-form-label" style=" color: white;" >Are Authorities aware</label>
            <div class="col-10">
               <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
                <input type="radio" checked="checked" name="authorityknows" value="NO" id="authknows">No
                <span></span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;">
           <input type="radio" name="authorityknows" value="YES" id="authknows">Yes
           <span></span>

            </div>
          </div>
          <div id="auth" class="container" style="margin-left: 16%;">
            <div class="form-group row">

          <div class="col-md-3" >
        <input type="text" placeholder="Full Name" class="form-control" name="nameauth" id="FullNAmeAuth"   style="background: transparent;color: white;">
      </div>    
        <div class="col-md-3">    
       
        <input type="text" placeholder="Email" class="form-control" name="emailauth" id="emailauth" style="color: white; background: transparent;color: white;">
        </div>
        <div class="col-md-3">
     
        <input type="text" placeholder="Phone" class="form-control" name="phoneauth" id="phoneauth"style="color: white;background: transparent;color: white;">
         </div>
    </div>
  </div>





          <div class="form-group row" id="div12" >
            <label for="example-time-input" class="col-2 col-form-label"style="color: white;">Incident Information</label>
            <div class="col-9">
              <textarea type="text" rows="9" placeholder="Incident Information" class="form-control" id="nature" name="incidentinfo" style="background: transparent;color: white;width:835px;"></textarea>
           <span><button type="button" id="start" class="image" style="background-color: #720765;color:#720765;"><img src="mic.png" width="35px"; height="35px;"></button></span>
            </div>

            <div class="col-1">
            <label aria-hidden="true" style="margin-top: 121px;color: white;margin-left:7px; ">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
          <input type="file" name="Artifacts" hidden=""></label>
            </div>
          </div>
          <div class="form-group row" id="div13" style="display: none;">
            <label for="example-color-input" class="col-2 col-form-label"style="color: white;">In case of reward</label>
            <div class="col-10">
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
              <input type="radio" name="radio3" value="self">Self
              <span></span>
        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;"><input type="radio" name="radio3" value="donate"style="color: white;">Donate
          <span></span>
       </div>
            </div>
      <div id="peoples" class="container" style="margin-left: 16%;">
              <div class="form-group row">
                <div class="col-md-3">

                <input type="text"   placeholder="Non-Profit Name" id="NPname" name="NPname" class="form-control"style="color: white;background: transparent;">
                </div>
                <div class="col-md-3">
                <input type="text" placeholder="Bank Name" name="BName" id="BName"class="form-control"style="color: white;background: transparent;;">
                </div>
                <div class="col-md-3">
                <input type="text" placeholder="Bank Account no." name="bankaccountno" id="bankaccountno"class="form-control"style="color: white;background: transparent;">
      </div>
      </div>
      </div>


      <div id="donates" class="container" style="margin-left: 16%;">
                        <div class="form-group row">
                         <div class="col-3">
                                        <input type="text" name="AHN" id="AHN" placeholder="Account Holder Name" class="form-control" style="background: transparent;">
                                      </div>
                                  <div class="col-3">
                                     <input type="text" id="bankname" name="bankname" placeholder="Bank Name" class="form-control" style="background: transparent;">
                                  </div>
                                   <div class="col-3">
                                      <input type="text" name="BANo" id="BANo" placeholder="Bank Account No." class="form-control" style="background: transparent;">
                                  </div>
                                
                                </div>
                                 <div class="form-group row">
                                       <div class="col-11">
                                   <center><strong style="margin-left: -30%;">OR</strong></center>
                                   </div>  
                                 </div>
                                  <div class="row">
                                   
                               
                                   <div class="col-md-11 input_val">
         <input type="text" placeholder="BitCoin Address" name="btcaddress" id="btcaddress" class="form-control" style="background: transparent;color: white;width:830px;margin-left: -7px;"><br><center><strong style="margin-left: -30%;">OR</strong></center>></div><br><br><br><br>

                                       <img src="./blower/BTC1.png" height="47px" width="52px" alt="Bit" style="margin-left: -13%;">
                                      <div class="col-md-11 input_val">
         <input type="text" placeholder="Ethereum Address" id="ethaddress" name="ethaddress" class="form-control" style="background: transparent;color: white;width:830px;margin-left: -7px;">
                                      </div>
         <img src="./blower/ETC.png" height="47px" width="52px" style="margin-left: -13%;">
               
                      <input type="hidden" name="ran" id="ran">
 <input type="hidden" name="secretkey" id="secretkey">

                               
<br>
<br>
                        </div>
       

          </div>
       <br>
</div>
  <input type="submit" name="submit" class="btn btn-primary mb-3" value="submit" style="float: right;">
      </form>


</div>
</div>
</div>
</div>
</div>

 



 <script>
$(document).ready(function(){
  $("#people").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#people").hide();
}
if($(this).val()=="peo")
{
$("#people").show();
}
});
});
</script>
<script>
        function addRow(){
          var table = document.getElementById('myTable');
          //var row = document.getElementById("myTable");
          var x = table.insertRow(1);
          var e =table.rows.length-1;
          var l =table.rows[e].cells.length;
          //x.innerHTML = "&nbsp;";
          for (var c =0,  m=l; c < m; c++) {
            table.rows[1].insertCell(c);
            table.rows[1].cells[c].innerHTML  = "<input type='text' class='form-control'>";
            }
          }
</script>
<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey").value=result;
     

});

</script>
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
  $("#auth").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="NO")
{
$("#auth").hide();
}
if($(this).val()=="YES")
{
$("#auth").show();
}
});
});
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more2").click(function(){
          var html = $(".copy2").html();
          $(".after-add-more2").after(html);
      });
      $("body").on("click",".remove2",function(){
          $(this).parents(".control-group2").remove();
      });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>


<!--add and remove in your Details-->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more3").click(function(){
          var html = $(".copy6").html();
          $(".after-add-more3").after(html);
      });
      $("body").on("click",".remove3",function(){
          $(this).parents(".control-group3").remove();
      });
    });
</script>

<!-- Donate to NGO --->
<script>
$(document).ready(function(){
   $("#peoples").hide();
   $("#donates").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="donate")
{
  $("#donates").hide();
$("#peoples").show();
}
if($(this).val()=="self")
{
  $("#peoples").hide();
$("#donates").show();
}

});
});
</script>

<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('company');
 if(val=='Other')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<script type="text/javascript">
  class SpeechRecognitionApi{
  constructor(options) {
    const SpeechToText = window.speechRecogniton || window.webkitSpeechRecognition;
    this.speechApi = new SpeechToText();
    this.output = options.output ? options.output: document.createElement("");
    this.speechApi.continuous = true;
    this.speechApi.interimResult = false;
    this.speechApi.onresult = (event) => {
      var resultIndex = event.resultIndex;
      var transcript = event.results[resultIndex][0].transcript;
      this.output.textContent += transcript;
      console.log(this.output)
    }
  }
  init() {
    this.speechApi.start();
  }
  stop() {
    this.speechApi.stop();
  }
}
window.onload = function() {
  var speech = new SpeechRecognitionApi({
    output: document.querySelector(".output")
  })
  document.querySelector("#start").addEventListener("click", () => {
    speech.init();
  })

  document.querySelector("#end").addEventListener("click", () =>{
    speech.stop();
  })
}
</script>
    <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
   
    <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="assets/vendors/custom/jquery-ui/jquery-ui.bundle.min.js" type="text/javascript"></script>
<link href="assets/vendors/custom/jquery-ui/jquery-ui.bundle.min.css">
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
<script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
         
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
            </body>
    <!-- end::Body -->
</html>