<?php
  include "../php/common/config.php";
  $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST['submit']))
    {
         $category=$_POST['category2'];
            $Description=$_POST['Description'];
               $name=$_POST['name'];
                  $email=$_POST['email'];
                     $phone=$_POST['phone'];
                        $NPname=$_POST['NPname'];
                           $bname=$_POST['bname'];
                              $bankac=$_POST['bankac'];
                                 $AHN=$_POST['AHN'];
                                    $bankname=$_POST['bankname'];
                                    $BAN=$_POST['BAN'];
                              $BTC=$_POST['BTC'];
                   $ETC=$_POST['ETC'];
                   $passkey=$_POST['passkey'];
                   $tipno=$_POST['tipno'];
                   $status="NewIdea";
                   $Artifacts=$_FILES['Artifacts']['name'];
                                   
$sql="INSERT INTO Idea(category,Description,name,email,phone,NPname,bname,bankac,AHN,bankname,BAN,BTC,ETC,passkey,tipno,status,Artifacts)values('$category','$Description','$name','$email','$phone','$NPname','$bname','$bankac','$AHN','$bankname','$BAN','$BTC','$ETC','$passkey','$tipno','$status','$Artifacts')";

        if(mysqli_query($link,$sql))
        {  
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:seckret.php");
        }

  else
  {
   
  }

    }
?>


<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>NixWhistle | Idea</title>
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
 <link rel="shortcut icon" href="coronaspeak/LG3.png" />
         <link rel="shortcut icon" href="./assets/media/company-logos/whistle.png" />

    </head>
    <style type="text/css">
          .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid #1655ba 1px;
        padding: 3px 10px;
        width: 700px;
        font-size: 16px;
    }
     .wid{
      position: relative;
      height: 40px;
    }
    .image {
      position: absolute;
      right: 120px;
      bottom: 140px;
    }
    </style>
  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-image: url(./assets/media/bg/bg-7.jpg);"> <br><br>
    <div class="container">

 <h3 style="text-align: center;color: white;"> Want to transform 'Inc.' with your Idea?</h3>
</div><br><br>

  <form class="kt-form kt-form" method="post" enctype="multipart/form-data" target="_blank">

<div class="conatiner" style="margin-left: 200px;" >
          <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Category :</label>
             <div class="col-10">
         <input list="category1" id="box" name="category2" class="text-line" style="width: 80%;">
                     <datalist id="category1">
                       <option>Employee Engagement</option>
                       <option>Strategy</option>
                       <option>Open Innovation</option>
                       <option>Agile</option>
                       <option>Design</option>
                       <option>Continuous Improvement</option>
                       <option>Enterprise Transformation</option>
                     </datalist>    
    </div>
          </div>
                    <div class="form-group row" id="div1" name="Description" style="display: none;">
            <label for="example-text-input" class="col-2 col-form-label" style="color: white;">Description :</label>
             <div class="col-9">
         
           <textarea type="text" rows="8" class="form-control output" name="Description" id="Description"  placeholder="Type something here....." style="background:transparent;color: white; width: 884px;"></textarea> <span><button type="button" id="start" class="image" style="background-color: #720765;color:#720765;"><img src="mic.png" width="35px"; height="35px;"></button></span>
          </div>
          <div class="col-1">
            <label aria-hidden="true" style="margin-top: 114px;color: white;margin-left:-84px;">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
           <input type="file" name="Artifacts" hidden=""></label>
          </div>
        </div><br>
        <div id="div2" style="display: none;">
          <div class="form-group row">
            <label for="example-month-input" class="col-2 col-form-label" style="color: white;">Your details:</label>
            <div class="col-10">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
         <input type="radio" name="radio1" value="disclose" id="disclose" checked="checked">Keen to disclose
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;">
             <input type="radio" name="radio1" value="Anonymous" id="Anonymous">Keen to be Anonymous

             <span></span>
           </label>
            </div>  
          </div>
           <div id="details">
          <div class="form-group row" style="margin-left: 17%;">
         <div class="col-3.5">
          <!--  <label style="font-size: 13px;">Full Name:</label> -->
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control" style="background:transparent;color: white;">
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
       <!--  <label style="font-size: 13px;">Email:</label>
       -->  <input type="text" placeholder="Email" id="email" name="email" class="form-control"  style="background:transparent;color: white;">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
     <!--    <label style="font-size: 13px;">Phone no:</label> -->
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control"  style="background:transparent;color: white;">
      </div>

       <!--    <div class="control-group3 after-add-more3">
             <div class="input-group-btn">
<button class="btn add-more3"type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
             </div>
          </div> -->

    </div>
  </div>
</div>
<div style="display: none;" id="div3">
      <div class="form-group row">
            <label for="example-color-input" class="col-2 col-form-label" style="color: white;">In case of reward</label>
            <div class="col-10">
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: white;">
              <input type="radio" name="radio3" value="self">Self
              <span></span>
            </label>
        &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: white;"><input type="radio" name="radio3" value="donate">Donate
          <span></span>
        </label>
       </div>
            </div>
                       <div id="peoples" >
          <div class="form-group row" style="margin-left: 17%;">
         <div class="col-3.5">
          <!--  <label style="font-size: 13px;">Full Name:</label> -->
           <input type="text" id="NPname" name="NPname" placeholder="Non-Profit Name" class="form-control" style="background:transparent;color: white;">
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
       <!--  <label style="font-size: 13px;">Email:</label>
       -->  <input type="text" id="bname" name="bname" placeholder="Bank Name" class="form-control"  style="background:transparent;color: white;">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-3.5">
     <!--    <label style="font-size: 13px;">Phone no:</label> -->
        <input type="text" id="bankac" name="bankac" placeholder="Bank Account no." class="form-control" style="background:transparent;color: white;">
      </div>

       <!--    <div class="control-group3 after-add-more3">
             <div class="input-group-btn">
<button class="btn add-more3"type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
             </div>
          </div> -->

    </div>
  </div>

                     <input type="hidden" name="passkey" id="passkey">
 <input type="hidden" name="tipno" id="tipno">


                       <div id="donates" style="margin-left: 17.5%;">
                        <div class="form-group row">
                         <div class="col-3.5">
                                        <input type="text" id="AHN" name="AHN" placeholder="Account Holder Name" class="form-control" style="background:transparent;color: white;">
                                      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <div class="col-3.5">
                                     <input type="text" id="bankname" name="bankname" placeholder="Bank Name" class="form-control" style="background:transparent;color: white;">
                                  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <div class="col-3.5">
                                      <input type="text" id="BAN" name="BAN" placeholder="Bank Account No." class="form-control" style="background:transparent;color: white;">
                                  </div>
                                </div>
                               
                           
                                  <div class="form-group row">
                                       <div class="col-11">
                                   <center><strong style="margin-left: -120px;">OR</strong></center>
                                   </div>  
                                 </div>
                                  <div class="form-group row">
                                   
                               
                                   <div class="col-10">
                                        <input type="text" placeholder="BitCoin Address" id="BTC" name="BTC"  class="form-control" style="background:transparent;color: white; margin-left: -7px; "><br>
                                      <center><strong style="margin-left: -10px;">OR</strong></center><br>  
                                      </div><br><br>
                                       <i class="fa fa-bold" style="font-size:48px;color:red;margin-left: 30px;"></i>
                                      <div class="col-10">
                                        <input type="text" placeholder="Ethereum Address" id="ETC" name="ETC" class="form-control" style="background:transparent;color: white; margin-left: -8px;">
                                      </div>
                                  <i class='fab fa-ethereum' style='font-size:48px;color:red;margin-left: 30px;'></i>

                                         </div>
                             
                               
                        </div>
                      </div>

                 <div class="mb-2">
                  <br>
                    <input type="submit" name="submit" style="margin-left: 1135px; margin-top: 16px;" id="Submit" onclick="reload()" class="btn btn-primary"data-toggle="modal" value="Submit">
                </div><br><br><br><br><br>
</div>

</div>
    </form>
    <script type="text/javascript">
      function reload() {
        location.reload();
      }
    </script>
<script type="text/javascript">
  var payment = document.getElementById('AHN'),
  downpayment = document.getElementById('BTC'),
    full_payment = document.getElementById('ETC');

function enableToggle(current, other1 , other2) {
    other1.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
    other2.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
}

downpayment.onkeyup = function () {
    enableToggle(this, full_payment, payment);
}
full_payment.onkeyup = function () {
    enableToggle(this, downpayment, payment);
}
payment.onkeyup = function () {
    enableToggle(this, full_payment, downpayment);
}
</script>
<script type="text/javascript">
  $(document).ready(function() {
    if($('#box').on('change', function() {
      $('#div1').show();
     
     
    }));
       if($('#div1').on('click', function() {
      $('#div2').show();
     
     
    }));
         if($('#div2').on('click', function() {
      $('#div3').show();
     
     
    }));
               if($('#div4').on('change', function() {
      $('#div5').show();
     
     
    }));
   
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
 $("#Description").click(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey").value=result;
     
});


});

</script>
<script>
$(document).ready(function(){
  $("#details").show();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>

<script>
$(document).ready(function(){
   $("#peoples").hide();
   $("#donates").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="donate")
{
  $("#donates").hide();
$("#peoples").show();
}
if($(this).val()=="self")
{
  $("#peoples").hide();
$("#donates").show();
}

});
});
</script>
<script type="text/javascript">
  class SpeechRecognitionApi{
  constructor(options) {
    const SpeechToText = window.speechRecogniton || window.webkitSpeechRecognition;
    this.speechApi = new SpeechToText();
    this.output = options.output ? options.output: document.createElement("");
    this.speechApi.continuous = true;
    this.speechApi.interimResult = false;
    this.speechApi.onresult = (event) => {
      var resultIndex = event.resultIndex;
      var transcript = event.results[resultIndex][0].transcript;
      this.output.textContent += transcript;
      console.log(this.output)
    }
  }
  init() {
    this.speechApi.start();
  }
  stop() {
    this.speechApi.stop();
  }
}
window.onload = function() {
  var speech = new SpeechRecognitionApi({
    output: document.querySelector(".output")
  })
  document.querySelector("#start").addEventListener("click", () => {
    speech.init();
  })

  document.querySelector("#end").addEventListener("click", () =>{
    speech.stop();
  })
}
</script>
</body>
</html>
