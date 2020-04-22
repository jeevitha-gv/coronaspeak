
<!DOCTYPE html>
<html>
<head>
	<title> Side Menu</title>
	<base href="/coronaspeak/">
</head>
<body>

	<div class="kt-grid kt-grid--hor kt-grid--root" >
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
                        
					<div class="kt-aside__brand kt-grid__item" id="kt_aside_brand">
						<div class="kt-aside__brand-logo">
								<a href="case/dashboard.php">
								<img src=" ./assets/media/company-logos/whistle.png" alt="" width="100px" height="100px" />
							</a>
                                                                	
						</div>	
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">

						<div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
							
							<ul class="kt-menu__nav ">
								<?php 
							 if($_SESSION['email']=='clinic')
                                    {
                                    	?>
								<li class="kt-menu__item " aria-haspopup="true"><a href="case/clinicview.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Clinic Investigator</span></a>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="case/Report.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-drop"></i><span class="kt-menu__link-text" style="text-align: center;">Report</span></a></li>
							<?php } ?>
								<?php 
							 if($_SESSION['email']=='testing' )
                                    {
                                    	?>
							  	<li class="kt-menu__item " aria-haspopup="true"><a href="case/testingview.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Testing Center Investigator</span></a>
								</li>
							<?php } ?>
								<?php 
							 if($_SESSION['email']=='hospital')
                                    {
                                    	?>
									<li class="kt-menu__item " aria-haspopup="true"><a href="case/hospitalview.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Hospital Investigator</span></a>
								</li>
                           <?php } ?>
                           <?php 
                           	 if($_SESSION['email']=='CoronaSpeak@nixwhistle.com')
                           	 {
                           	 	?>
                           	 		<li class="kt-menu__item " aria-haspopup="true"><a href="case/clinicview.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Clinic Investigator</span></a>
								</li>
								 	<li class="kt-menu__item " aria-haspopup="true"><a href="case/testingview.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Testing Center Investigator</span></a>
								</li>
								<li class="kt-menu__item " aria-haspopup="true"><a href="case/hospitalview.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-graph"></i><span class="kt-menu__link-text" style="text-align: center;">Hospital Investigator</span></a>
								</li>
                          
                           	 <?php } ?>
								

								<!-- <li class="kt-menu__item " aria-haspopup="true"><a href="view/audit/auditPublished.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon2-analytics-2"></i><span class="kt-menu__link-text"> Reports</span></a></li> -->
						
						
							</ul> 
						
					
	                </div>

	</div>
</body>
</html>
		