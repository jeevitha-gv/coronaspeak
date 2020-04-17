<?php
       include "../php/common/config.php";
     $tipno = $_GET['id'];
    $query = "SELECT * FROM info WHERE ran='$tipno'";
    $result = mysqli_query($link,$query);
     $query1 = "SELECT * FROM info WHERE ran='$tipno'";
    $result1 = mysqli_query($link,$query1);
?>


<!DOCTYPE html> 
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Report</title>
        <meta name="description" content="Buttons examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

 <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetipnogepicker/datetipnogepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-tipnogeslider/css/ion.tipnogeSlider.css" rel="stylesheet" type="text/css" />
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
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script>
           <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>  
 
   <link href="./assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
           
        <link rel="shortcut icon" href=" ./assets/media/company-logos/whistle.png" />
    </head>


  <?php
   include 'siteHeader2.php';
?>
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: #efefef;">

       
    <!-- begin:: Page -->


<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper"  style="margin-top:-12%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<i class="fa fa-file-archive" id="cmd1" data-toggle="tooltip" title="zip" style="font-size: 30px; float: right; color:#d6175d;margin-left: 5px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-file-pdf" id="cmd" data-toggle="tooltip" title="PDF" style="font-size: 30px; float: right; color: #2a5aa8;"></i> <br><br>


<div class="kt-portlet" id="element-to-print">
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#2a5aa8;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-btipnod flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;font-size: 20px;">
Info-<?php echo $_GET['id'];?>
</h3>
</div>
</div>




        <div class="panel-body" >
            <form method="post">
<!--   <div class="container" style="margin-left: 300px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="tipno"  id="tipno" class="form-control" placeholder="Enter the Idea/Tip Number">
       
      </div>
      <div class="col-md-2">
    <input type="submit" id="search" name="submit"   style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" >
      </div>
    </div><br><hr>
</div>
 -->
</form>

  <?php
 if ($rows=mysqli_fetch_assoc($result)) {
  
  ?>

            <div id="people1" class="container">
          <div class="row form-group">
<div class="col-md-12">
<label><strong>Category:</strong></label><br>
 <input type="text" class="form-control" disabled value="<?php echo $rows['category'];?>">
</div><br>

</div>
</div>  

<div id="people1" class="container">
<br>
<div class="row">
  <div class="input-group">
   <div class="col-md-4 input_val">
     <label>FullName:</label>
    <!--<input type="text" placeholder="Name" class="form-control" id="persons" style="border-color: #216582;" >-->
 <input type="text" class="form-control" disabled value="<?php echo $rows['name'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Email:</label>
     <!--<input type="text" placeholder="Designation" class="form-control" style="border-color: #216582;">-->
 <input type="text" class="form-control" disabled value="<?php echo $rows['email'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>PhoneNo:</label>
    <!-- <input type="text" placeholder="Department" class="form-control" style="border-color: #216582;">-->
 <input type="text" class="form-control" disabled value="<?php echo $rows['phone'];?>">
   </div>
 
<!-- <div class="input-group after-add-more col-md-1">
           <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
       </div> -->

       </div>
   </div>
</div><br>
<div class="container control-group">
  
</div>
<br>
<div class="container">
<div class="form-group">
  <label style="font-size: 14px;"><b>Description</b></label>
      <div class="">
<!--    <textarea type="text" class="form-control"  id="Synopsis" value="<?php echo $rows['Description'];?>" placeholder="" disabled  style="height: 150px; border-color:#A1E6EA"> </textarea> -->
<input type="text" name="" class="form-control" disabled  value="<?php echo $rows['Description'] ;?>">
   <span id="apdate" style="color: red;"></span>
</div>
   </div>
 </div>
<div class="container">
<div class="form-group">
  <label style="font-size: 14px;"><b>Synopsis</b></label>
      <div class="">
   <textarea type="text" class="form-control" placeholder="" disabled style="height: 150px; border-color:#A1E6EA"><?php echo $rows['MUpdate'];?></textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

   <div class="form-group">
  <label style="font-size: 14px;"><b>Info Update</b></label>
      <div class="">
   <textarea type="text" class="form-control" disabled placeholder="Give WhistleBlower on update"  style="height: 150px; border-color:#A1E6EA"><?php echo $rows['WBUpdate'];?> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

   <div class="form-group">
  <label style="font-size: 14px;  background-color: coral;"><b>Artifacts</b></label>
      <div class="">
   <textarea type="text" class="form-control" style="height: 150px; border-color:#A1E6EA"><?php echo $rows['artifacts'];?> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

</div>
<?php
}
?>
          </div> 
           <?php
   $count=1;
   while($rows1=mysqli_fetch_assoc($result1)){
    ?>
    <div class="container">
   <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Management Synopsis - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
       <?php echo $rows1['MUpdate'];?>
      </div>
   </div><br>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Updated to Info - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows1['WBUpdate'];?>
      </div>
   </div>
 </div><br>
 <?php 
 $count++;
} 
?> 


  <div class="container">
  <div class="row">
    <div class="col-md-11">
  <button type="button" data-toggle="collapse" data-target="#demo1" class="btn btn-success">Interaction</button>

  <div id="demo1" class="collapse"><br>
   <h5>Chat History </h5>
  <div style="min-height: 200px; width: 1119px; max-height: 100px; overflow: auto;border:1px solid #C3C8C6;">
          <div class="conversations"></div>
     
      </div>
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

<script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.id);
 document.getElementById("tipno").value=obj.id;
</script>
<?php
include 'sidemenu.php';
 ?>

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"btipnod":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<!-- <script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script> -->
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
<script src="./assets/vendors/general/bootstrap-datetipnogepicker/datetipnogepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-tipnogeslider/js/ion.tipnogeSlider.js" type="text/javascript"></script>
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
<script type="text/javascript" src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>
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
</script>

<script type="text/javascript">
  $('#cmd').click(function() {
    var element = document.getElementById('element-to-print');
      html2pdf(element, {
        margin:       0,
        filename:     'Report.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
    });
  });

</script>
<script type="text/javascript">
  $('#cmd1').click(function() {
    var element = document.getElementById('element-to-print');
      html2pdf(element, {
        margin:       0,
        filename:     'Report.zip',
        image:        { type: 'jpeg', quality: 0.98 },
        // html2canvas:  { dpi: 192, letterRendering: true },
        // jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
    });
  });
const zlib = require('zlib');
const fs = require('fs');

</script>