<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sandhu Tubes</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <!--// Meta tag Keywords -->

    <!-- Recent Trips section css files-->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/owl.carousel.css')); ?>" type="text/css" media="all">
    <link href="<?php echo e(url('public/static-pages-assets/css/owl.theme.css')); ?>" rel="stylesheet">
    <!-- //Recent Trips section css files -->

    <!-- Testimonials -->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/flexslider.css')); ?>" type="text/css" media="screen" />
    <!-- //Testimonials -->

    <!-- css files -->

    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/bootstrap.css')); ?>">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/style.css')); ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('public/static-pages-assets/css/font-awesome.css')); ?>">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gabriela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">

</head>

<body>

    <?php echo $__env->make("static-pages.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	

    <!-- Slider -->
    <section class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <!-- <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="banner-dott">
                            <div class="container">
                                <div class="slider-info">
                                    <h2>Travel is the only thing</h2>
                                    <h4>You buy, makes you richer</h4>
                                    <div class="w3ls-button">
                                        <a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
                                    </div>
                                    <div class="bannergrids">
                                        <div class="col-md-4">
                                            <div class="grid1">
                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                <p>lorem ipsum dolor sit amet consectetur adipiscing</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="grid1">
                                                <i class="fa fa-ship" aria-hidden="true"></i>
                                                <p>lorem ipsum dolor sit amet consectetur adipiscing</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="grid1">
                                                <i class="fa fa-bus" aria-hidden="true"></i>
                                                <p>lorem ipsum dolor sit amet consectetur adipiscing</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li>
                    <div class="w3layouts-banner-top">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>The best view comes after</h3>
								<h4>The hardest climb</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top3">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>Travel tends to magnify</h3>
								<h4>Human emotions</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>Travel brings power & love</h3>
								<h4>Back to your life</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top4">
                        <div class="banner-dott">
                            <div class="container">
                                <!-- <div class="slider-info">
								<h3>Don't call it a dream</h3>
								<h4>Call it a plan</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">About Our Road Travel</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-truck" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-ship" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="grid1">
											<i class="fa fa-bus" aria-hidden="true"></i>
											<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</div> -->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- //Slider -->

    <!-- About section -->
    <section class="about" id="mission" style="background:#fff;">
        <div class="container">
            <!-- <h3 class="heading">About Us</h3> -->
				<div class="col-md-12" style=" line-height: 28px;color: #212121;letter-spacing: .5px;font-size: 16px;text-transform: capitalize;padding-top: 1em;padding-bottom: 1em;font-family: 'Overlock', cursive;">
					<p>Registered in 2018 , Sandhu Tubes Pvt. Ltd. has made a name for itself in the list of top suppliers of in India. The supplier company is located in Ranchi, Jharkhand and is one of the leading sellers of listed products.
Sandhu Tubes Pvt. Ltd. is listed in Trade India's list of verified sellers offering supreme quality of etc. Buy in bulk from us for the best quality products and service.</p>
				</div>
            <!-- <div class="clearfix"></div> -->
        </div>
    </section>
	
	
	
	
	<section class="regional" id="regional-office" style="    background: #e0eaff;padding: 3em;">
		<div class="container-fluid">
            <div class="feature-grids row text-center">
                <div class="col-lg-3 gd-bottom one">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">Sandhu Tubes Office</h3><br>
                        <p> 25 & 26 Ph, A-20, 6, Adityapur - Kandra Hwy, Industrial Area, Gamharia, Jamshedpur, Jharkhand 832108<br></p>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">
                            Sandhu Tubes Office</h3><br>
                        <p> 1st Floor,  BIADA Bhawan Balidih,Bokaro Industrial Area, Bokaro Jharkhand, India</p>

                    </div>
                </div>
               <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">
                            Sandhu Tubes Office</h3><br>
                        <p> 1st Floor,  BIADA Bhawan Balidih,Bokaro Industrial Area, Bokaro Jharkhand, India</p>

                    </div>
                </div>
               <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd">
                        <span class="fa fa-map-marker" aria-hidden="true"></span>
                        <h3 class="mb-2">
                            Sandhu Tubes Office</h3><br>
                        <p> 1st Floor,  BIADA Bhawan Balidih,Bokaro Industrial Area, Bokaro Jharkhand, India</p>

                    </div>
                </div>
            </div>        
		</div>
	</section>
    <!--end of Regional Office -->

    
     <!--gallery section-->
     <section class="gallery" id="gallery" style="padding: 3em; background: #6e5e5c;">
        <div class="container">
            <h3 class="heading" style="color: #fff;">Gallery</h3>
            <div class="row">
                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g1.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g1.png')); ?>" alt="img" ></a>
                </div>

                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g2.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g2.png')); ?>" alt="img" ></a>
                </div>

                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g3.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g3.jpg')); ?>" alt="img" ></a>
                </div>

                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g4.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g4.jpg')); ?>" alt="img" ></a>
                </div>
				
				
                  <div class="hh" style=" width: 100%; float: left; margin-bottom: 15px;"></div>
                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g5.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g5.jpg')); ?>" alt="img" ></a>
                </div>

                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g6.png')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g6.png')); ?>" alt="img" ></a>
                </div>
				<div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g10.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g10.jpg')); ?>" alt="img" ></a>

                </div>

                <div class="col-md-3">
                    <a target="_blank" href="<?php echo e(url('public/static-pages-assets/images/g14.jpg')); ?>"><img src="<?php echo e(url('public/static-pages-assets/images/g14.jpg')); ?>" alt="img" ></a>
                </div>
				
				
            </div><!--rnd of row--><br>

            
           
           
        </div>
    </section>

     <!--end od gallery-->

     <!--start of career-->
     <!-- <section class="career" id="career" style="padding:1em;background: #488304;height: 54px;">
        <div class="containe-fluid">
            <div class="col-md-10">
                <h3 style="color: #fff; font-weight: 100;"><marquee>Brows for Job Opening</marquee></h3>
            </div>
            
        </div>
    </section> -->


     <!--end of career-->



    

    <!--start of contact us-->
    <section class="contact" id="contact" style="background:#fff;padding: 3em;">
        <div class="container">
            <div class="row contact_information">
                <div class="col-md-6 contact_left">
                    <div class="contact_border p-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14712.268101425832!2d86.1215579!3d22.7999802!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29d667963cd001b5!2sSandhu%20Tubes%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1581059478557!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="contact_right p-lg-5 p-4" style="padding: 3em;">
                        <form action="<?php echo e(url('/savecontact')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="w3_agileits_contact_left">
                                <h3 class="mb-3">Contact form</h3>
                                <input type="text" name="Name" placeholder="Your Name" required="">
                                <input type="email" name="Email" placeholder="Your Email" required="">
                                <input type="text" name="Phone" placeholder="Phone Number" required="">
                                <textarea placeholder="Your Message Here..." required=""></textarea>
                            </div>
                            <div class="w3_agileits_contact_right">
                                <button type="submit">Submit</button>
                            </div>
                            <!-- <div class="clearfix"> </div> -->
                        </form>
                    </div>
                </div>
              </div>
            </div>
    </section>

     <!--end of contact -->
     <?php echo $__env->make("static-pages.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</body>

</html><?php /**PATH C:\xampp\htdocs\sandhu_tubes\resources\views/static-pages/index.blade.php ENDPATH**/ ?>