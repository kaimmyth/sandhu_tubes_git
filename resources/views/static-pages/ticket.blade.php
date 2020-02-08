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
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gabriela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overlock&display=swap" rel="stylesheet">

    <!-- //web-fonts -->

</head>
<style>
		
	.img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
		/* display: block; */
		/* max-width: 105%; */
		height: 500px;
		width: 500px;
	}

	img {
		border: 0px solid #ddd;
		border-radius: 4px;
		padding: 5px;
		width: 150px;
	}
	@media (max-width: 1280px){

		.top-nav-text {
			width: 14%;
			margin-left: 2em;
		}
	}
	.agileits-location select {
    width: 94%;
    border: #9e9e9e 1px solid;
}
h3.heading:before {
    content: '';
    background: #3b5998;
    height: 3px;
    width: 9%;
    bottom: -34%;
    left: 45%;
    position: absolute;
}
.form-control {
	width: 95%;
}
.form_w3layouts {
    background: #ffffff;
    padding: 3em;
    border: 1px solid #3b5998;
    box-shadow: #d2dcf0 1px 2px 9px;
    min-height: 450px;
}
</style>

<body>

    @include("static-pages.header")
		<!--start of Ticket -->
	<section class="ticket" style="background: #ffffff; padding: 3em;">
		<div class="container-fluid">
			<div class="col-md-7">
				<div class="form_w3layouts">
				 <h3 class="heading" style="color: #000;font-size: 22px;margin-bottom: 19px;">Create Your Request</h3>
				 @if(@Session::get('user_data_message')!="")
				 <?php $message=Session::get('user_data_message');
					$user_display_mess="Your Request  No Is "." ".$message; 
					session()->forget('user_data_message');?>
					{{$user_display_mess}}
				 @endif
                 <form action="{{ url('add_ticket_by_user') }}" method="POST" id="FormValidation" enctype="multipart/form-data">
                    @csrf()
                    <div class="agileits-location agileinfo-bottom wthree-rating">
								<label>Name</label>
								<input type="text" class="form-control" name="requester_name" id="" required="" placeholder="Customer name"/>
							</div>
							
							<div class="agileits-location agileinfo-bottom wthree-budget">
								<label>Email</label>
								<input type="email" class="form-control" name="email" id="" required="" placeholder="Customer email"/>
							</div><br><br>
							
							<div class="agileits-location agileinfo-bottom wthree-rating">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" id="" required="" placeholder="eg. +91-0000 000 000"/>
							</div>

							


							<div class="agileits-location agileinfo-bottom wthree-rating">
								<label>Description</label>
								<textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" style="width: 94%;"></textarea>							
							</div>
							<!-- <div class="agileits-location agileinfo-bottom wthree-budget">
								<label>Revolution</label>
								<textarea class="form-control" id="description" name="description" rows="3" placeholder="Revolution" style="width: 94%;"></textarea>
							</div>						 -->
							
							<div class="agileits-location agileinfo-bottom wthree-rating" style="margin-top: 0em;">
								<label>Choose File</label>
								<input type="file" class="form-control" name="attachment" id=""  style="width: 94%;"/>
							</div>

						
							<div class="submit" style="    margin-top: 31px;">
								<input type="submit" value="Submit Request">
							</div>
						
						</form>
					</div>			
				</div>
		<div class="col-md-5">
			<img src="{{url('public/static-pages-assets/images/banner.png')}}" class="img-responsive" alt="Responsive image" height="500" />
		</div>
	</div>
	</section> 
    <!--end  of Ticket -->
    

    @include("static-pages.footer")
</body>

</html>