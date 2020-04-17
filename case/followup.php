<?php
include "../php/common/config.php";
  $ran = $_GET['ran'];
    $query = "SELECT * FROM `case` WHERE ran='$ran'";
    $result = mysqli_query($link, $query);
       $query1 = "SELECT * FROM `case` WHERE ran='$ran'";
  $result1=mysqli_query($link,$query1);
       $query2 = "SELECT * FROM `case` WHERE ran='$ran' order by id desc";
  $result2=mysqli_query($link,$query2);
?>

<!DOCTYPE html>  
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Case | FollowUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

 <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

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


  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <!-- <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  -->
     
    <!-- <script type="text/javascript" src="assets/DataTables/DataTables-1.10.12/js/jquery.dataTables.min.js"></script> -->
   <!--      <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script>
           <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>   -->
 
   <link href="./assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./assets/media/company-logos/virus.png" />
           
        <!-- <link rel="shortcut icon" href="./assets/media/logos/fixnix.png" /> -->
    </head>
 <style type="text/css">
   label {
    color: #ffffff;
   }
 </style>
  <?php
   include '../siteheader2.php';
?>
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

       
    <!-- begin:: Page -->


<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper"  style="margin-top:-10%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<!--begin: Datatable -->


<form method="post">
<!--   <div class="container" style="margin-left: 300px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="ran" id="ran" class="form-control" placeholder="Enter the Idea/Tip Number" tyle="background: transparent;color: white;">
       
      </div>
      <div class="col-md-2">
        <input type="submit" id="search" name="search"  style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" style="">
      </div>
    </div><br><hr>
</div> -->
</form>



  <div class="container" id="data" style="border:0px solid #C3C8C6;"  ><br>
              <?php
   if($rows2=mysqli_fetch_assoc($result2)) {
     # code...
  ?>
     <div class="row form-group">
             <label  class="col-md-10" style="color: black;">Case Update:</label>
                <div class="col-md-12 " >
              <textarea type="text" id="WBUpdate" rows="8" class="form-control" placeholder=""  style="background: transparent; color:black;"disabled=""><?php echo $rows2['WBU'];?></textarea>
            </div>
          </div>
          <?php
        }
          ?>
                <?php
   if($rows=mysqli_fetch_assoc($result)) {
     # code...
  ?>
       
          <div class="row">
           <div class="container">
<a data-toggle="collapse" data-target="#demo" style="font-size: 16px;"><button class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff;">  History</button></a>
</div>
</div><br>
<div id="demo" class="collapse">
  <!--     <div class="row form-group">        
        <div class="col-md-6">  
   
    <label >Case No</label><br>
<input type="text" id="tipno" name="id" disabled class="form-control"value="<?php echo $rows['ran']; ?>" style=";background: transparent;color: white;">


        </div>
        <div class="col-md-6">
          <label>Created Date</label><br>
 <input type="text" id="createdAt" name="createdAt" class="form-control"value="<?php echo $rows['createat']; ?>"disabled style=";background: transparent;color: white;">  
        </div>
         </div> -->
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">City</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" id="company" name="company" class="form-control"value="<?php echo $rows['city']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">ZipCode</label><br>
           <input type="text" id="category" name="category" class="form-control"value="<?php echo $rows['zipcode']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
 <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">1. For whom are You taking this test?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['taking_test']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">2. What is your age group?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['age']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
 

 <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">3. What is your gender?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['gender']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">4. Do you have fever?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['fever']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
       <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">5. Do you have dry cough?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['drycough']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">6. Do you have lost or less Feeling to smell?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['feelingsmell']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">7. Do you have throat pain?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['throatpain']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">8. Does your Body feel weak?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['bodyweak']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">9. Do you have No Hunger?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['nohunger']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">10. Do you have normal or heavy cough?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['coughrange']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">11. Do you have breath shortness?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['shortness']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">12. Do you have normal breathing?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['breathing']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">13. Do you Feel drowsy or sleep?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['drowsy']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">14. Do you feel Pain in chest?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['chestpain']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">15. Do you have Weakness across body?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['weaknessbody']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">16. Have you  visited outside state or country  in last 21 days?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['visitedoutside']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">17. Have you  came in contact with anyone affected?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['contactaffect']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">18. Have you visited any of the corona infected countries in last 21 days?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['infectedcountry']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">19. Have you or your family came in contact with anyone affected in last 21 days?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['familycontact']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">20. Do you have any of these health condition?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['healthcondition']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
         <div class="panel-body" style="border: 1px solid #e2e5ec; border-color: #A1E6EA;">

    <div class="row form-group" class="container hide" id="authknowsarea">
          <div class="col-md-6">
          <label style="color: black;">Name</label><br>
            <input type="text" id="nameauth" name="nameauth" class="form-control"value="<?php echo $rows['name']; ?>"disabled style=";background: transparent;">
           </div>
          <div class="col-md-6">
          <label style="color: black;">Email ID</label><br>
         <input type="text" id="emailauth" name="emailauth" class="form-control"value="<?php echo $rows['email']; ?>"disabled style=";background: transparent;">
           </div>
         

   </div>

   <div class="row form-group">
     <div class="col-md-6">
          <label style="color: black;">Phone No.</label><br>
          <!-- <span id="PhoneAuth" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
           <input type="text" id="phoneauth" name="phoneauth" class="form-control"value="<?php echo $rows['phone']; ?>"disabled style=";background: transparent;" >
         </div>
       
   </div>
 </div>
          <br>
            <div class="row form-group">
   
          <label class="col-md-10" style="color: black;">Details</label>
          <div class="col-md-12">
                 <textarea type="text" id="incidentinfo" rows="8" name="incidentinfo" class="form-control" value="<?php echo $rows['Description']; ?>"disabled style=";background: transparent;"><?php echo $rows['Description']; ?></textarea>
         </div>
      </div>
        <br>
     <div class="">

     <label class="" style="font-size: 14px; color: black;"><strong>Artifacts</strong></label>
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div id="" class="">
<div class="row">
  <div class="input-group" style="margin: 20px;">
<a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifact'];?></a>
    </div>
  </div>
</div>
</div>
</div>
<br>
   
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;"><b>Updated to Case - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows['WBU'];?>
      </div>
   </div><br>
 <?php

}
?>

      </div>
 
      <br>
            <div class="modal fade" id="myModal" role="dialog" >
            <div class="modal-dialog">
           
              <!-- Modal content-->
              <div class="modal-content" style="height: 400px; width: 500px;">
                <div class="modal-header" >
                 
                  <h4 class="modal-title" style="float: left;">Live Conversation</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" data-dismiss="modal" >&times;</button>
                </div>
                <div class="modal-body">
                  <div class="conversations">
                   
                  </div>
                </div>

                <div class="footer" >
                  <div class="row">
                  <div class="col-md-10">
            <input type="text" id="query" name="" class="form-control" placeholder="Provide more info...">
          </div>
          <div class="col-md-2">
         <button type="button" onclick="messagesent()" name="button" class="btn btn-primary" title="send message" value="Send Message" style="background-color:#2E9461;">
           <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
         </div>
</div>
                </div>
              </div>
          </div>
        </div>    
 
  </div>
<!--   <div class="container">
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
 -->

 </div>
</div>
</div>  
</div>
</div>
</div>
</div>


        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
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
         
      <script src="./assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                            <script src="./assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
                        <!--end::Page Vendors -->
         
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo3/pages/crud/datatables/extensions/buttons.js" type="text/javascript"></script>
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>

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

<script>
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<!-- <script type="text/javascript">
  function messagesent(){
  setInterval(()=>{
    var tip = $("input").val();
    if(tip){
      clickt()
    }
  },1000)
</script> -->