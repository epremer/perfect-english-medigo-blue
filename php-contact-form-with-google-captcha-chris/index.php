<?php
require('constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us | Perfect English China</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Perfect English Training School | College Prep Training | 'Above All Else - Quality Education'">
    <meta name="author" content="Elizabeth Premer & templatemo">
	<meta name="keywords" content="Perfect English Training School, Perfect English, College Prep, China, English as Second Language, Teach English, Teach in China, Live in China">
	
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
	<link rel="stylesheet" href="/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="/css/misc.css">
	<link rel="stylesheet" href="/css/blue-scheme.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="images/old_PE_logo.JPG" type="image/x-icon" />


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
</head>


<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Teach In China</a>
            	<ul>
            		<li><a href="why-we-do-it.html">Why we do it</a></li>
            		<li><a href="how-to-do-it.html">How to do it</a></li>
            		<li><a href="pdfs/check-list.pdf">Check-list</a></li>
            		<!-- <li><a href="teach-photos.html">Photos</a></li> -->
            	</ul>
			</li>
            <li><a href="about.html">About Us</a>
            	<ul>
            		<li><a href="our-branches.html">Our Branches</a></li>
            		<li><a href="our-philosophy.html">Our Philosophy</a></li>
					<li><a href="our-brand.html">Our Brand</a></li>
            		<li><a href="our-books.html">Our Books</a></li>
            		<li><a href="awards.html">Awards</a></li>
            	</ul>
			</li>
            <li><a href="our-teachers.html">Our Teachers</a>
            	<ul>
            		<li><a href="our-teachers.html">Who they are</a></li>
            		<li><a href="why-they-are-here.html">Why they are here</a></li>
					<li><a href="training.html">Training</a></li>
            		<li><a href="growth.html">Growth</a></li>
            	</ul>
			</li>
            <li><a href="our-students.html">Our Students</a>
            	<ul>
            		<li><a href="spotlight.html">Spotlight</a></li>
            		<li><a href="small-kids.html">Small kids</a></li>
					<li><a href="big-kids.html">Big kids</a></li>
            		<li><a href="college-kids.html">College kids</a></li>
            	</ul>
			</li>
            <li><a href="changchun.html">Changchun</a>
            	<ul>
					<li><a href="changchun.html">Overview of the City</a></li>
					<li><a href="tourism.html">Tourism</a></li>
            	</ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.html">
							<img style="max-height:50px;" src="images/old_PE_logo.JPG" alt="Perfect English">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
									<li><a href="index.html">Home</a></li>
									<li><a href="#services">Teach In China</a>
										<ul>
											<li><a href="why-we-do-it.html">Why we do it</a></li>
											<li><a href="how-to-do-it.html">How to do it</a></li>
											<li><a href="pdfs/check-list.pdf">Check-list</a></li>
											<!-- <li><a href="teach-photos.html">Photos</a></li> -->
										</ul>
									</li>
									<li><a href="about.html">About Us</a>
										<ul>
											<li><a href="our-branches.html">Our Branches</a></li>
											<li><a href="our-philosophy.html">Our Philosophy</a></li>
											<li><a href="our-brand.html">Our Brand</a></li>
											<li><a href="our-books.html">Our Books</a></li>
											<li><a href="awards.html">Awards</a></li>
										</ul>
									</li>
									<li><a href="our-teachers.html">Our Teachers</a>
										<ul>
											<li><a href="our-teachers.html">Who they are</a></li>
											<li><a href="why-they-are-here.html">Why they are here</a></li>
											<li><a href="training.html">Training</a></li>
											<li><a href="growth.html">Growth</a></li>
										</ul>
									</li>
									<li><a href="our-students.html">Our Students</a>
										<ul>
											<li><a href="spotlight.html">Spotlight</a></li>
											<li><a href="small-kids.html">Small kids</a></li>
											<li><a href="big-kids.html">Big kids</a></li>
											<li><a href="college-kids.html">College kids</a></li>
											<li><a href="meet-solomon.html">Meet Solomon</a></li>
										</ul>
									</li>
									<li><a href="changchun.html">Changchun</a>
										<ul>
											<li><a href="changchun.html">Overview of the City</a></li>
											<li><a href="tourism.html">Tourism</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
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

	

	<div class="first-widget parallax" id="contact">
		<div class="parallax-overlay">
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
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<br><br>

	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<div class="contact-wrapper">
							<h1>Get In Touch With Us</h1>
							<p>Get more infromation or send us your CV for employment</p>
							<p>If you are interested in coming to China to work as a teacher please contact us via email or if you are currently in China you can call the number listed below.  Please note the number listed is English ONLY.</p>
							<p>Please <a href="../teach-in-china/how-to-do-it.html">check our website</a> for information on what you will need in order to work and teach in China.</p>
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
									<div class="label">Phone Number:</div>
									<div class="field">			
										<input type="text" id="phone" name="phone" placeholder="enter your phone number here" title="Please enter your phone number" class="required phone" aria-required="true" required>
									</div>
									<div class="label">Comments:</div>
									<div class="field">			
										<textarea id="comment-content" name="content" placeholder="enter your comments here"></textarea>			
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
						<p class="larger-text">Interested in teaching English in China? Go ahead and go through the <a href="/pdfs/check-list.pdf">Check-List</a> to make sure you're on track!</p>
					</div> <!-- /.col-md-8 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.static-info-project -->
		
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="footer-nav clearfix">
							<ul class="footer-menu">
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html">Teach In China</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="our-teachers.html">Our Teachers</a></li>
								<li><a href="our-students.html">Our Students</a></li>
								<li><a href="changchun.html">Changchun</a></li>
								<li><a href="contact.html">Contact</a></li>
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

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>
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