<?php
include "../php/common/config.php";
    $ran = $_POST['ran'];
    $query = "SELECT * FROM blower WHERE ran='$ran'";
    $result = mysqli_query($link, $query);
  if(isset($_POST['submit']))
  {
    $liv=$_POST['liv'];
    $sql="INSERT INTO livechat(liv) values('$liv')";
    if(mysqli_query($link,$sql))
    {
       echo "inserted";
    }
    else
    {
       echo "error".$sql."<br>".$link->error;
    }

  }

?>

<!DOCTYPE html>  
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title> View Whistle - coronaspeak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jliv/3.4.1/jliv.min.js"></script>
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
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jliv.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
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
    <!-- <script type="text/javascript" src="assets/jliv-ui-1.11.4/jliv-ui.js"></script>  -->
     
    <!-- <script type="text/javascript" src="assets/DataTables/DataTables-1.10.12/js/jliv.dataTables.min.js"></script> -->
   <!--      <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script>
           <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>   -->
 
   <link href="./assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
           
        <link rel="shortcut icon" href="./assets/media/logos/fixnix.png" />
    </head>
 <style type="text/css">
   label {
    color: #ffffff;
   }
 </style>
  <?php
   include 'siteHeader2.php';
?>
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-image: url(./assets/media/bg/bg-7.jpg);">

       
    <!-- begin:: Page -->


<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper"  style="margin-top:-13%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<!--begin: Datatable -->


<form method="post">
  <div class="container" style="margin-left: 300px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="ran" id="ran" class="form-control" placeholder="Enter the Idea/Tip Number" tyle="background: transparent;color: white;">
       
      </div>
      <div class="col-md-2">
        <input type="submit" id="search" name="search"  style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" style="">
      </div>
    </div><br><hr>
</div>
</form>

         <?php
   while($rows=mysqli_fetch_assoc($result)) {
     # code...
  ?>

  <div class="container" id="data" style="border:0px solid #C3C8C6;"  ><br>

          <div class="row form-group">
             <label  class="col-md-10">Investigator Update:</label>
                <div class="col-md-12 " >
              <textarea type="text" id="WBUpdate" rows="5" class="form-control" placeholder="Give WhistleBlower on update"  style="background: transparent; color: #ffffff;"disabled=""><?php echo $rows['WBUpdate'];?></textarea>
            </div>
          </div>
      <div class="row form-group">        
        <div class="col-md-6">  
   
    <label >Tip No</label><br>
<input type="text" id="tipno" name="id" disabled class="form-control"value="<?php echo $rows['ran']; ?>" style="background: transparent; color: #ffffff;"> 


        </div>
        <div class="col-md-6">
          <label>Created Date</label><br>
 <input type="text" id="createdAt" name="createdAt" class="form-control"value="<?php echo $rows['createat']; ?>"disabled style="background: transparent; color: #ffffff;">  
        </div>
         </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label >Name of the Company </label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" id="company" name="company" class="form-control"value="<?php echo $rows['company']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>
        <div class="col-md-6">
          <label >Category</label><br>
           <input type="text" id="category" name="category" class="form-control"value="<?php echo $rows['category']; ?>" disabled style="background: transparent; color: #ffffff;"> 
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

    <div class="row form-group">
      <div class="col-md-6">
          <label >Relationship</label><br>
         <!--  <span id="association" class="form-control"  style="background: transparent; color: #ffffff;" ></span> -->
            <input type="text" id="relationship" name="relationship" class="form-control"value="<?php echo $rows['relationship']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>
        <div class="col-md-6">
          <label >Encounter</label><br>
          <input type="text" id="encounter" name="encounter" class="form-control"value="<?php echo $rows['encounter']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>
    </div>
          <div class="row form-group">
        <div class="col-md-6">
          <label >Department</label><br>
           <input type="text" id="department" name="department" class="form-control"value="<?php echo $rows['department']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>
        <div class="col-md-6">
          <label >Place</label><br>
         <input type="text" id="place" name="place" class="form-control"value="<?php echo $rows['place']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>
           </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label >Authorities Know</label><br>
           <input type="text" id="authorityknows" name="authorityknows" class="form-control"value="<?php echo $rows['authorityknows']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>

        <div class="col-md-6">
          <label >Reward</label><br>
            <input type="text" id="place" name="place" class="form-control"value="<?php echo $rows['place']; ?>"disabled style="background: transparent; color: #ffffff;"> 
        </div>
    </div>

    <div class="row form-group" class="container hide" id="authknowsarea">
          <div class="col-md-6">
          <label>Authority's Name</label><br>
            <input type="text" id="nameauth" name="nameauth" class="form-control"value="<?php echo $rows['nameauth']; ?>"disabled style="background: transparent; color: #ffffff;"> 
           </div>
          <div class="col-md-6">
          <label >Authority's Email ID</label><br>
         <input type="text" id="emailauth" name="emailauth" class="form-control"value="<?php echo $rows['emailauth']; ?>"disabled style="background: transparent; color: #ffffff;"> 
           </div>
          

   </div>

   <div class="row form-group">
     <div class="col-md-6">
          <label >Authority's Phone No.</label><br>
          <!-- <span id="PhoneAuth" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
           <input type="text" id="phoneauth" name="phoneauth" class="form-control"value="<?php echo $rows['phoneauth']; ?>"disabled style="background: transparent; color: #ffffff;"> 
         </div>
   </div>
          <br>
             <div class="row form-group">
   
          <label class="col-md-10">Incident Informations</label>
          <div class="col-md-12">
                 <input type="text" id="incidentinfo" name="incidentinfo" class="form-control"value="<?php echo $rows['incidentinfo']; ?>"disabled style="background: transparent; color: #ffffff;"> 
         </div>
      </div>



<form method="POST">
    <div class="modal fade" id="myModal" role="dialog" >
            <div class="modal-dialog">
           
              <!-- Modal content-->
              <div class="modal-content" style="height: 400px; width: 500px;">
                <div class="modal-header" >
                  
                  <h4 class="modal-title" style="float: left;">Live Conversation's</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="button" data-dismiss="modal" >&times;</button>
                </div>
                <div class="modal-body">
                  <div class="conversations">
              <?php
              $qu="SELECT * FROM livechat order by id ASC";
              $res=mysqli_query($link,$qu);
   while($rows=mysqli_fetch_assoc($res)) {
     echo "<br>";
  echo $rows['liv'];

     }
  ?>
                     
                  </div>
                </div>

                <div class="footer" >
                  <div class="row">
                  <div class="col-md-10">
            <input type="text" id="liv" name="liv" class="form-control" placeholder="Provide more info...">
          </div>
          <div class="col-md-2">
            <input type="submit" name="submit" class="btn btn-primary" style="">
        <!--  <button type="button" onclick="messagesent()" name="button" class="btn btn-primary" title="send message" value="Send Message" style="background-color:#2E9461;">
           <i class="fa fa-paper-plane" aria-hidden="true"></i></button> -->
         </div>
</div>
                </div>
              </div>
          </div>
        </div>

</form>


             
               <div class="row">
                 <div class="col-md-11">
     <button class="collapsible" style="border-radius: 25px; background-color:green;"><b style="color: #ffffff;">Interaction</b></button>&nbsp;
    <div id="demo" class="collapse">
    <div style="overflow: auto;border:2px solid #C3C8C6;" rows="5"><h2></h2>
            <div class="conversations"></div>
        </div>
     </div>
         
        </div>
        <div class="col-md-1">
    <div class="img" >
            <a href="" style="text-decoration: underline;" data-toggle="modal" data-target="#myModal"><i class='fa fa-comments' style="font-size: 48px; color: red;" title="Review"></i></a>
          </div>
      </div>
    </div>
  </div>

  <?php
}
?>
 </div>
</div>
</div>  
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
<script src="./assets/vendors/general/jliv/dist/jliv.js" type="text/javascript"></script>
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
<script src="./assets/vendors/general/jliv-form/dist/jliv.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jliv.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jliv.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jliv.inputmask.bundle.js" type="text/javascript"></script>
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
<script src="./assets/vendors/general/jliv-validation/dist/jliv.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jliv-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jliv-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jliv-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jliv.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jliv.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jliv.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jliv.repeater/src/jliv.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jliv.repeater/src/repeater.js" type="text/javascript"></script>
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
