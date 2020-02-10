<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
	
    <!-- css files -->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="{{asset('public/assets/css/font-awesome-login.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('public/assets/css/style-login.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- //css files -->

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
.btn-danger {
    color: #fff;
    background-color: #2196F3;
    border-color: #2196F3;
    padding: 0.7em;
    border-radius: 22px;
}
hr.new2 {
  border-top: 1px dashed #fff;
}


#overlay {
  position: relative;
}

.w3_info {
    flex-basis: 50%;
    margin-top: 10% !important;
}

#particle {
	
	 background: url(public/images/bg-img.jpg) no-repeat;
    background-size: cover;
	
  
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
}

.wrapper {
    margin: auto;
    /* border-radius: 20px; */
    text-align: center;
    padding: 8% 0px;
        background: #292023;
		background: rgba(39, 39, 39, 0.4);
	border: solid 2px #777070;
    webkit-box-shadow: 10px 3px 66px -19px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 3px 66px -19px rgba(0,0,0,0.75);
    /* box-shadow: 10px 3px 66px -19px rgba(0,0,0,0.75); */
}

.btn-danger {
    color: #fff;
       background-color: #3e3635;
    border-color: #7e7877;
    padding: 0.7em;
    border-radius: 22px;
}

.w3ls-form a {
    display: block;
    text-align: right;
    margin: 15px 0px;
    color: #fff;
}

.btn-danger:hover {
    color: #fff !important;
    background-color: #16469d !important;
    border-color: #16469d !important;
}
    
    </style>


</head>
<body>
    <div id="particle"></div>

<div class="signupform">
	<div class="container-fluid">
        <div class="row">
         <!--<div class="col-md-6">
           <center><img src="public/images/image4.jpg" alt="" style="width: 90%; margin-top: 3%;">  </center>
        </div>-->


 <div class="col-md-3"> </div>
 
        <div class="col-md-6">  
		    <div class="w3_info">
			
              <div class=" header-side"  style="margin-top: 4em;">
                      <!--<center><img src="public/images/logo.png" alt="" style="width:20%;">  </center>-->

                   
                </div>
               
                <div class="copy">
                    <p>Sandhu Tubes
                    </p>
                </div>
               
                <!---728x90--->
               <div class="wrapper">
                   
                    <div class="w3ls-form">
                        <form class="cmxform form-horizontal tasi-form" id="loginForm" method="POST" action="{{ route('login') }}"  novalidate="novalidate">
                            @csrf
                            <label>Username</label>
                            <input  id="username" type="text" class="form-control input-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" required="" aria-required="true" autofocus placeholder="Username">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <p style="color:yellow;margin-top:1em;">{{ $message }}</p>
                            </span>
                            @enderror
                            <label>Password</label>
                            <!-- <input type="text" name="password" placeholder="Password" required /> -->
                            <input  type="password" id="password"  class="form-control input-lg @error('password') is-invalid @enderror" name="password" required="" aria-required="true" autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p style="color:yellow;margin-top:1em;">{{ $message }}</p>
                            </span>
                            @enderror
                            <!--<a href="#" class="pass">Forgot Password ?</a>-->
                            <br>
                            <!-- <input type="submit" value="Log In" /> -->
                            <button class="btn btn-danger btn-block" type="submit">Login</button >   

                      <div class="row">
                                        <br>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="rememberPass" style="margin: 12px 0 0 2px;">
                                                  <span class="mdl-switch__label" style="text-transform: capitalize;font-weight: normal;font-size: 14px;">Remember</span>
                                        <input type="checkbox" id="rememberPass" class="mdl-switch__input" style="vertical-align: text-bottom;">
                                      
                                        </label>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" text-align:right;">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>							

                        </form>

                    </div>
                </div>
                <br>
               
                <center><a href="{{url('/')}}"><button class="btn btn-secondary" type="button" style="background: #574442;color: #fff;">Back to Home</button ></a></center>

           
                <!---728x90--->
	
     

           
		<!-- //main content -->
	</div>
</div>
</div>
</div>
</div>

	
</body>
</html>



<script type="text/javascript">

    $(document).ready(function(){       
        $("#login").click(function(){  

            var username = $("#username").val();
            var password = $("#password").val();
         //      var recaptcha = $("#recaptcha").val();
         if(username.trim()==''){                
            $("#username").css("border","1px solid red");
            $("#username").focus();
            return false;
        }else{
            $("#username").css("border","");
        }       

        if(password==''){               
            $("#password").css("border","1px solid red");
            $("#password").focus();
            return false;
        }else{
            $("#password").css("border","");
        }       


        if(username.trim()!='' && password!=''){    
            $("#loader1").css("display","block");   
        }   

    })
    });

</script>
<script>
var options = {"particles":{"number":{"value":99,"density":{"enable":true,"value_area":552.4033491425909}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":3},"image":{"src":"img/github.svg","width":70,"height":100}},"opacity":{"value":1,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":2,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":1.5782952832645452,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false};
particlesJS("particle", options);
</script>