<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>
    <?php
include "database.php";

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form data is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the keys exist in the $_POST array
    $destination = isset($_POST['destination']) ? '%' . $_POST['destination'] . '%' : '';
    $boardOnPlace = isset($_POST['check_in']) ? '%' . $_POST['check_in'] . '%' : '';
    $date = isset($_POST['check_out']) ? $_POST['check_out'] : '';
    $children = isset($_POST['children']) ? $_POST['children'] : '';
    $adults = isset($_POST['adults']) ? $_POST['adults'] : '';
}
    ?>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">Phone no.:+91 9141985297</div>
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="https://in.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://twitter.com/login"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://in.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="signin.html">login</a></div>
							<div class="user_box_register user_box_link"><a href="signin.html">register</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">SPST Bus BOOKINGS</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.html">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.html">offers</a></li>
							
								<li class="main_nav_item"><a href="#">contact</a></li>
							</ul>
						</div>
						<!--<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>-->

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
			
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Payment</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">Payment and Enjoy the journey</div>
						<form action="https://api.web3forms.com/submit" method="POST" id="contact_form" class="contact_form text-center">
							<input type="hidden" name="access_key" value="8ce06aa2-7eaa-4dee-9b10-46afe403adb1">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Transaction ID" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Amount" required="required" data-error="Please, write us a message."></textarea>
							<center><img src="images/GooglePay_QR.png" alt="Payment Image" style="max-width: 20%;" /></center>
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Pay Here<span></span><span></span><span></span></button>
						</form>
                        <a href="./ticket.php">
                            <button>Go to Next Page</button>
                        </a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="images/man.png" alt="">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">SPST Bus BOOKING</a></div>
						</div>
						<p class="about_text">A great About Us page not only portrays your story, qualities and provides an insight on how your business started, but it also helps you sell. When visitors become familiar with your story and connect with it, they’re probably going to purchase from you. A well-planned About Us page can do this! Well, benefits of about us page are many. Various types of visitors check out your “About Us” page. They can be first-time visitors, regular visitors, people who wish to work with you, and possible customers. With all kinds of visitors coming to your website, you need to offer sufficient and valuable information to convince them to establish a more substantial connection with you and your business.</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							
							<li class="about_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

				<!--	<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
								<div class="contact_info_text">Canara Engineering College Bantwal-574211</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
								<div class="contact_info_text">+91 9141985297</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">spstbookings@gmail.com</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
								<div class="contact_info_text"><a href="https://colorlib.com">www.spstbookinds.com</a></div>
							</li>
						</ul>
					</div>-->

				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->
		
	<div class="travelix_map">
		<div id="google_map" class="google_map">
			<div class="map_container">
				<div id="map"></div>
			</div>
		</div>
	</div>

	<!--footer-->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">SPST Bus BOOKINGS</a></div>
							</div>
							<p class="footer_about_text">The beauty of a bus ride is that it brings together people from all walks of life. The bus is a great equalizer, everyone sits next to each other regardless of their status or background.</p>
							<ul class="footer_social_list">
								<li class="social_list_item"><a href="https://in.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://twitter.com/login"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="https://in.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								
								
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src=""></div>
								<div class="footer_blog_content">
									
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src=""></div>
								<div class="footer_blog_content">
									
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="" ></div>
								<div class="footer_blog_content">
									
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						
						<div class="footer_content footer_tags">
							
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Canara Engineering College Bantwal-574211</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">+91 9141985297</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://spstbiikings.com">www.spstbooking.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>