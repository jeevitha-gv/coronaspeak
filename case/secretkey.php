<?php
include "../php/common/config.php";
?>

 <!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>NixWhistle | Tip Number</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
 <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
 <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="coronaspeak/LG3.png" />
         <link rel="shortcut icon" href="./assets/media/company-logos/whistle.png" />
    </head>
<script type="text/javascript">
  function closeWin()
  {
    window.close();
  }
</script>
  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-image: url(./assets/media/bg/bg-7.jpg);"> <br><br>
    <div class="container">
    <div class="row">

    <button type="button" class="btn btn-danger" onclick="closeWin()" style="margin-left: 1200px;">Close</button>
  </div>
</div>
<?php

$sql = "SELECT secretkey,ran from blower order by id DESC limit 1";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_array($result))
{

?>

         
            <div class="" style="width: 50%; margin-left: 500px; margin-top: 60px;">
<!--                 <div class="" style="text-align: center;font-size: 20px;"><strong>WhistleBlower - Remember this is for future use</strong></div> -->
              <div class="modal-body">
               <div class="form-group">
                <label style="font-size: 20px;"><b>Tip Number</b></label><br>
                <span class="no" id="quantity" maxlength="14" style="border-color: #30B7B7; color: #ffffff;font-size: 36px;"><?php echo substr($row['ran'], 0, 4) . "  " . substr($row['ran'], 4, 4) . "  " . substr($row['ran'],8,4) . "  " . substr($row['ran'], 12, 4);?></span>
                <input type="text" id="copy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['ran']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="cpybtn" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
            </div>

              
 <div class="form-group">
              <label style="font-size: 20px;"><b>Secret code</b></label><br>
              <span id="quantity" class="no" maxlength="14" style="border-color: #30B7B7; color: #ffffff; font-size: 36px;"><?php echo substr($row['secretkey'], 0, 4) . "  " . substr($row['secretkey'], 4, 4) . "  " . substr($row['secretkey'],8,4) . "  " . substr($row['secretkey'], 12, 4);?></span>
              <input type="text" id="secCopy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['secretkey']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button id="cpySec" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
             </div>
              </div>

              <br>
              <input type="text" id="together" style="position: absolute; left: -1000px; top: -1000px;" value="Tip Number: <?php echo $row['ran']; ?>       Secret Code: <?php echo $row['secretkey']; ?>">
              <button id="tog" style="background: transparent; border-radius: 50px; width: 100px; height: 50px; color: red; margin-left: 150px;" title="Copy together to Clipboard">Copy Together</button>


              </div>           
            </div>
   
            <div style="width: 50%; margin-left: 470px; margin-top: 60px;">
                <div class="form-group">
                  <label style="font-size: 16px;"><span style="color: #B1BABF; font-size: 34px;">Remember this for future use</span></label>
                </div>
              </div>


<?php
}
  }
?>
<script type="text/javascript">
  const myInp = document.getElementById("copy");
  const btnCopy = document.getElementById("cpybtn");

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

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            </body>
    <!-- end::Body -->
</html>

</body>
</html>