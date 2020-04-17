<?php
    include "../php/common/config.php";
    $query = "SELECT count(status) as count FROM `case` WHERE status='created' ORDER BY id DESC";
    $result = mysqli_query($link,$query);
      $sql = "SELECT count(status) as count FROM `case` WHERE status='Reported' ORDER BY id DESC";
    $result1 = mysqli_query($link,$sql);
     $sql2 = "SELECT count(status) as count FROM `case` WHERE status='closed' ORDER BY id DESC";
    $result2 = mysqli_query($link,$sql2);
     $sql3 = "SELECT count(status) as count FROM `case` WHERE status='Reported' ORDER BY id DESC";
    $result3 = mysqli_query($link,$sql3);
?>

<!DOCTYPE html>
<html>

  <head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Investigator | Dashboard</title>
    <base href="/coronaspeak/">
    <script src="https://code.highcharts.com/highcharts.js"></script> 
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/pie.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>      
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css" />    
    <script src="js/audit/auditManagement.js"></script> 
    <script src="js/audit/auditByCompliance.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/treemap.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
                    
   <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href=" ./assets/media/company-logos/whistle.png" />

  </head>

    <style>


    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 28px;
}

.topright:hover {color: red;}
    .highcharts-credits{
      visibility: hidden;
    }
    .jqstooltip { 
      position: absolute;
      left: 0px;
      top: 0px;
      visibility: hidden;
      background: rgb(0, 0, 0) transparent;
      background-color: rgba(0,0,0,0.6);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;
    }
     .jqsfield { 
        color: white;
        font: 10px arial, san serif;
        text-align: left;
      }
      .desc {
        padding-top: 25px;
      }
      #chartdiv1 {
        background-color: white;
       height: 350px;     
      }
      #chartdiv2 {
        height: 350px;
        background-color: white;
      }
      #chartdiv3{
        background-color: white;
        height: 620px;      
      }
       #chart_4 {
        height: 620px;
        background-color: white;
      }
      #chart_7
      {
        height: 620px;
        background-color: white; 
      }      
      #chartdiv1 a, #chartdiv2 a, #chartdiv3 a, #chart_4 a{
      position: absolute;
      text-decoration: none;
      color: rgb(0, 0, 0);
      font-family: Verdana;
      font-size: 11px;
      opacity: 0.7;
      display: none !important;
      left: 5px;
      top: 5px;    
    }
    
      </style>
      <?php 
        include 'siteHeader2.php';

      ?>
       <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: #E2E2DD;">
       <div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" style="margin-top: -150px;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<!--Begin::Dashboard 3-->
<!--Begin::Row-->

<div class="row">
  <div class="col-md-3">

    <a href="/coronaspeak/investigator/noOfPlan.php" style="color: #5D4E4F;">
    <label style="border: 1px #ffffff; background-image: linear-gradient(to right,#F5FCFF, #DBF3FA, #B7E9F7, #92DFF3, #7AD7F0); width: 100%; height: 120px; padding-left: 10%; padding-top: 6%;  ">
      <span class="kt-widget17__icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
                <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
            </g>
        </svg> </span>
        <br><br>
                     <?php
 if($rows=mysqli_fetch_assoc($result)) {
  ?> 
      <span class="kt-widget17__subtitle" style="font-weight: normal; font-size: 16px;">
          New Case
      </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="kt-widget17__subtitle" style="font-size: 20px;"><?php echo $rows['count'];?></span>
      <?php
    }
    ?>
    </label>
  </a>
  </div>
  <div class="col-md-3">
     <a href="/coronaspeak/investigator/noOfInvestigatedWhistle.php" style="color: #5D4E4F;">
    <label style="border: 1px #ffffff;background-image: linear-gradient(to right,#B08D57, #9C7A3C, #895E1A, #804A00); width: 100%; height: 120px; padding-left: 10%; padding-top: 6%;  ">
      <span class="kt-widget17__icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
            </g>
        </svg> </span>
        <br><br>
                             <?php
 if($rows=mysqli_fetch_assoc($result1)) {
  ?> 
      <span class="kt-widget17__subtitle" style="font-weight: normal; font-size: 16px;">
          Investigated Case
      </span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="kt-widget17__subtitle" style="font-size: 20px;"><?php echo $rows['count'];?></span>
      <?php
    }
    ?>
    </label>
  </a>
  </div>
  <div class="col-md-3">
    <a href="/coronaspeak/investigator/noOfReinvestigatedWhistle.php" style="color: #5D4E4F;">
    <label style="border: 1px #ffffff;background-image: linear-gradient(to right,#ED81EE, #DE6DF1, #C74EF4, #AF2EFA); width: 100%; height: 120px; padding-left: 10%; padding-top: 6%;  ">
      <span class="kt-widget17__icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" id="Combined-Shape" fill="#000000"></path>
            </g>
        </svg> </span>
        <br><br>
                                    <?php
 if($rows=mysqli_fetch_assoc($result2)) {
  ?>  
      <span class="kt-widget17__subtitle" style="font-weight: normal; font-size: 16px;">
          Reinvestigated Info
      </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="kt-widget17__subtitle" style="font-size: 20px;"><?php echo $rows['count'];?></span>
      <?php
    }
    ?>
    </label>

  </a>
  </div>
  <div class="col-md-3">
    <a href="/coronaspeak/investigator/noOfDueFollowup.php" style="color: #5D4E4F;">
    <label style="border: 1px #ffffff; background-color: #af8c9d;background-image: linear-gradient(315deg, #af8c9d 0%, #8cacac 74%); width: 100%; height: 120px; padding-left: 10%; padding-top: 6%;">
      <!-- background color -->
      <!-- background-color: #bdd4e7; background-image: linear-gradient(315deg, #bdd4e7 0%, #8693ab 74%); -->
     <span class="kt-widget17__icon">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000"></path>
            </g>
        </svg> </span>
        <br><br>
                                              <?php
 if($rows=mysqli_fetch_assoc($result3)) {
  ?>  
      <span class="kt-widget17__subtitle" style="font-weight: normal; font-size: 16px;">
          Due for Followup
      </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="kt-widget17__subtitle" style="font-size: 20px;"><?php echo $rows['count'];?></span>
      <?php
    }
    ?>
    </label>
  </a>
  </div>
</div>
<br>



<div class="row">
  <div class="col-md-6">

<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
<div class="kt-portlet__head kt-portlet__head--noborder">
<div class="kt-portlet__head-label">
  <h3 class="kt-portlet__head-title">
       Category
      </h3>
</div>
</div>
<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit" >
<div class="kt-widget4 kt-widget4--sticky">
<div class="kt-widget4__chart">
<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
  <div >
    <a href="investigator/view.php">
  <div id="container3"></div></a>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/cylinder.js"></script>
<!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script> -->

<!-- <div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div> -->

<!-- Data from www.netmarketshare.com. Select Browsers => Desktop share by version. Download as tsv. -->


<div class="kt-widget4__item">
    <script type="text/javascript">
      Highcharts.chart('container3', {
         chart: {
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: null,
        enabled: false
    },
    xAxis: {
      categories: ["Accountting & Other Financial Impropriety", "Bribery or Corruption", "Money Laundering", "Sanctions", "Theft/Fraud", "Health and Safety"],
    },
    plotOptions: {
        series: {
            depth: 25,
            colorByPoint: true
        }
    },
    series: [{
        data: [5, 4, 7, 10, 3, 1],
        name: 'Category',
        showInLegend: false
    }]
});
    </script>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">

<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
<div class="kt-portlet__head kt-portlet__head--noborder">
<div class="kt-portlet__head-label">
  <h3 class="kt-portlet__head-title">
       Encounter
      </h3>
</div>
</div>
<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit" >
<div class="kt-widget4 kt-widget4--sticky">
<div class="kt-widget4__chart">
<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
  <div >
    <a href="investigator/view.php">
  <div id="container4"></div></a>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div class="kt-widget4__item">

<script type="text/javascript">
  Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: null,
        enabled: false
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
            { name: 'It happened to me', y: 10.41 },
            { name: 'I Observed it', y: 11.84 },
            { name: 'Told to be by Co-Worker', y: 10.85 },
            { name: 'Told to me by someone outside the Company', y: 4.67 },
            { name: 'I heard it', y: 4.18 }
        ]
    }]
});
</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="row">

    <div class="col-md-6">
        <!--begin:: Widgets/Trends-->
<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
<div class="kt-portlet__head kt-portlet__head--noborder">
<div class="kt-portlet__head-label">
  <h3 class="kt-portlet__head-title">
       Business Unit
      </h3>
</div>
</div>
<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
<div class="kt-widget4 kt-widget4--sticky">
<div class="kt-widget4__chart">
<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
  <div>
  <div id="container"></div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>


<div class="kt-widget4__item">


<script type="text/javascript">
Highcharts.chart('container', {
  chart: {
    type: 'pie'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '{point.name}: {point.y:.1f}%'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
  },

  series: [
    {
      name: "Browsers",
      colorByPoint: true,
      data: [
        {
          name: "Pied-pier",
          y: 20,
          drilldown: "Fixnix"
        },
        {
          name: "Hooli",
          y: 19.33,
          drilldown: "Google"
        },
        
        {
          name: "Fixnix",
          y: 18.95,
          drilldown: "Facebook"
        },
        {
          name: "Others",
          y: 23.55,
          drilldown: "Apple"
        }
      ]
    }
  ],
  drilldown: {
    series: [
      {
        name: "Fixnix",
        id: "Fixnix",
        data: [
          [
            "Accountting & Other Financial Impropriety",
            10
          ],
          [
            "Bribery or Corruption",
            15
          ],
          [
            "Money Laundering",
            7
          ],
          [
            "Sanctions",
            4
          ],
          [
            "Theft/Fraud",
            6
          ],
          [
            "Health and Safety",
            14
          ]
        ]
      },
      {
        name: "Google",
        id: "Google",
        data: [
          [
            "Accountting & Other Financial Impropriety",
            18
          ],
          [
            "Bribery or Corruption",
            3
          ],
          [
            "Money Laundering",
            4
          ],
          [
            "Sanctions",
            17
          ],
          [
            "Theft/Fraud",
            2
          ],
          [
            "Health and Safety",
            1
          ]
        ]
      },
      {
        name: "Facebook",
        id: "Facebook",
        data: [
          [
            "Accountting & Other Financial Impropriety",
            3
          ],
          [
            "Bribery or Corruption",
            8
          ],
          [
            "Money Laundering",
            9
          ],
          [
            "Sanctions",
            14
          ],
          [
            "Theft/Fraud",
            6
          ],
          [
            "Health and Safety",
            4
          ]
        ]
      },
      {
        name: "Apple",
        id: "Apple",
       data: [
          [
            "Accountting & Other Financial Impropriety",
            5
          ],
          [
            "Bribery or Corruption",
            8
          ],
          [
            "Money Laundering",
            18
          ],
          [
            "Sanctions",
            7
          ],
          [
            "Theft/Fraud",
            5
          ],
          [
            "Health and Safety",
            6
          ]
        ]
      },
    ]
  }
});
</script>
</div>
</div>  
</div>
</div>
</div>
</div>
</div>

  <div class="col-md-6">
        <!--begin:: Widgets/Trends-->
<div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
<div class="kt-portlet__head kt-portlet__head--noborder">
<div class="kt-portlet__head-label">
  <h3 class="kt-portlet__head-title">
       Relationship
      </h3>
</div>
</div>
<div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit" >
<div class="kt-widget4 kt-widget4--sticky">
<div class="kt-widget4__chart">
<div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
  <div >
    <a href="investigator/view.php">
  <div id="container1"></div></a>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div class="kt-widget4__item">

<script type="text/javascript">
Highcharts.chart('container1', {
  chart: {
    type: 'pie'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '{point.name}: {point.y:.1f}%'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
  },

  series: [
    {
      name: "Browsers",
      colorByPoint: true,
      data: [
        {
          name: "Employee",
          y: 20,
          drilldown: "Fixnix"
        },
        {
          name: "Temporary Employee",
          y: 19.33,
          drilldown: "Google"
        },
        
        {
          name: "Contractor",
          y: 18.95,
          drilldown: "Facebook"
        },
        {
          name: "Consultant",
          y: 23.55,
          drilldown: "Apple"
        },
        {
          name: "Former Employee",
          y: 23.55,
          drilldown: "Samsung"
        }
      ]
    }
  ],
});
    </script>
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
</div>
</div>
</body>
</html>
<?php 
include "../case/sidemenu2.php";
 ?>
      </body>
    
</html>
