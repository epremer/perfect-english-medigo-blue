<?php
require('constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us | Perfect English China</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description"
		content="Perfect English Training School | College Prep Training | 'Above All Else - Quality Education'">
	<meta name="author" content="Elizabeth Premer & templatemo">
	<meta name="keywords"
		content="Perfect English Training School, Perfect English, College Prep, China, English as Second Language, Teach English, Teach in China, Live in China">


    <!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->
    
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../css/misc.css">
	<link rel="stylesheet" href="/css/blue-scheme.css">
	
	<!-- JavaScripts -->
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="../images/logos/PE_logo.JPG" type="image/x-icon" />


	<script src="component/jquery/jquery-3.2.1.min.js"></script>
	<script>
	$(document).ready(function (e){
		$("#frmContact").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			$('#loader-icon').show();
			$.ajax({
				url: "contact.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"phone":$('input[name="phone"]').val(),
				"content":$('textarea[name="content"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				$('#loader-icon').hide();
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					$('#send-message').hide();
					$("#mail-status").attr("class","success");							
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script>

	<!-- Pre-existing Contact styles -->
	<style>
	.label {margin: 2px 0;}
	.field {margin: 0 0 20px 0;}	
		.content {width: 960px;margin: 0 auto;}
		h1, h2 {font-family:"Georgia", Times, serif;font-weight: normal;}
		div#central {margin: 40px 0px 100px 0px;}
		@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
		@media all and (max-width: 767px) {
			body {margin: 0 auto;word-wrap:break-word}
			.content {width:auto;}
			div#central {	margin: 40px 20px 100px 20px;}
		}
		body {font-family: 'Helvetica',Arial,sans-serif;background:#ffffff;margin: 0 auto;-webkit-font-smoothing: antialiased;  font-size: initial;line-height: 1.7em;}	
		input, textarea {width:100%;padding: 15px;font-size:1em;border: 1px solid #A1A1A1;	}
		button {
			padding: 12px 60px;
			background: #5BC6FF;
			border: none;
			color: rgb(40, 40, 40);
			font-size:1em;
			font-family: "Georgia", Times, serif;
			cursor: pointer;	
		}
		#message {  padding: 0px 40px 0px 0px; }
		#mail-status {
			padding: 12px 20px;
			width: 100%;
			display:none; 
			font-size: 1em;
			font-family: "Georgia", Times, serif;
			color: rgb(40, 40, 40);
		}
	  .error{background-color: #F7902D;  margin-bottom: 40px;}
	  .success{background-color: #48e0a4; }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>	


	<!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Stylesheets - MedigoBlue -->
	<link rel="stylesheet" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="../css/misc.css">
	<link rel="stylesheet" href="../css/blue-scheme.css">

	<!-- JavaScripts MedigoBlue -->
	<script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="../images/logos/PE_logo.JPG" type="image/x-icon" />


	<!-- SITE HEADER -->
	<div class="responsive_menu">
		<ul class="main_menu">
			<li><a href="../index.html">Home</a></li>
			<li><a href="../teach-in-china/teach-in-china.html">Teach In China</a>
				<ul>
					<li><a href="../teach-in-china/why-teach-in-china.html">Why teach in China</a></li>
					<li><a href="../teach-in-china/the-process.html">The Process</a></li>
					<li><a href="../pdfs/check-list.pdf" target="_blank" rel="noopener noreferrer">Check-list</a></li>
				</ul>
			</li>
			<li><a href="../about/pe-history.html">About Us</a>
				<ul>
					<li><a href="../about/pe-history.html">PE History</a></li>
					<li><a href="../about/pe-history.html#our-philosphy">Our Philosophy</a></li>
					<li><a href="../about/pe-history.html#our-brand">Our Brand</a></li>
					<li><a href="../about/pe-history.html#our-books">Our Books</a></li>
					<li><a href="../about/milestones.html">PE Milestone Timeline</a></li>
					<li><a href="../about/locations.html">Branch Locations</a></li>
				</ul>
			</li>
			<li><a href="../our-teachers/our-teachers.html">Our Teachers</a>
				<ul>
					<li><a href="../our-teachers/our-teachers.html">Who they are</a></li>
					<li><a href="../our-teachers/why-they-teach.html">Why they teach for PE</a></li>
					<li><a href="../our-teachers/training.html">Training</a></li>
					<li><a href="../our-teachers/growth.html">Growth</a></li>
				</ul>
			</li>
			<li><a href="../our-students/our-students.html">Our Students</a>
				<ul>
					<li><a href="../our-students/small-kids.html">Pre-K Students 3-6yrs</a></li>
					<li><a href="../our-students/big-kids.html">K-6 Students 6-12yrs</a></li>
					<li><a href="../our-students/college-kids.html">Jr/Sr High Students 13-18yrs</a></li>
					<li><a href="../our-students/student-spotlight.html">Student Spotlight</a></li>
					<li><a href="../our-students/cpp.html">CPP Program</a></li>
				</ul>
			</li>
			<li><a href="../changchun/changchun.html">Changchun</a>
				<ul>
					<li><a href="../changchun/changchun.html">The City</a></li>
					<li><a href="../changchun/fun-facts.html">Fun Facts</a></li>
				</ul>
			</li>
			<li><a href="../php-contact-form-with-google-captcha-chris/index.php">Contact</a></li>
		</ul> <!-- /.main_menu -->
	</div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="/index.html">
							<img style="max-height:50px;" src="../images/logos/PE_logo_full.png" alt="Perfect English">
						</a>
					</div> <!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li><a href="../index.html">Home</a></li>
								<li><a href="../teach-in-china/teach-in-china.html">Teach In China</a>
									<ul>
										<li><a href="../teach-in-china/why-teach-in-china.html">Why teach in China</a>
										</li>
										<li><a href="../teach-in-china/the-process.html">The Process</a></li>
										<li><a href="../pdfs/check-list.pdf" target="_blank"
												rel="noopener noreferrer">Check-list</a></li>
									</ul>
								</li>
								<li><a href="../about/pe-history.html">About Us</a>
									<ul>
										<li><a href="../about/pe-history.html">PE History</a></li>
										<li><a href="../about/pe-history.html#our-philosphy">Our Philosophy</a></li>
										<li><a href="../about/pe-history.html#our-brand">Our Brand</a></li>
										<li><a href="../about/pe-history.html#our-books">Our Books</a></li>
										<li><a href="../about/milestones.html">PE Milestone Timeline</a></li>
										<li><a href="../about/locations.html">Branch Locations</a></li>
									</ul>
								</li>
								<li><a href="../our-teachers/our-teachers.html">Our Teachers</a>
									<ul>
										<li><a href="../our-teachers/our-teachers.html">Who they are</a></li>
										<li><a href="../our-teachers/why-they-teach.html">Why they teach for PE</a></li>
										<li><a href="../our-teachers/training.html">Training</a></li>
										<li><a href="../our-teachers/growth.html">Growth</a></li>
									</ul>
								</li>
								<li><a href="../our-students/our-students.html">Our Students</a>
									<ul>
										<li><a href="../our-students/small-kids.html">Pre-K Students 3-6yrs</a></li>
										<li><a href="../our-students/big-kids.html">K-6 Students 6-12yrs</a></li>
										<li><a href="../our-students/college-kids.html">Jr/Sr High Students 13-18yrs</a>
										</li>
										<li><a href="../our-students/student-spotlight.html">Student Spotlight</a></li>
										<li><a href="../our-students/cpp.html">CPP Program</a></li>
									</ul>
								</li>
								<li><a href="../changchun/changchun.html">Changchun</a>
									<ul>
										<li><a href="../changchun/changchun.html">The City</a></li>
										<li><a href="../changchun/fun-facts.html">Fun Facts</a></li>
									</ul>
								</li>
								<li><a href="../php-contact-form-with-google-captcha-chris/index.php">Contact</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
						<div class="responsive-navigation visible-sm visible-xs">
							<a href="#nogo" class="menu-toggle-btn">
								<i class="fa fa-bars"></i>
							</a>
						</div> <!-- /responsive_navigation -->
					</div> <!-- /.main-navigation -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	<!-- END - SITE HEADER -->

	

	<div class="first-widget parallax" id="contact">
		<div class="">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Contact</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Contact</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- -->
	</div> <!-- /.pageTitle -->

	<br><br>

	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<div class="">
							<h1>Get In Touch With Us</h1>
							<p>Get more infromation or send us your CV for employment</p>
							<p>If you are interested in coming to China to work as a teacher please contact us via email or if you are currently in China you can call the number listed below.  Please note the number listed is English ONLY.</p>
							<p>Please <a href="../teach-in-china/teach-in-china.html">check our website</a> for information on what you will need in order to work and teach in China.</p>
							<br>
							<p>Perfect English Training School
							<br>2400 Tongzhi Street (2nd floor Torch Bldg)
							<br>Changchun, Jilin Province, China 130021
							<br>186-151-431-77035 (English Only)</p>
							<br>
						</div>
						<div class="contact-wrapper">
							<h2>Contact Us</h2>
							<div id="message">
								<form id="frmContact" action="" method="POST" novalidate="novalidate">
									<div class="label">Name:</div>
									<div class="field">
										<input type="text" id="name" name="name" placeholder="enter your name here" title="Please enter your name" class="required" aria-required="true" required>
									</div>
									<div class="label">Email:</div>
									<div class="field">			
										<input type="text" id="email" name="email" placeholder="enter your email address here" title="Please enter your email address" class="required email" aria-required="true" required>
									</div>

									<div class="label">Comments:</div>
									<div class="field">			
										<textarea id="comment-content" name="content" placeholder="enter your comments here"></textarea>			
									</div>

									<div class="field">
										<input type="checkbox" id="more_info" name="more_info" value="more_info" style="width: 20px">
										Would you like more information?<br>
									</div>
									
									<div class="field">
										<input type="checkbox" id="become_teacher" name="become_teacher" value="become_teacher" style="width: 20px">
										Would you like to become a teacher?<br>
									</div>

									<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>			
									<div id="mail-status"></div>			
									<button type="Submit" id="send-message" style="clear:both;">Send Message</button>
								</form>
								<div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
								</div>		
							</div><!-- content -->
						</div><!-- central -->	
                                
                              
                            </form>
                          </div> <!-- /.widget-inner -->
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->
	</div> <!-- /.container -->	

	<br><br>
	
	<div class="static-info-project">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<p class="larger-text">Interested in teaching English in China? Go ahead and go through the <a href="../pdfs/check-list.pdf">Check-List</a> to make sure you're on track!</p>
					</div> <!-- /.col-md-8 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.static-info-project -->
		
	<!-- SITE FOOTER -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="../index.html">Home</a></li>
							<li><a href="../teach-in-china/teach-in-china.html">Teach In China</a></li>
							<li><a href="../about/pe-history.html">About Us</a></li>
							<li><a href="../our-teachers/our-teachers.html">Our Teachers</a></li>
							<li><a href="../our-students/our-students.html">Our Students</a></li>
							<li><a href="../changchun/changchun.html">Changchun</a></li>
							<li><a href="../php-contact-form-with-google-captcha-chris/index.php">Contact</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">Copyright &copy; 2019 Perfect English
						| Design: templatemo | Development: Lizz Premer</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->


	<!-- END - SITE FOOTER -->

	<!-- Scripts -->
	<script src="../js/min/plugins.min.js"></script>
	<script src="../js/min/medigo-custom.min.js"></script>
	<script>
        function initialize() {
          var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(13.758468, 100.567481)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>


</body>
</html>