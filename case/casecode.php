<?php
include "../php/common/config.php";
?>
<?php
 include '../php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
    $secretkey=$_POST['secretkey'];
      $sql="SELECT secretkey,ran FROM `case` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/coronaspeak/case/followup.php?ran=".$rows['ran']);
               }
             }
           
               else
               {
                 $sql="SELECT secretkey,ran FROM `info` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/coronaspeak/info/followup.php?ran=".$rows['ran']);
               }
             }
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
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

        <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />
    </head>
<script type="text/javascript">
  function closeWin()
  {
    Swal.fire({
      title:'Good job!',
  text:'Your Info has been created!',
  type:'success'
  }).then(function() {
      window.location="/coronaspeak/intro.php";
  });
  }
</script>
<?php
  include "../siteheader.php";
?>

  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: white;"> <br><br>


<?php

$sql = "SELECT `secretkey`,`ran`,`heat` from `case` order by id DESC limit 1";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_array($result))
{

?>
<!-- <div class="container">
  <button type="button" class="btn btn-succcess" style="background-color: #afd135;"  onclick="document.getElementById('view').style.display='block'">View</button>
<button type="button" class="btn btn-info" onclick="closeWin()" style="background-color: #034ea2;float: right;">Close</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<div id="view" class="modal">
 
  <form class="modal-content" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('view').style.display='none'" class="close" title="Close Modal">&times;</span>
     <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
    <!-- </div> -->

 <!--    <div class="container" style="line-height:350%;text-align: center;">
      <label for="email" style=" font-size: 1.2rem;"  ><i class="fa fa-user-nurse" style="background-color:#034ea2;font-size: 30px;border-radius: 50px;color: white;"><b>Infection Meter</b></i></label>
      <br>
      <?php if($row['heat']=="low")
      {
        ?>
         <button class="btn" style="color: white;background-color: #F9D304;border-radius: 150px;"><?php echo $row['heat'];?></button>&nbsp;&nbsp;<span style="font-size: 16px;color: black;">-Stay home;Worse- get hospital.</span>
<?php } ?>
      <?php if($row['heat']=="medium")
      {
        ?>
         <button class="btn" style="color: white;background-color: #F58711;border-radius: 150px;"><?php echo $row['heat'];?></button>&nbsp;&nbsp;<span style="font-size: 16px;color: black;">-consult doctor ; Self isolate in home.</span>
<?php } ?>
          <?php if($row['heat']=="high")
      {
        ?>
         <button class="btn" style="color: white;background-color: #FA2E00;border-radius: 150px;"><?php echo $row['heat'];?></button>&nbsp;&nbsp;<span style="font-size: 16px;color: black;">-consult doctor immediately, get covid19 test</span>
<?php } ?>
        

        </div>


  </form>
</div> -->
<div class="container" style="border:2px solid gray; box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;">

          <div class="container" >
         
            <div>
<!--                 <div class="" style="text-align: center;font-size: 20px;"><strong>WhistleBlower - Remember this is for future use</strong></div> -->
              <div class="modal-body" style="text-align: center;">
                  <label style="font-size: 20px;"><b>Infection Meter</b></label><br>
      <br>
      <?php if($row['heat']=="low")
      {
        ?>
         <button class="btn" style="color: white;background-color: #F9D304;border-radius: 150px;"><?php echo $row['heat'];?></button>&nbsp;&nbsp;<span style="font-size: 16px;color: black;">-Stay home;Worse- get hospital.</span>
<?php } ?>
      <?php if($row['heat']=="medium")
      {
        ?>
         <button class="btn" style="color: white;background-color: #F58711;border-radius: 150px;"><?php echo $row['heat'];?></button>&nbsp;&nbsp;<span style="font-size: 16px;color: black;">-consult doctor ; Self isolate in home.</span>
<?php } ?>
          <?php if($row['heat']=="high")
      {
        ?>
         <button class="btn" style="color: white;background-color: #FA2E00;border-radius: 150px;"><?php echo $row['heat'];?></button>&nbsp;&nbsp;<span style="font-size: 16px;color: black;">-consult doctor immediately, get covid19 test</span>
<?php } ?>
        
               <div class="form-group">
                <label style="font-size: 20px;"><b>Speak Number</b></label><br>
                <span class="no" id="quantity" maxlength="14" style="border-color: #30B7B7; color:black;font-size: 36px;"><?php echo substr($row['ran'], 0, 4) . "  " . substr($row['ran'], 4, 4) . "  " . substr($row['ran'],8,4) . "  " . substr($row['ran'], 12, 4);?></span>
                <!-- <span class="no" id="quantity" maxlength="14" style="border-color: #30B7B7; color: #ffffff;font-size: 36px;"><?php echo  $row['ran'];?></span> -->
                <input type="text" id="copy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['ran']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="cpybtn" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
            </div>


             
 <div class="form-group">
              <label style="font-size: 20px;"><b>Secret code</b></label><br>
              <span id="quantity" class="no" maxlength="14" style="border-color: #30B7B7; color: black; font-size: 36px;"><?php echo substr($row['secretkey'], 0, 4) . "  " . substr($row['secretkey'], 4, 4) . "  " . substr($row['secretkey'],8,4) . "  " . substr($row['secretkey'], 12, 4);?></span>
              <input type="text" id="secCopy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['secretkey']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button id="cpySec" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
             </div>

               <br>
              <input type="text" id="together" style="position: absolute; left: -1000px; top: -1000px;" value="Case Number: <?php echo $row['ran']; ?>       Secret Code: <?php echo $row['secretkey']; ?>">
              <button id="tog" style="background: transparent; border-radius: 50px; width: 100px; height: 50px; color: red; margin-left: 15%;" title="Copy together to Clipboard">Copy Together</button>

              </div>

             

           <!--    <div class="modal-footer">

                <button type="button" class="btn btn-success" onclick="window.location.href='idea/Ideain.php'">Close</button>
              </div> -->
            </div>
   
   <div>
                <div class="form-group" style="text-align: center;">
                  <label style="font-size: 16px;" ><span style="color: black; font-size: 34px;">Remember this for future use</span></label>
                </div>
              </div>
            </div>
            </div>
            <br>
            <br>



<?php
}
}
?>
<?php
include "../footer.php"; ?>
<script type="text/javascript">
  const myInp = document.getElementById("copy");
  const btnCopy = document.getElementById("cpybtn");
  myInp.type ='text';

  btnCopy.onclick= function() {
    myInp.select();

    document.execCommand("Copy");
  }

 

</script>
<script type="text/javascript">
  const myInp1 = document.getElementById("secCopy");
  const btnCopy1 = document.getElementById("cpySec");

  btnCopy1.onclick= function() {
    myInp1.select();

    document.execCommand("Copy");
  }

</script>
<script type="text/javascript">
  const myInp2 = document.getElementById("together");
  const btnCopy2 = document.getElementById("tog");

  btnCopy2.onclick= function() {
    myInp2.select();

    document.execCommand("Copy");
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
<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>

         
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            </body>
    <!-- end::Body -->
</html>

</body>
</html>