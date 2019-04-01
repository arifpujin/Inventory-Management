<!DOCTYPE html>


<!--


	***** HAYO.. Mau Ngapain Buka Inpect Element? *****
   *********** JANGAN ISENG BUKA BUKA KODENYA ***********

//=========================================================//
//         //\\       ||====    ||      ||==========       //
//        //  \\      ||  //    ||      ||                 //
//       //    \\     || //     ||      ||========         //
//      //======\\    || \\     ||      ||                 //
//     //        \\   ||  \\    ||      ||                 //
//    //          \\  ||   \\   ||      ||                 //
//                                                         //
//        Created By Arif Puji Nugroho (Indonesia)         //
//     Website    : https://arifpujin.com/                 //
//     GitHub     : https://Github.com/arifpujin           //
//     Facebook   : https://facebook.com/arifpn            //
//     Instagram  : https://instagram.com/reallifeapn      //
//     Whatsapp   : +6285885994505                         //
//     Email      : arifpujinugroho@gmail.com              //
//=========================================================//

//    *****Inventory Management System for LAB TV FT UNY 2019**********
//        *****Proyek Akhir Skripsi || Proyek Mandiri UNY**********
//             ***** 5 Maret 2019 - Thesis Finish **********





-->














<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
        <title>Comming soon || UNYtechTV</title>
        
        <!-- Favicon -->
        <link rel="icon" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-32x32.png" sizes="32x32" />
        <link rel="icon" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-180x180.png" />
        <meta name="msapplication-TileImage" content="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-270x270.png" />
        <link rel="stylesheet" href="assets/comming-soon/css/style-minimal-flat.css" />
		<script src="assets/comming-soon/js/modernizr.custom.js"></script>

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
	
	</head>

    <body>

    	<!-- Loading overlay -->
		<div id="loading" class="dark-back">
			<div class="loading-bar"></div>
			<span class="loading-text opacity-0">Please Wait</span>
		</div>

		<!-- Canvas for particles animation -->
		<div id="particles-js"></div>

    	<!-- Informations bar on top of the screen -->
    	<div class="info-bar bar-intro opacity-0">

    		<div class="row">

    			<div class="col-xs-12 col-sm-6 col-lg-6 info-bar-left">

    				<p>Grand Opening in <span id="countdown"></span></p>

    			</div>

    			<div class="col-xs-12 col-sm-6 col-lg-6 info-bar-right">

    				<!-- Text or Icons, as you want :-) / Uncomment the part you need and comment or delete the other one -->

    				<!-- <p class="social-text">
    					<a href="#" target="_blank">TWITTER</a> / 
    					<a href="#" target="_blank">FACEBOOK</a> / 
    					<a href="#" target="_blank">YOUTUBE</a>
    				</p> -->

    				<p class="social-icon">
    					<a href="https://youtube.com/unytechtv" target="_blank"><i class="fa fa-youtube"></i></a>
    					<a href="https://instagram.com/unytech.tv" target="_blank"><i class="fa fa-instagram"></i></a>
    				</p>

    			</div>
    		</div>
    	</div>
    	<!-- END - Informations bar on top of the screen -->

        <!-- Slider Wrapper -->
        <div id="slider" class="sl-slider-wrapper">

			<div class="sl-slider">
			
				<!-- SLIDE 1 / Home -->
				<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					
					<div class="sl-slide-inner">

						<div class="content-slide">

							<div class="container">

								<img src="assets/images/logo UNYtechTV.png" alt="logo UNYtechTV" style="hight:90%;" class="brand-logo text-intro opacity-0" />
							
								<h1 class="text-intro opacity-0">Comming Soon</h1>
							
								<p class="text-intro opacity-0">Please Pray !!! Product Launch by Arif Puji Nugroho.
                                <br>Inventory Management System For His Thesis.
								</p>

							
                                <a data-dialog="somedialog" href="https://unytechtv.com" class="action-btn trigger text-intro opacity-0">Click Me !</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END - SLIDE 1 / Home -->$

			</div>
			<!-- END - sl-slider -->

			

		</div>
		<!-- END - Slider Wrapper -->

        <!-- Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>
					
			<!-- dialog__content -->
			<div class="dialog__content">

				<div class="header-picture"></div>
						
				<!-- dialog-inner -->
				<div class="dialog-inner">
							
					<h4>Notify Popup Highlight</h4>
							
					<p>Just write the pefect description for your launch product here.... <strong>Codedthemes Product launch in next XX weeks. Enjoy !!!</strong></p>

					<!-- Newsletter Form -->
					<div id="subscribe">

		                <form action="php/notify-me.php" id="notifyMe" method="POST">

		                    <div class="form-group">

		                        <div class="controls">
		                            
		                        	<!-- Field  -->
		                        	<input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" class="form-control email srequiredField" />

		                        	<!-- Spinner top left during the submission -->
		                        	<i class="fa fa-spinner opacity-0"></i>

		                            <!-- Button -->
		                            <button class="btn btn-lg submit">Submit</button>

		                            <div class="clear"></div>

		                        </div>

		                    </div>

		                </form>

						<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
						<div class="block-message">

							<div class="message">

								<p class="notify-valid"></p>

							</div>

						</div>
						<!-- END - Answer for the newsletter form is displayed in the next div, do not remove it. -->

        			</div>
        			<!-- END - Newsletter Form -->
				</div>
				<!-- END - dialog-inner -->

				<!-- Cross for closing the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close><i class="icon ion-android-close"></i></button>

			</div>
			<!-- END - dialog__content -->
						
		</div>
		<!-- END - Newsletter Popup -->

		<!-- //////////////////////\\\\\\\\\\\\\\\\\\\\\\ -->
	    <!-- ********** List of jQuery Plugins ********** -->
	    <!-- \\\\\\\\\\\\\\\\\\\\\\////////////////////// -->
		
		<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
		<script src="assets/comming-soon/js/jquery.min.js"></script>
		<script src="assets/comming-soon/js/jquery.easings.min.js"></script>
		<script src="assets/comming-soon/js/bootstrap.min.js"></script>

		<!-- SlitSlider plugin -->
		<script src="assets/comming-soon/js/jquery.ba-cond.min.js"></script>
		<script src="assets/comming-soon/js/jquery.slitslider.js"></script>

		<!-- Newsletter plugin -->
		<script src="assets/comming-soon/js/notifyMe.js"></script>

		<!-- Popup Newsletter Form -->
		<script src="assets/comming-soon/js/classie.js"></script>
		<script src="assets/comming-soon/js/dialogFx.js"></script>

		<!-- Particles effect plugin on the right -->
		<script src="assets/comming-soon/js/particles.js"></script>

		<!-- Custom Scrollbar plugin -->
		<script src="assets/comming-soon/js/jquery.mCustomScrollbar.js"></script>

		<!-- Countdown plugin -->
		<script src="assets/comming-soon/js/jquery.countdown.js"></script>

		<script>
		$("#countdown")
			// Year/Month/Day Hour:Minute:Second
			.countdown("2019/05/01 00:00:00", function(event) {
				$(this).html(
					event.strftime('%D Days %Hh %Mm %Ss')
				);
		});
		</script>

		<!-- Main application scripts -->
		<script src="assets/comming-soon/js/main-flat.js"></script>

	</body>

</html>