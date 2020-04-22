<?php
session_start();
    include "../php/common/config.php";
      $ran = $_GET['id'];
    $query = "SELECT * FROM `case` WHERE ran='$ran'";
  $result=mysqli_query($link,$query);
     $query1 = "SELECT * FROM `case` WHERE ran='$ran'";
  $result2 = mysqli_query($link,$query2);
   if(isset($_POST['submit']))
    {
     
     $id = $_POST['id'];
      $ran = $_POST['ran'];
     $Synopsis=$_POST['Synopsis'];
     $WBU=$_POST['WBU'];
      $status="Reported";
  $sql1="UPDATE `case` SET Synopsis='$Synopsis',WBU='$WBU',status='$status' WHERE id=$id";
       if(mysqli_query($link,$sql1))
       {
          header("Location:testingview.php");
         
        }
       else
       {
           header("Location:clinicview.php");
       }
    }
 
?>
<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title></title>
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
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#034EA2;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-brand flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;">
Case - <?php echo $_GET['id'];?>
</h3>
</div>        
</div>
<form action="" method="post">


<div class="container">
     <!-- <label class="" style="font-size: 14px;"><strong>People Involved:</strong></label> -->
 

<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group">
     <?php
   if ($rows=mysqli_fetch_assoc($result)) {
     # code...
?>
 
    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
    <input type="hidden" name="ran" value="<?php echo $rows['ran']; ?>">
    <input type="hidden" name="category" value="<?php echo $rows['category']; ?>">
    <input type="hidden" name="countries" value="<?php echo $rows['countries']; ?>">

    <input type="hidden" name="description" value="<?php echo $rows['Description']; ?>">


       </div>

   </div>
   <br>
   <br>
   <div class="form-group row">
            <label for="example-month-input" class="col-2 col-form-label" style="font-size: 15px;">Genuine: </label>
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

<div class="container">
<div class="form-group">
  <label style="font-size: 15px;">Management Synopsis :</label>
      <div class="">
   <textarea type="text" class="form-control" name="Synopsis" id="Synopsis" placeholder=""  style="height: 150px; border-color:#034EA2"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

   <div class="form-group">
  <label style="font-size: 15px;">Update to Citizen:</label>
      <div class="">
   <textarea type="text" class="form-control" name="WBU" id="WBU" placeholder="Give WhistleBlower on update"  style="height: 150px; border-color:#034EA2"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

</div>

<div class="container">
 
  <input type="submit" name="submit" class="btn btn-success" style="float: right;background-color: #afd135;border:1px solid #afd135;" onclick="alert();">

</div>
<div class="container">
<div class="row">

</div>

</div>
<div class="container">
  <a data-toggle="collapse" data-target="#data" style="font-size: 16px;"><button class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff;margin-top: -8%;">  History</button></a>
</div><br>
</form>

<script type="text/javascript">
  function alert(){
    Swal.fire("Successfully Done!");
  }


</script>
 
<div class="container collapse" id="data"><br>
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
          <label style="color: black;">17. Have you came in contact with anyone affected?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['weaknessbody']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">18. Have you visited any of the corona infected countries in last 21 days?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['visitedoutside']; ?>"disabled style=";background: transparent;">
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
      <div class="panel-body" style="border: 1px solid #e2e5ec; border-color: #034EA2; padding: 2%;">

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
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#034EA2">
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
  <label style="font-size: 14px;  background-color: #AFD135;"><b>Updated to Case - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows['WBU'];?>
      </div>
   </div><br>

 
       
     
<br>
   <?php }
    ?>
     

      </div>
 

</div>


 <br>

<br>
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

<script>

            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
     
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

         
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.id);
 document.getElementById("id").value=obj.id;
  document.getElementById("ideatip").value=obj.id;
</script>
