<?php
       include "../php/common/config.php";
     $ran = $_GET['id'];
    $query = "SELECT * FROM info WHERE ran='$ran'";
    $result = mysqli_query($link,$query);
     $query1 = "SELECT * FROM info WHERE ran='$ran'";
    $result1 = mysqli_query($link,$query1);
?>


<!DOCTYPE html>   
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Reviewer | Tip Report</title>
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
<script type="text/javascript" src="../../assets/DataTables/pdfmake.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="jszip.js"></script>
  <script type="text/javascript" 
    src="https://raw.github.com/Stuk/jszip/master/jszip.js"></script>
       <script type="text/javascript" src="/lib/zip.js"></script>
  <script type="text/javascript" src="swfobject.js"></script>
  <script type="text/javascript" src="downloadify.js"></script>

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
  <div class="row" style="float: right;">
   <i class="fa fa-file-pdf" id="cmd" data-toggle="tooltip" title="PDF" style="font-size: 30px; color: #2a5aa8;"></i> &nbsp;&nbsp;&nbsp;&nbsp;
   <i class="fas fa-file-archive"  id="cmd1" title="Zip"style="font-size: 30px;color:#d6175d"></i>
 </div><br><br>
<div class="kt-portlet" id="element-to-print">
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#2a5aa8;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-brand flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;font-size: 20px;">
Info - <?php echo substr($_GET['id'], 0, 4) . "  " . substr($_GET['id'], 4, 4) . "  " . substr($_GET['id'],8,4) . "  " . substr($_GET['id'], 12, 4); ?>
</h3>
</div>

</div>
<br><br><br>





        <div class="panel-body">
<div class="container">
  <form method="post">
<!--   <div class="container" style="margin-left: 300px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="ran"  id="ran" class="form-control" placeholder="Enter the Idea/Tip Number">
       
      </div>
      <div class="col-md-2">
    <input type="submit" id="search" name="submit"   style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" >
      </div>
    </div>
</div> -->

</form>


<?php
if ($rows=mysqli_fetch_assoc($result)) {
?>

<div class="row form-group">
<div class="col-md-6 input_val">
<label><strong>Category</strong></label>
<input type="text" class="form-control" disabled value="<?php echo $rows['category'] ;?>">
<!-- <span id="companyName" class="form-cont````````rol"></span>
 -->
</div>
<div class="col-md-6 input_val">             
<label ><strong>Country</strong></label>
<input type="text" class="form-control" disabled="" value="<?php echo $rows['countries'] ;?>">
</div>
</div>

<br>
                 

<br>

<b>Details</b><br><br>
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div class="row form-group" style="margin:20px;">
<div class="col-md-4 input_val">
<label>Name</label>
<input type="text" class="form-control" disabled="" value="<?php echo $rows['name'] ;?>">

</div>
<div class="col-md-4 input_val">   
<label>Email</label>
<input type="text" class="form-control" disabled="" value="<?php echo $rows['email'] ;?>">

</div>
<div class="col-md-4 input_val">                  
<label>Phone</label>
<input type="text" class="form-control" disabled="" value="<?php echo $rows['phone'] ;?>">

</div>
</div>
</div><br><br>
      

<div class="row form-group">
<div class="col-md-12 input_val">
<label style="  background-color: coral;"><strong>Artifacts</strong></label>
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifacts'];?></a>
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
   <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Management Synopsis - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
       <?php echo $rows1['MUpdate'];?>
      </div>
   </div><br>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Updated to Blower - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows1['WBUpdate'];?>
      </div>
   </div><br>
 <?php 
 $count++;
} 
?>
</div>


              <!-- <td> <th style="font-size: 13px;" colspan="4">Management Update</th>
     

              <span id="MUpdate" class=""></span>
              </td> -->
           
</div>


          <br>
      <!--   </div> -->
        </div>
      </div>

<!-- end:: Content -->  </div>  

</div>
</div>
</div>
</div>

<?php
include 'sidemenu.php';
 ?>

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->


    <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
      <script type="text/javascript" src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>       

<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
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
 console.log(obj.id);
 document.getElementById("ran").value=obj.id;
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
