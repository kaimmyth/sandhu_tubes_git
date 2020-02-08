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
    <div class="container-fluid" style="width: 80%;">
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
                        @foreach($industries as $industry)
							<li>
								<input type="checkbox" class="checked" name="industry_name[]" onclick="ajaxFunc()" value="{{$industry->id}}">
								<label for="industry_name">{{$industry->industires_name}}</label>
							</li>
						@endforeach	
                            

						</ul>
					</div>
				
					<!-- discounts -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Turn Over(in Crore Rs.)</h3>
						<ul>
							<li>
								<input type="radio" class="checked" name="turn_over[]" id="turn_over1" onclick="ajaxFunc()" value="0-10">
								<label for="size1">0 - 10cr.</label>
							</li>
							<li>
								<input type="radio" class="checked" name="turn_over[]" id="turn_over2" onclick="ajaxFunc()" value="10-50">
								<label for="size2">10 - 50cr.</label>
							</li>
							<li>
								<input type="radio" class="checked" name="turn_over[]" id="turn_over3" onclick="ajaxFunc()" value="50-100">
								<label for="size3">50 - 100cr.</label>
							</li>
							<li>
								<input type="radio" class="checked" name="turn_over[]" id="turn_over4" onclick="ajaxFunc()" value="100-500">
								<label for="size4">100 - 500cr.</label>
							</li>
							<li>
								<input type="radio" class="checked" name="turn_over[]" id="turn_over5" onclick="ajaxFunc()" value="500-1000">
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
								<input type="radio" class="checked" name="company_size[]" id="company_size1" value="50-100" onclick="ajaxFunc()">
								<label for="arr1">50-100</label>
							</li>
							<li>
								<input type="radio" class="checked" name="company_size[]" id="company_size2" value="100-150" onclick="ajaxFunc()">
								<label for="arr2">100-150</label>
							</li>
							<li>
								<input type="radio" class="checked" name="company_size[]" id="company_size3" value="150-200" onclick="ajaxFunc()">
								<label for="arr3">150-200</label>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- Binding -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Company Type</h3>
						<div class="d-flex">
							<ul>
                              @foreach($company_types as $company_type)
								<li>
									<input type="radio" class="checked" name="comp_type[]" id="comp_type" value="{{$company_type->id}}" onclick="ajaxFunc()">
									<label for="color1">{{$company_type->company_type}}</label>
								</li>
                               @endforeach

								
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
									<input type="radio" class="checked" name="location_zone[]" id="location_zone" value="Adityapur" onclick="ajaxFunc()">
									<label for="color1">Adityapur</label>
								</li>
                                <li>
									<input type="radio" class="checked" name="location_zone[]" id="location_zone" value="Dhanbad" onclick="ajaxFunc()">
									<label for="color1">Dhanbad</label>
								</li>
                                <li>
									<input type="radio" class="checked" name="location_zone[]" id="location_zone" value="Jamshedpur" onclick="ajaxFunc()">
									<label for="color1">Jamshedpur</label>
								</li>
							</ul>
						</div>
                    </div>
				</div>
					<!-- //JIADA Region	


                    <div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">Waste Materials</h3>
						<div class="d-flex">
							<ul>
                           @foreach($materials as $material)
								<li>
									<input type="checkbox" class="checked" name="material_name[]" id="material_name" value="{{$material->id}}" onclick="ajaxFunc()">
									<label for="color1">{{$material->material_name }}</label>
								</li>
                             @endforeach  
								
							</ul>
						</div>
					</div>	
				</div>
                <!-- //grid left -->



            <div class="col-md-9" style="margin-top: -1em; width: 70%">


           
            <div class="job-post-main row my-3" id="company_details">
                @foreach($customer_details as $key_comp => $value_comp)
                <div class="col-md-9 job-post-info text-left" style="margin-top:10px;" >
                    <div class="job-post-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="job-single-sec">
                    <h4>
                            <a href="http://itscient.com/automobile"></a>
                        </h4>
                        <p class="my-2">{{$value_comp['company']}}</p>
                        <ul class="job-list-info">
                            <li>
                                <i class="fas fa-briefcase"></i> {{$value_comp['company_type']}}</li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>{{$value_comp['address']}}</li>
                            <li>
                                <i class="fas fa-rupee-sign"></i>{{$value_comp['turn_over']}}</li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 job-single-time text-right">
                    <a href="{{url('comapny-profile/'.$value_comp['id'])}}" class="aply-btn ">View Profile</a>
                </div>
                @endforeach
            </div>
            {{ $customer_details->links() }}

            <!--//job2-->
            <!--/job3-->

        </div>
       

            </div>
        </div>
    </div>
</div>

@include("static-pages.footer")
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

    
    
<script>
function ajaxFunc(){
var industry_ids = $("input[name='industry_name[]']:checked").map(function(){
    return $(this).val();
}).get();
var company_type_ids = $("input[name='comp_type[]']:checked").map(function(){
    return $(this).val();
}).get();
var company_size=$("input[name='company_size[]']:checked").map(function(){
    return $(this).val();
}).get();
var turn_over=$("input[name='turn_over[]']:checked").map(function(){
    return $(this).val();
}).get();
var location_zone=$("input[name='location_zone[]']:checked").map(function(){
    return $(this).val();
}).get();
// alert(turn_over);
var material_ids = $("input[name='material_name[]']:checked").map(function(){
    return $(this).val();
}).get();
if((industry_ids!="") || (company_type_ids!="") || (material_ids!="") ||(turn_over!="")||(location_zone!="")||(company_size!=""))
{
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});
$.ajax({
    url:"{{url('unit-listing/industry-filter')}}",
    data: {'industry_ids':industry_ids,'company_type_ids':company_type_ids,'material_ids':material_ids,'company_size':company_size,'location_zone':location_zone,'turn_over':turn_over},
    method:"GET",
    contentType:'application/json',
    dataType:"json",
    beforeSend: function(data){
        $(".loader").fadeIn(300);
    },
    error:function(xhr){
        alert("error"+xhr.status+","+xhr.statusText);
        $(".loader").fadeOut(300);
    },
    success:function(data){
            $("#company_details").html("");
            for(var i=0;i<data.length;i++)
            {
                $("#company_details").append(`<div class="col-md-9 job-post-info text-left">
                <div class="job-post-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="job-single-sec">
                <h4>
                    <a href="http://itscient.com/automobile"></a>
                    </h4>
                   
                    <h4 class="my-2">`+data[i].company+`</h4>
                    <ul class="job-list-info">
                        <li>
                            <i class="fas fa-briefcase"></i> `+data[i].company_type+`</li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>`+data[i].address+`</li>
                        <li>
                            <i class="fas fa-rupee-sign"></i>`+data[i].turn_over+`/ Annum</li>
                    </ul>
                    
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 job-single-time text-right">
                <a href="{{url('comapny-profile/`+data[i].id+`')}}" class="aply-btn ">View Profile</a>
            </div><br><br><br>`);
            }
            $(".loader").fadeOut(300);
    }
});
}
else{
    $("#company_details").html("No Record Found !!");
}
}
    </script>

