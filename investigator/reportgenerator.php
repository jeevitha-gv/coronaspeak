<?php
    include "../php/common/config.php";
    $ran=$_GET['id'];
  $query = "SELECT * FROM blower WHERE ran='$ran'";
  $result=mysqli_query($link,$query);
    $query1 = "SELECT * FROM blower WHERE ran='$ran'";
  $result1=mysqli_query($link,$query1);
?>

<!DOCTYPE html>   

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Investigator | Report</title>
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
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" >

       
    <!-- begin:: Page -->


<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper"  style="margin-top:-12%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <i class="fas fa-file-archive" id="mci" data-toggle="tooltip" title="ZIP" style="font-size: 30px; float: right; color: #9B807B;margin-left: 5px;"></i>
<i class="fa fa-file-pdf" id="cmd" data-toggle="tooltip" title="PDF" style="font-size: 30px; float: right; color: #2a5aa8;margin-left:7px;"></i><br><br>

<!-- <i class="fas fa-file-archive" id="mci" data-toggle="tooltip" title="ZIP" style="font-size: 30px; float: right; color: #9B807B"></i> <br><br> -->


<div class="kt-portlet" id="element-to-print">
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#2a5aa8;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-brand flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;font-size: 20px;">
Idea - <?php echo $_GET['id'];?>
</h3>
</div>

</div>


        <div class="panel-body" style="overflow-x:scroll; ">
           
          <div class="form-group" >
<!-- <div class="col-md-3">
<input type="hidden" name="search" id="search"  class="form-control" placeholder="Enter the Tip Number">

</div> -->
<!-- <div class="col-md-5">
        <input type="button" id="submit" onclick="clickt()" class="btn btn-primary" value="FollowUp">
      </div>
</div> -->
        <!--   <div class="table-responsive"> -->
            

 <?php
   while ($rows=mysqli_fetch_assoc($result)) {
     # code...
?>
            <div ><br><br>
            
           <div class="container">
            <div class="row form-group">
              <div class="col-sm-6 input_val">   
               <label><i class=" fa fa-podcast" style="color: red;"></i><strong>Category</strong></label>
              <span id="companyName" class="form-control"><?php echo $rows['category']; ?></span>
            </div>
            <div class="col-sm-6 input_val">   
                <label><strong>Business Unit</strong></label>
               <span id="nature" class="form-control"><?php echo $rows['company']; ?></span>
              </div>
             </div>
             <div class="panel-body" style="border: 1px solid #e2e5ec; border-color: #A1E6EA">
               <div class="row form-group" style="margin: 20px;">   
            <div class="col-md-6 input_val">    
            <label>Relationship</label>
                <span id="association" class="form-control"><?php echo $rows['relationship']; ?></span>
              </div>
              <div class="col-md-6 input_val">  
              <label>Encounter</label>
                <span id="howdoyouaware" class="form-control"><?php echo $rows['encounter']; ?></span>
             </div>                      
            </div>
            </div> 
          </div>
                
<br>
   
    <div class="container">
       <b>People Involved</b><br>
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div class="row form-group" style="margin:20px;">
<div class="col-md-4 input_val">
<label>Name</label>
<span id="personsInvolved" class="form-control"><?php echo $rows['namepi']; ?></span>
</div>
<div class="col-md-4 input_val">   
<label>Designation</label>
<span id="Designation" class="form-control"><?php echo $rows['designationpi']; ?></span>
</div>
<div class="col-md-4 input_val">                  
<label>Department</label>
<span id="Department" class="form-control"><?php echo $rows['departmentpi']; ?></span>
</div>
</div>
</div>
</div>
<br>

<div class="container">
  <b>Your Details</b><br>
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div class="row form-group" style="margin:20px;">
<div class="col-md-4 input_val">
<label>Full Name</label>
<span id="Full Name" class="form-control"><?php echo $rows['nameyd']; ?></span>
</div>
<div class="col-md-4 input_val">   
<label>Email</label>
<span id="Email" class="form-control"><?php echo $rows['emailyd']; ?></span>
</div>
<div class="col-md-4 input_val">                  
<label>Phone</label>
<span id="Phone" class="form-control"><?php echo $rows['phonenoyd']; ?></span>
</div>
</div>
</div>
</div>
<br>
<div class="container">
  <b>Reward</b><br>

<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div class="row form-group" style="margin:20px;">
<div class="col-md-4 input_val">
<label>Full Name</label>
<span id="Full Name" class="form-control"><?php echo $rows['nameyd']; ?></span>
</div>
<div class="col-md-4 input_val">   
<label>Email</label>
<span id="Email" class="form-control"><?php echo $rows['emailyd']; ?></span>
</div>
<div class="col-md-4 input_val">                  
<label>Phone</label>
<span id="Phone" placeholder ="Bank Account no"class="form-control"><?php echo $rows['phonenoyd']; ?></span>
</div>
</div>
</div>
</div><br>
<div class="container">
   <div class="row form-group">
<div class="col-md-12">
<label><b>Description</b></label>
<textarea id="nature" rows="7" class="form-control" disabled style="height: 150px; border-color:#A1E6EA"><?php echo $rows['incidentinfo']; ?></textarea>
</div>

    </div>
  </div>
  <div class="container">
   <div class="row form-group">
<div class="col-md-12">
<label style="  background-color: coral;"><b>Artifacts</b></label>
<div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifacts'];?></a>
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
   while($rows1=mysqli_fetch_assoc($result1)){
    ?>
    <div class="container">
   <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Management Synopsis - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
       <?php echo $rows1['WBUpdate'];?>
      </div>
   </div><br>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Updated to Blower - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows1['MUpdate'];?>
      </div>
   </div>
 </div>

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

             <!-- <div class="row form-group">      
             <div class="col-sm-6 input_val">   
                <label>Incident Information:</label>
               <span id="nature" class="form-control"></span>
              </div>
              <div class="col-sm-6 input_val">    
              <label>Category :</label>
                <span id="category" class="form-control"></span>
              </div> -->
            </div>
          
          <!--   
            
            <div class="row form-group">
            <div class="col-md-6 input_val"> 
            <label>Department:</label>
               <span id="DepartmentPR" class="form-control"></span>
             </div>
             <div class="col-md-6 input_val">                         
              <label>Place:</label>
               <span id="place" class="form-control"></span>
              </div>
            </div> -->
           <!--         <div class="row form-group">
             <div class="col-md-6 input_val"> 
             <label>Suspected Monetory loss:</label>
               <span id="SMLoss" class="form-control"></span>
              </div> 

             <div class="col-md-6 input_val">     
              <label>Whistle BlowerUpdate:</label>
               <span id="WBUpdate" class="form-control"></span>
              </div>
              
              
              </div> -->
          <!--   <b>Authority:</b><br><br>
            <div class=panel-body style="border:1px solid  #DFF1F1;height:120px;"> 
             <div class="row form-group">
            <div class="col-md-4 input_val"> 
            <label> Name:</label>
               <span id="NameAuth"class="form-control"></span>
            </div>
            <div class="col-md-4 input_val"> 
            <label> Email</label>
            <span id="EmailAuth" class="form-control"></span>
              </div>
           
            
              <div class="col-md-4 input_val">                       
              <label>Phone:</label>
              <span id="PhoneAuth" class="form-control"></span>
              </div>
               </div>
             </div><br><br> -->
   

              <!--  <div class="col-md-12 input_val">  
              Management Update:<br><br>
               <span id="MUpdate" class="form-control" style="height:180px;width:1062px;margin-left:-10px;"></span><br><br>
              </div> -->
             
            
           
              <!-- <td> <th style="font-size: 13px;" colspan="4">Management Update</th>
              <span id="MUpdate" class=""></span>
              </td> -->
         </div>   
          
          
          <br>
            
<!-- <div class="">
  <a data-toggle="collapse" data-target="#data" style="font-size: 16px;"><button style="border-radius: 25px; background-color: #86346C; color: #ffffff;">Conversation</button></a>

</div>

<div class="collapse" id="data">
<div class="row form-group">
<div class="col-md-12 input_val">
<span class="form-control conversations"></span>

</div>
</div>
</div>
<div class="col-2">
            <label aria-hidden="true" style="margin-left: 635%;color: white;">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
          <input type="file" style="display:none" /></label>
            </div> -->
    </div>


     
      </div>

<!-- end:: Content -->  </div>  

</div>
</div>
</div>
</div>

<?php
include '../blower/sidemenu2.php';
 ?>

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
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
                        <script type="text/javascript" src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>
            </body>
    <!-- end::Body -->
</html>
</script>
<script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.tip_no);
 document.getElementById("search").value=obj.tip_no;
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

<script type="text/javascript"src="jszip.js">
  $('#mci').click(function() {
    var element = document.getElementById('element-to-print');
     excelHtml5(element, {
        margin:       0, 
        filename:     'Report.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
    });
  });
</script>
