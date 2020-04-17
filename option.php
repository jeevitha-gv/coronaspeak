<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/coronaspeak/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>coronaspeak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="./assets/media/company-logos/virus.png" />

    </head>
   <style>
   
  .idea
  {
background-color:#;
  }
  .idea:hover{
    background-color:#07bbf7;
    transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -ms-transform: scale(1.05);
    -o-transform: scale(1.05);
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
  }

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .info{
    margin-left: -70px;
  }
  #info1{
    margin-left: -45px;
  }
}

footer {
  width: cover;
  height:40px;
  clear: both;
    background: #eae9e9;
  margin: 0 auto;
 
}

footer a {
   color:black;
   font-size:10pt;
   font-weight:700;
   font-family: "open sans", sans-serif;
   text-decoration: underline;
   padding-top:10px;
   padding-left:20px;
  float:left;

 }

footer p  {

   color:black;
   font-family: "open sans", sans-serif;
   margin-right:70px;
   float:right;
   margin-top:9px;
   font-size:10pt;
   font-weight:700;
   

}
#copy{
  position: absolute;
  margin-left: 600px;
  color: white;
  font-style: normal;
  margin-top: 10px;
  font-size: 20px;

}
.none {
  color: white;
  font-style: normal;
  font-size: 20px;
}

</style>
      <?php
      include "siteheader.php";
    ?>
      <body>
      <div class="grid-container">
        <div class="container">
           <h1 class="d-flex justify-content-center mb-3"><b>Is it a Case or Info?</b></h1><br><br>
          <div class="row">
            <div >
            <a href="case/caseplan.php">
           <img src="./assets/media/company-logos/case1.png" height="130" class="idea" style=" border-radius: 50%; border-width: 2px;   border-color: blue;   border-style: solid;"> <br> <label><h4 >Case</h4></label>
              </a> 
               
              </div> &nbsp;&nbsp;

                  <div>
               <a href="info/infoplan.php">
                <div >
           <img src="./assets/media/company-logos/info1.jpg" height="130"  class="idea info" style=" border-radius: 50%;  border-width: 2px;   border-color: blue;   border-style: solid;">   <br> <label style=""><h4 id="info1">Info</h4></label>    
            </a>
          </div>
          </div>
              </div>
              
        </div>
        
      </body>
      <?php 
      include "footer.php"; ?>

    <!-- end::Body -->
</html>