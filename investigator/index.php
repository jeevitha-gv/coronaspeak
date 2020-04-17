<?php
    include "../php/common/config.php";
      $ran = $_GET['id'];
    $query = "SELECT * FROM info WHERE ran='$ran'";
  $result=mysqli_query($link,$query);
  $query2= "SELECT * FROM info WHERE ran='$ran' order by id desc";
  $result2=mysqli_query($link,$query2);
    $query1 = "SELECT * FROM `info` WHERE ran='$ran'";
  $result1=mysqli_query($link,$query1);
   if(isset($_POST['submit']))
    {
      $ran=$_POST['ran'];
      $id=$_POST['id'];
      // print_r($id);
        $WBUpdate=$_POST['WBUpdate'];
        $MUpdate=$_POST['MUpdate'];
$status="Reported";
   $sql1="UPDATE info SET WBUpdate='$WBUpdate',MUpdate='$MUpdate',status='$status' WHERE id=$id";
         

        if(mysqli_query($link,$sql1))
        {

          header("Location:view.php");
        }
        else
        {
          header("Location:view.php");
        }
      }
   
    

?>
<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Investigator</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
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

 <!--  -->
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
</style>
</head>
<?php 
include 'siteHeader2.php';
?>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" >
<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" style="margin-top:-13%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item">
 

<div class="kt-portlet">
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#2a5aa8;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-brand flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;">

Case - <?php echo substr($_GET['id'], 0, 4) . "  " . substr($_GET['id'], 4, 4) . "  " . substr($_GET['id'],8,4) . "  " . substr($_GET['id'], 12, 4); ?>
</h3>
</div>        
</div>

<form method="post">
<!--   <div class="container" style="margin-left: 300px;" >
      <div class="row form-group">
      <div class="col-md-5">
     <input type="text" name="ran" id="ran" class="form-control"  placeholder="Enter the Idea/Tip Number">
       
      </div>
      <div class="col-md-2">
        <input type="submit" id="search" name="submit" style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" >
      </div>
    </div><br><hr>
</div> -->
</form>

<div>

<form method="POST">
  <br>
<div class="container">
     <label class="" style="font-size: 14px;"><strong></strong></label>
 
 <?php
   if ($rows=mysqli_fetch_assoc($result)) {
     # code...
?>
<div id="people1" class="">
<br>
<div class="row">

  <div class="input-group">

   <!-- <div class="col-md-4 input_val"> -->
     <!-- <label><strong>Full Name</strong></label> -->
    <!-- <input type="text" class="form-control" id="personsInvolved" value="<?php echo $rows['name'];?>" > -->

     <!-- <span id="personsInvolved" class="form-control"><?php echo $rows['namepi'];?></span> -->
   <!-- </div> -->

<input type="hidden" name="id" value="<?php echo $rows['id'];?>">
<input type="hidden" name="ran" value="<?php echo $rows['ran'];?>">
<input type="hidden" name="category" value="<?php echo $rows['category'];?>">
<input type="hidden" name="company" value="<?php echo $rows['company'];?>">
<input type="hidden" name="place" value="<?php echo $rows['place'];?>">
<input type="hidden" name="relationship" value="<?php echo $rows['relationship'];?>">
<input type="hidden" name="encounter" value="<?php echo $rows['encounter'];?>">
<input type="hidden" name="department" value="<?php echo $rows['department'];?>">
<input type="hidden" name="monetary" value="<?php echo $rows['monetaryvalue'];?>">


<input type="text" name="idinvestigator" id="idinvestigator" class="form-control" hidden>

       </div> 
   </div>
   <br>
    <div class="form-group row">
            <label for="example-month-input" class="col-2 col-form-label" style="font-size: 14px;"><strong>Genuine:</strong> </label>
            <div class="col-10">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
         <input type="radio" name="radio1" value="Anonymous" id="Anonymous" checked="checked">Yes
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black;">
             <input type="radio" name="radio1" value="disclose" id="disclose">No

             <span></span>
           </label>
            </div>  
          </div>
</div>
</div>
<br>


<br>
<div class="container">
<div class="form-group">
  <label style="font-size: 14px;"><strong>Management Synopsis:</strong></label> 
     	<div class="">
   <textarea type="text" class="form-control" name="MUpdate"  id="MUpdate" placeholder=""  style="height: 150px; border-color:#A1E6EA"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

   <div class="form-group">
  <label style="font-size: 14px;"><strong> Update to citizen:</strong></label> 
     	<div class="">
   <textarea type="text" class="form-control" name="WBUpdate" id="WBUpdate" placeholder="Give WhistleBlower on update"  style="height: 150px; border-color:#A1E6EA"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>
   <!-- <?php 
   if($rows2=mysqli_fetch_assoc($result2))
   {
   
   if($rows2['status']=='reinvestigate')
   {
    ?> -->
      <div class="form-group">
   
   
  <label style="font-size: 14px;"><strong> Reinvestigate:</strong></label> 
      <div class="">
   <textarea type="text" class="form-control"   style="height: 150px; border-color:#A1E6EA" disabled=""><?php echo $rows2['reinvestigate'];?> </textarea>
   <!-- <span class="form-control" style="height: 150px; border-color:#A1E6EA"><?php echo $rows['reinvestigate'];?></span> -->
</div>
<!-- <?php
}
}
?> -->
   </div>
</div>

<div class="container">
  <a data-toggle="collapse" data-target="#data" style="font-size: 16px;"><button class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff;">  History</button></a>

  <input type="submit" name="submit" class="btn btn-danger" style="float: right;" onclick="alert()">


</div>


</form>

<script type="text/javascript">
  function alert()
  {
    Swal.fire("Successfully Done..!")
  }
</script>
<div class="container collapse" id="data"><br>
<!-- <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;"> -->

<div class="row form-group">        

<div class="col-md-6">
<label><strong>Category</strong></label><br>
<span id="createdAt" class="form-control"><?php echo $rows['category'];?></span>
</div>
<div class="col-md-6">
<label><strong>Country</strong> </label><br>
<span id="Business Unit" class="form-control"><?php echo $rows['countries'];?></span>
</div>

    </div>	
   <!--<div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;">-->

<!--<div class="container hide" id="data" style="border:2px solid #C3C8C6; margin-left: -18px; height: 90px;">	-->

<!--</div>-->

  <!-- <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;">-->

  <!--   <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;"> -->


<b>Details:</b><br><br>
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div class="row form-group" style="margin:20px;">
<div class="col-md-4 input_val">
<label>Name</label>
<span id="personsInvolved" class="form-control"><?php echo $rows['name'];?></span>
</div>
<div class="col-md-4 input_val">   
<label>Email</label>
<span id="Designation" class="form-control"><?php echo $rows['email'];?></span>
</div>
<div class="col-md-4 input_val">                  
<label>Phone</label>
<span id="Department" class="form-control"><?php echo $rows['phone'];?></span>
</div>
</div>
</div><br>

<br>

    <div class="row form-group">

<div class="col-md-12">
<label><strong>Description</strong></label><br><br>
<textarea id="nature" rows="7" class="form-control" disabled><?php echo $rows['Description'];?></textarea>
</div>

    </div>
<div class="form-group">
  <label style="font-size: 14px;  background-color: coral;"><b>Artifacts</b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifacts'];?></a>
      </div>
   </div><br>

   <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
       <?php echo $rows['MUpdate'];?>
      </div>
   </div><br>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows['WBUpdate'];?>
      </div>
   </div><br>



</div>
<?php
}
?>

<br>
<div class="container">
<div class="row">
<!-- <div class="col-md-11">
  <button class="collapsible btn btn-success">Interaction</button>

  <div id="demo" class="collapse"><br>
    <h3>Chat History</h3>
  <div style="min-height: 200px; width: 1119px; max-height: 100px; overflow: auto;border:1px solid #C3C8C6;">
        <div class="conversations"></div>
      
      </div>
   </div>
</div> -->

<!-- <div class="col-md-1" style="float: right;">
  <button class="btn-warning collapsible"><i class="fa flaticon-attachment">Artifacts</i></button>
    <div id="demo1" class="collapse"><br>
    <h3></h3>

  <div style="min-height: 200px; width: 250px; max-height: 100px;border:1px solid #C3C8C6;margin-left: -200px;">
        <a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifacts'];?></a>
      </div>
     
   </div>
</div> -->

</div>

 <!--<div class="container hide" style="margin-top: 50px;margin-left: 80px;">
  <button data-toggle="collapse" data-target="#demo"><img src="histroy.png" style="height: 40px; width: 40px;"></button>

  <div id="demo" class="collapse">
  <div style="min-height: 300px; max-height: 300px; overflow: auto;border:1px solid #C3C8C6;width: 950px;"><h2>Histroy</h2>
        <div class="conversations"></div>
      
      </div>
   </div>

</div><br>


</div>-->
</div>
</div>

<div class="container">
                                  <!--Edit image png section-->

           <!-- <div class="">
       	<div class="">
           <a href=""><img src="edit.png"style="height: 35px;width: 35px; margin-left: 1210px; margin-top: -140px"></a> 
       </div></div>-->   

   



  <div class="form-group">

       <br>

  <!-- Button to Open the Modal -->
   <!-- The Modal -->

  <div class="modal" id="update">
   <div class="modal-dialog">
     <div class="modal-content">
     
   
       <!-- Modal body -->
       <div class="modal-body">
        <h3 class="modal-title">Succssfully Updated!</h3>
       </div>
     
     </div>
   </div>
 </div>


</div>

<br><br>
</div>

   <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Live Conversation</h4>
         <button type="button" class="close" data-dismiss="modal" ></button>
       </div>
       <div class="modal-body" style="min-height: 300px; max-height: 300px; overflow: auto;">
       	<div class="conversations"></div>
         
       </div>

       <div class="modal-footer" >
       	<div class="col-md-9">
<input type="text" id="query" name="" class="form-control" placeholder="Provide more info...">
</div>
<div class="col-md-3"><input type="button" onclick="messagesent()" name="" class="btn btn-primary" value="Send Message" style="background-color: #2E9461;"></div>
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
</div>


<br><br>

</body> 

</html>

<?php



?>



<?php 
include "../case/sidemenu2.php";
 ?>

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


<script>
$(document).ready(function(){
  $("#peoples").hide();

$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#peoples").hide();
$("#people").show();
}
if($(this).val()=="peo")
{
$("#peoples").show(); 
$("#people").hide();
}
});
});
</script>

<!-- <script>
$(document).ready(function(){
  $("#authknowsarea").hide();
$("input[type='text']").change(function(){
if($(this).val()=="NO")
{
$("#authknowarea").hide();
}
if($(this).val()=="YES")
{
$("#authknowsarea").show(); 
}
});
});
</script> -->


                                                  <!-- update part-->




<script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
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
         
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
     <script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.id);
 document.getElementById("ran").value=obj.id;
  document.getElementById("idinvestigator").value=obj.id;
</script>
