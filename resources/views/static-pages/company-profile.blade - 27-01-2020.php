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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- //web-fonts -->

</head>

<body style="background:#fff;">

    @include("static-pages.header")

      <!-- inner banner -->
      <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Company</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
<!---728x90--->

<!-- about -->
<div class="about" id="about" style="background:#fff;">
    <div class="container">
    <!---728x90--->
    <div class="w3l-grids-about">
            <div class="col-md-5 w3ls-ab-right"><br>
                <p class="abt-para" style="text-align:inherit;">{{@$customer_details->company_description}} </p>
            </div>
            <div class="col-md-7 w3ls-agile-left">
                <div class="w3ls-agile-left-info">
                    <h4>Company Name</h4>
                    <p>{{@$customer_details->company}}</p>
                </div>
                <div class="w3ls-agile-left-info">
                    <h4>Company Type</h4>
                    <p>{{@$customer_details->company_type}}</p>
                </div>
                <div class="w3ls-agile-left-info">
                    <h4>No. of Employee</h4>
                    <p>{{@$customer_details->number_of_employees}}</p>
                </div>
                <!-- <div class="w3ls-agile-left-info">
                    <h4>Email Address</h4>
                    <p><a href="mailto:{{@$customer_details->company}}">{{@$customer_details->company}}</a></p>
                </div> -->
                <div class="w3ls-agile-left-info">
                    <h4>Address</h4>
                    <p>{{@$customer_details->address}}</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!---728x90--->
        </div>
    </div>
<!-- //about-bottom -->


        <!-- /education -->
  
        <!-- <div class="education" id="education" style="background: #f9f9f9;">
            <div class="container">
            <div class="col-md-12 education-w3l">
                    <div class="education-agile-grids">
                    <div class="education-agile-w3l">
                        <div class="education-agile-w3l-year">
                            <h4>01</h4>
                            <h6>Services Name</h6>
                        </div>
                        <div class="education-agile-w3l-info">
                            <h4>Services 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                                .</p>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="education-agile-w3l two">
                        <div class="education-agile-w3l-year">
                            <h4>02</h4>
                            <h6>Services Name</h6>
                        </div>
                        <div class="education-agile-w3l-info">
                            <h4>Services 2</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                                .</p>                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="education-agile-w3l">
                        <div class="education-agile-w3l-year">
                            <h4>03</h4>
                            <h6>Services 3</h6>
                        </div>
                        <div class="education-agile-w3l-info">
                            <h4>Services 3</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                                .</p>                        </div>
                        <div class="clearfix"></div>
                    </div> 
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div> -->
<!-- //education -->
<div class="education" id="education" style="background: #f9f9f9;">
    <div class="container">
    <div class="col-md-12 education-w3l">
            <div class="education-agile-grids">
            @if(count($services)!=0)
            @foreach($services as $key_services =>$value_services)
            <div class="education-agile-w3l">
                <div class="education-agile-w3l-year">
                    <h4>{{$key_services+1}}</h4>
                    <h6>{{$value_services['services_name']}}</h6>
                </div>
                <div class="education-agile-w3l-info">
                    <h4>{{$value_services['services_heading']}}</h4>
                    <p>{{$value_services['services_description']}}</p>
                    
                </div>
                <div class="clearfix"></div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
			<!-- banner -->
				<div class="banner">
					<div class="banner-w3lsinfo" style="    background: #c9c9c9;">
                       
						<div class="container">
							<div class="col-md-4 header-w3left">
								<img src="{{url('public/company_doc/')}}" alt=""/>
								<div class="header-imgtext-w3ls">
									<h1>heading</h1> 
								</div>
							</div>
							<div class="col-md-8 header-w3right"> 
								<h3 class="agileits-title" style="color:#000;">Description</h3>
								<!---728x90--->

								<div class="profile-agileinfo"> 
									<p style="font-size: 18px;color: #000;">juiin</p>
									
								</div>
							</div>
							<div class="clearfix"> </div>
                        </div>
                        <hr>
                      
<!-- 
                        <div class="container">
							<div class="col-md-4 header-w3left">
								<img src="https://images.unsplash.com/photo-1535498730771-e735b998cd64?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt=""/>
								<div class="header-imgtext-w3ls">
									<h1>Product Name 2</h1> 
								</div>
							</div>
							<div class="col-md-8 header-w3right"> 
								<h3 class="agileits-title">Description</h3>
								<!---728x90

								<div class="profile-agileinfo"> 
									<p style="font-size: 18px;color: #000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet sem sit amet dolor luctus pellentesque. Pellentesque eleifend tellus at interdum elementum. Nam egestas molestie elit. Vivamus sed accumsan quam, a mollis magna. Nam aliquet eros eget sapien consequat tincidunt at vel nibh. Duis ut turpis mi. Duis nec scelerisque urna, sit amet varius arcu. Aliquam aliquet sapien quis mauris semper suscipit. Maecenas pharetra dapibus posuere. </p>
								</div>
							</div>
							<div class="clearfix"> </div>
                        </div> -->

					</div>
				</div>
				<!-- //banner --> 



                @include("static-pages.footer")



</body>

</html>