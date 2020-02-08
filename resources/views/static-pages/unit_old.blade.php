<!DOCTYPE html>
<html lang="en">

<head>
    <title>jiada</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!--// Meta tag Keywords -->

    <!-- Recent Trips section css files-->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/owl.carousel.css')}}" type="text/css" media="all">
    <link href="{{url('public/static-pages-assets/css/owl.theme.css')}}" rel="stylesheet">
    <!-- //Recent Trips section css files -->

    <!-- Testimonials -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/flexslider.css')}}" type="text/css" media="screen" />
    <!-- //Testimonials -->

    <!-- css files -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{url('public/static-pages-assets/css/font-awesome.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gabriela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">

    <!-- //web-fonts -->

</head>

<body>

    @include("static-pages.header")

    <!-- Shop -->
    <div class="container">
    <div class="innerf-pages section" style="padding: 2em;">
        <!--search-->
        <div class="col-md-12" id="searchbar">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" style="    width: 96%;">
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Go</button>  
                 </div>
              </div>
        </div>
        <!--end of search-->
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<!-- grid left -->
				<div class="side-bar col-lg-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							Industry</h3>
						<ul style="height: 100px;overflow-y: scroll;">
							<li>
								<input type="checkbox" class="checked" name="cat1" id="cat1">
								<label for="cat1">Automobile</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat2" id="cat2">
								<label for="cat2">Banking</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat3" id="cat3">
								<label for="cat3">Education</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat4" id="cat4">
								<label for="cat4">Gov.</label>
                            </li>
                            
							<li>
								<input type="checkbox" class="checked" name="cat1" id="cat1">
								<label for="cat1">Insurance services</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat2" id="cat2">
								<label for="cat2">Hi-Tech</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat3" id="cat3">
								<label for="cat3">Manufacturing</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="cat4" id="cat4">
								<label for="cat4">Retail</label>
                            </li>
                            <li>
								<input type="checkbox" class="checked" name="cat4" id="cat4">
								<label for="cat4">Telecom</label>
                            </li>
                            <li>
								<input type="checkbox" class="checked" name="cat4" id="cat4">
								<label for="cat4">Utilities</label>
                            </li>
                            

						</ul>
					</div>
				
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Annual Revenue (in Crore Rs.)</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="size1" id="size1">
								<label for="size1">0 - 1cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size2" id="size2">
								<label for="size2">1 - 5cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size3" id="size3">
								<label for="size3">5 - 100cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size4" id="size4">
								<label for="size4">100 - 500cr.</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="size5" id="size5">
								<label for="size5">500+</label>
							</li>
						</ul>
					</div>
                    <!-- //discounts -->
                    
                    	<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Company Size</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="arr1" id="arr1">
								<label for="arr1">10 - 50</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr2" id="arr2">
								<label for="arr2">50 - 100</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr3" id="arr3">
								<label for="arr3">100 - 200</label>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- Binding -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Company Type</h3>
						<div class="d-flex">
							<ul>
								<li>
									<input type="checkbox" class="checked" name="color1" id="color1">
									<label for="color1">LTD</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color2" id="color2">
									<label for="color2">LLP</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color3" id="color3">
									<label for="color3">PROPRITERSHIP</label>
								</li>
								
							</ul>
						</div>
					</div>
                    <!-- //Binding -->		
                    
                    <!-- JIADA Region -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">JIADA Region</h3>
						<div class="d-flex">
							<ul>
								<li>
									<input type="checkbox" class="checked" name="color1" id="color1">
									<label for="color1">Adityapur</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color2" id="color2">
									<label for="color2">Bokaro</label>
								</li>
								<li>
									<input type="checkbox" class="checked" name="color3" id="color3">
									<label for="color3">Dhanbad</label>
								</li>
								
							</ul>
						</div>
					</div>
					<!-- //JIADA Region -->		
				</div>
                <!-- //grid left -->



            <div class="col-md-9" style="margin-top: -1em;float:right;width: 70%;">
            <div class="job-post-main row my-3">
                <div class="col-md-9 job-post-info text-left">
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                        <h4>
                            <a href="http://itscient.com/automobile">Automobile</a>
                        </h4>
                        <p class="my-2">Company Name goes here</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> Comera</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>Adityapur</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i>30000 - 50000 / Annum</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/automobile" class="aply-btn ">View Profile</a>
                </div>
            </div>
            <!--//job2-->
            <!--/job3-->

             <div class="job-post-main row">
                <div class="col-md-9 job-post-info text-left">
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                        <h4>
                            <a href="http://itscient.com/banking-finance-and-insurance">
                                Banking, Finance and Insurance</a>
                        </h4>
                        <p class="my-2">Company Name goes here</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> Comera</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>Adityapur</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i>30000 - 50000 / Annum</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/banking-finance-and-insurance" class="aply-btn ">View Profile</a>
                </div>
            </div>
            <!--//job3-->
            <!--/job4-->

             <div class="job-post-main row mt-3">
                <div class="col-md-9 job-post-info text-left">
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                        <h4><a href="http://itscient.com/government">Goverment</a></h4>
                        <p class="my-2">Company Name goes here</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> Comera</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>Bistupur</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i>30000 - 50000 / Annum</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/government" class="aply-btn ">View Profile</a>
                </div>
            </div>
            <!--//job4-->
            <!--/job1-->

            <div class="job-post-main row mt-3">
                <div class="col-md-9 job-post-info text-left">
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                        <h4>
                            <a href="http://itscient.com/insurance">Insurance services</a>
                        </h4>
                        <p class="my-2">Company nName gose here</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> Comera</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>Bokaro</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i>30000 - 50000 / Annum</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/insurance" class="aply-btn ">View Profile</a>
                </div>
            </div>
            <!--//job1-->
            <!--/job2-->

            <div class="job-post-main row my-3">
                <div class="col-md-9 job-post-info text-left">
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                        <h4>
                            <a href="http://itscient.com/hi-tech">
                                Hi-Tech</a>
                        </h4>
                        <p class="my-2">Company Name goes here</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> Comera</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>Dhanbad</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i> 200000 - 100000 / Annum</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/hi-tech" class="aply-btn ">View Profile</a>
                </div>
            </div>
            <!--//job2-->
            <!--/job3-->

            <div class="job-post-main row">
                <div class="col-md-9 job-post-info text-left">
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                        <h4>
                            <a href="http://itscient.com/manufacturing">
                                Manufacturing</a>
                        </h4>
                        <p class="my-2">Company Name goes here</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> Chicago</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>Dhanbad</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i> 300000 - 500000 / Annum</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="http://itscient.com/manufacturing" class="aply-btn ">View Profile</a>
                </div>
            </div>
            <!--//job3-->
        
        </div>
       

            </div>
        </div>
    </div>
</div>




  
   
    <!-- footer start here -->
    <section class="footer-agile">
        <div class="container">
            <div class="footer-btm-agileinfo">
                <div class="col-md-6 col-xs-12 footer-grid w3social">
                    <h3>About us</h3>
                    <p class="footer-p1">JIADA, is responsible for the development of industrial areas in the State of Jharkhand. The administrative set up consists of a Head Office located at Ranchi and is supported by regional offices at Adityapur, Bokaro, Ranchi and Dumka. JIADA is responsible for acquisition of land, development of infrastructure facilities like road, drainage, water supply, public utilities, etc.</p>

                </div>
                <div class="col-md-3 col-xs-12 footer-grid">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="fa fa-phone"></i>+14 999 888 7773</li>
                        <li><i class="fa fa-fax"></i>+12 222 333 2365</li>
                        <li><i class="fa fa-map-marker"></i>Kmome St, NY 10002, Canada.</li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:example@mail.com">mail@example.com</a></li>
                        <li><i class="fa fa-globe"></i><a href="#">website@example.com</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid w3social">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="" class="scroll">About</a></li>
                        <li><a href="" class="scroll">Resource</a></li>
                        <li><a href="" class="scroll">Career</a></li>
                        <li><a href="" class="scroll">Contact Us</a></li>
                    </ul>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="footer-agilem">
                <div class="col-sm-8 col-xs-9 copy-w3lsright">
                    <p>JAIDA © 2019 IT-SCIENT </a>
                    </p>
                </div>
                <div class="col-sm-4 col-xs-6 social-w3licon">
                    <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- //footer end here -->

    <!-- js-scripts -->

    <!-- js -->
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assetsjs/bootstrap.js')}}"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

	<script src="{{url('public/static-pages-assets/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>



    <script src="{{url('public/static-pages-assets/js/owl.carousel.js')}}"></script>
    <!-- Recent Trips Script-->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoPlay: true,
                items: 3,
                itemsDesktop: [640, 5],
                itemsDesktopSmall: [414, 4]

            });

        });
    </script>
    <!-- //Recent Trips section Script-->
    <!-- //Recent Trips js file-->

    <!-- start-smoth-scrolling -->
    <script src="{{url('public/static-pages-assets/js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{url('public/static-pages-assets/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- start-smoth-scrolling -->

    <!-- Banner-js -->
    <script src="{{url('public/static-pages-assets/js/responsiveslides.min.js')}}"></script>
    <script>
        $(function() {
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- //Baneer-js -->

    <!-- script for fonts --
		<script>
		$(document).ready(function() {

		var fontSize = $(window).width()/50;
		$('body').css('font-size', fontSize);

		$(window).resize(function() {
		var fontSize = $(window).width()/50;
		$('body').css('font-size', fontSize);
		});

		});
		</script>
	<!-- //script for fonts -->

	<!-- //js-scripts -->
	


</body>

</html>