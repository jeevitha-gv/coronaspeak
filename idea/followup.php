<?php
    include "../php/common/config.php";
     $tipno = $_GET['tipno'];
    $query = "SELECT * FROM Idea WHERE tipno='$tipno' order by id desc";
    $result = mysqli_query($link,$query);
    $query1 = "SELECT * FROM Idea WHERE tipno='$tipno'";
    $result1 = mysqli_query($link,$query1);
     $query2 = "SELECT * FROM Idea WHERE tipno='$tipno'";
    $result2 = mysqli_query($link,$query2);
?>

<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>View Idea</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
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
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
 <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href=" ./assets/media/company-logos/whistle.png" />

 
<style>

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
  
  /*width: 9%;*/
  /*border: none;*/
  text-align: right;
  outline: none;
  font-size: 15px;
  background: #FAFAFA;

}


.content {
  display: none;
  overflow: hidden;
  
}

   label {
    color: #ffffff;
   }
 
</style>
</head>
<?php 
include 'siteHeader2.php';
?>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  style="background-image: url(./assets/media/bg/bg-7.jpg);">
<h2 style="margin-left: 400px;"></h2>
<form method="post">
<!--   <div class="container" style="margin-left: 400px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="tipno" id="tipno" class="form-control" placeholder="Enter the Idea/Tip Number">
       
      </div>
      <div class="col-md-2">
        <input type="submit" id="search" name="submit" value="FollowUp" style="background-color:#3e8e9d;" class="btn btn-danger" >
      </div>
    </div><br><hr>
</div> -->
</form>

<div class="container ">
 <?php
 if($rows=mysqli_fetch_assoc($result)) {
  ?>
 <div class="container">
  <label>Idea Update:</label>
  <textarea type="text" class="form-control" rows="8"  id="update" placeholder=""  style="background: transparent;color: white;" disabled=""><?php echo $rows['WBU'];?> </textarea>
</div>
<?php } ?>
 <div class="container">
<button type="button" data-toggle="collapse" data-target="#demo" class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff; font-size: 16px;">  History</button>
</div><br>
<div id="demo" class="collapse">
<div class="container">
  <label>Category :</label>
<input type="text" name="email" class="form-control" disabled value="<?php echo $rows['category'];?>" style="background: transparent;color: white;">
</div><br>

<div class="container">
  <label>Description :</label>
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['Description'];?>" style="background: transparent;color: white;">
</div>
<br>


<div class="container">
     <label class="" style="font-size: 14px;"><strong>Your Details :</strong></label>
 
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div id="people1" class="">
<br>
 <?php
 if($rows1=mysqli_fetch_assoc($result1)) {
  ?>
<div class="row">
  <div class="input-group" style="margin:20px;">
   <div class="col-md-4 input_val">
     <label>Full Name :</label>
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows1['name'];?>" style="background: transparent;color: white;">
   </div>
   <div class="col-md-4 input_val">
     <label>Email :</label>
     <!--<input type="text" placeholder="Designation" class="form-control" style="border-color: #216582;">-->
    <input type="text" name="email" class="form-control" disabled value="<?php echo $rows1['email'];?>" style="background: transparent;color: white;">
   </div>
   <div class="col-md-4 input_val">
     <label>Phone No :</label>
    <!-- <input type="text" placeholder="Department" class="form-control" style="border-color: #216582;">-->
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows1['phone'];?>" style="background: transparent;color: white;">   </div>
 
<!-- <div class="input-group after-add-more col-md-1">
           <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
       </div> -->

       </div> 
   </div>
   <br><br>
</div>
</div>
<br>
</div>
<br>


<div class="container">
     <label class="" style="font-size: 14px;"><strong>Incase Of Rewards :</strong></label>
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">


<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group" style="margin: 20px;">
   <div class="col-md-4 input_val">
     <label>Account Holder Name :</label>
    <!--<input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;" >-->
      <input type="text" name="name" class="form-control" disabled value="<?php echo $rows1['AHN'];?>" style="background: transparent;color: white;">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Name :</label>
  <input type="text" name="name" class="form-control" disabled value="<?php echo $rows1['bankname'];?>" style="background: transparent;color: white;">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Account No. :</label>
    <input type="text" name="name" class="form-control" disabled value="<?php echo $rows1['BAN'];?>" style="background: transparent;color: white;">
   </div>

       </div> 
   </div>
   <br>
   <div class="row">
  <div class="input-group" style="margin: 20px;">
   <div class="col-md-4 input_val">
     <label>Non-Profit Name :</label>
       <input type="text" name="name" class="form-control" disabled value="<?php echo $rows1['NPname'];?>" style="background: transparent;color: white;">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Name :</label>
        <input type="text" name="name" class="form-control" disabled value="<?php echo $rows1['bname'];?>" style="background: transparent;color: white;">
   </div>
   <div class="col-md-4 input_val">
     <label>Bank Account No. :</label>
     <input type="text" name="name" class="form-control" disabled value="<?php echo $rows['bankac'];?>" style="background: transparent;color: white;">
   </div>
 


       </div> 
   </div>
</div>
</div>
</div>
<br>
<div class="container">

     <label class="" style="font-size: 14px;"><strong>Artifacts</strong></label>
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div id="" class="">
<div class="row">
  <div class="input-group" style="margin: 20px;">
<a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;color: white;"><?php echo $rows['Artifacts'];?></a>
    </div>
  </div>
</div>
</div>
</div>
<?php
}
?>
<br>
    <?php
      $count=1;
   while($rows2=mysqli_fetch_assoc($result2)){
    ?>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Updated to Idea - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;color: white;">
        <?php echo $rows2['WBU'];?>
      </div>
   </div><br>
 <?php 
 $count++;
} 
?>
</div>
<br>
<div class="container">
  <div class="row">
   <div class="col-md-11">
  <button class="collapsible btn btn-success">Interaction</button>

  <div id="" class="collapse"><br>
    <h5 style="color: #fff;">Chat History</h5>
  <div style="min-height: 200px; width: 1119px; max-height: 100px; overflow: auto;border:1px solid #C3C8C6;">
        <div class="conversations"></div>
     
      </div>
   </div>
</div>
<div class="col-md-1">
    <div class="img" style="float: right;">
       
          <a href="" data-toggle="modal" data-target="#myModal"><i class='fa fa-comments' style="color:  red; font-size: 38px;" title="Review"></i></a>
            </div>
</div>
</div>
</div>
<br>

</div>
  
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<br><br>

</body> 

</html>
<?php 
include "../blower/sidemenu.php";
 ?>


<script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
          
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <!-- <script src="assets/toggleButton/bootstrap-toggle.min.js"></script> -->
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- end::Body -->
