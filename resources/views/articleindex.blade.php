<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uthaan</title>
        <link rel="icon" href="1.png">
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="blog-css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="blog-css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
         <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="blog-css/owl.carousel.min.css">
    <link rel="stylesheet" href="blog-css/owl.theme.default.min.css">
    <link rel="stylesheet" href="blog-css/magnific-popup.css">

    <link rel="stylesheet" href="blog-css/aos.css">

    <link rel="stylesheet" href="blog-css/ionicons.min.css">

    <link rel="stylesheet" href="blog-css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="blog-css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="blog-css/icomoon.css">
        <!-- -->
        <link rel="stylesheet" href="blog-css/blog-style.css" type="text/css">
    <style>
        #HR{
            visibility: hidden;
        }
        </style>
        <style type="text/css">
html {
        overflow-x:hidden ;
}
</style>
</head>
    
<body>
     <nav class="nav navbar-default navbar-fixed-top">
     <div class="container">
     <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
					<span style="background-color: aqua" class="icon-bar"></span>
					<span style="background-color: aqua" class="icon-bar"></span>
					<span style="background-color: aqua" class="icon-bar"></span>
                        </button>
          <div>
             <a href="/" class="page-scroll"><img src="{{ URL::asset('img/uthaan.png') }}" id="uthaanlogo"></a>
         </div>
         </div>
         <div class="collapse navbar-collapse" id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">
                         <li class="active"><a href="/">Home</a></li>
                        <li><a href="/about" class="page-scroll"> About us </a></li>
                         <li><a href="/#events"class="page-scroll"> Events </a></li>
                        <li><a href="/shows"class="page-scroll"> Shows </a> </li>
                        <li><a href="/article"class="page-scroll"> Articles </a></li> 
                        <li><a href="/interview" class="page-scroll"> Interviews </a></li>
                        <li><a href="/gallery" class="page-scroll"> Gallery </a></li>
                         <li><a href="/#contact" id="contactus" class="contactus"> Contact us </a></li>
                         @guest<li><a href="/login" class="page-scroll">Login</a></li>@endguest
                         @auth<li><a href="/login" class="page-scroll">Logout</a>@endauth
                        </ul>
                </div>          
         </div>
    </nav>  
    <div class="hero-wrap js-fullheight" style="background-image: url('images/portfolio/05.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Articles</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Articles</h1>
          </div>
        </div>
      </div>
    </div>
   @if(count($articles)>0) 
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8">
            @foreach($articles as $article)
    				<div class="row">
    					<div class="col-md-12">
    						<div class="blog-entry ftco-animate">
    							<a href="single-blog.html" class="img" style="background-image: url({{$article->image1}});"></a>
    							<div class="text pt-2 mt-5">
			              <h3 class="mb-4"><a href="/article/{{$article->id}}">{{$article->heading}}</a></h3>
			              <div class="author mb-4 d-flex align-items-center">
			            		<div class="ml-3 info">
			            			<span>Written by</span>
			            			<h3><a>{{$article->writer}}</a><br><span>{{$article->created_at->format('F j, Y')}}</span></h3>
			            		</div>
			            	</div>
			              <div class="meta-wrap d-md-flex align-items-center">
			              	<div class="half">
				              	<p><a href="/article/{{$article->id}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Continue Reading</a></p>
                        @auth<p><a href="/admin/articleedit/{{$article->id}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Edit</a></p>@endauth
                        @auth<p><a href="/admin/articledelete/{{$article->id}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Delete</a></p>@endauth


			              	</div>
			              </div>
			            </div>
    						</div>
    					</div>
    				</div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    @endif
    <section class="contact-area">
        <div class="container">
            <div class="row">
                    <div class="text-center contact-content">
                        <div class="col-md-3">
                        <h6>ABV-Indian Institute of Information Technology and Management
Morena Link Road, Gwalior- 474015 </h6>
                        </div>
                        <div class="col-md-3"  style="padding-top: 20px;">
                        <h6>UTHAAN Cell
                         Room no. : 211
                         Block : A</h6>
                        </div>
                        <div class="col-md-3">
                        <h6>contact@uthaan.org</h6>
                        <h6>+91 8989738932<span>|</span>+91 8317057596</h6>
                            </div>
                        <div class="contact-social col-md-3" style="padding-bottom: 20px;">
                            <ul>
                            <li><a class="hover-target" href="https://www.facebook.com/uthaaniiitmg/" target = "_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" href="https://www.instagram.com/uthaaniiitm/" target = "_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="hover-target" href="https://www.youtube.com/channel/UCcNvKCjKaxqnPX09IXcCKIg " target = "_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<footer>
<p>Developed and Maintained by-</p>
  <div class = "developer">
        <h4><a href = "https://www.linkedin.com/in/ashray-gupta-2509b988/" target = "_blank">Ashray Gupta</a></h4>
        <h4><a href = "https://www.linkedin.com/in/aditi-singh-15230b16b/" target = "_blank">Aditi Singh</a></h4>
        <h4><a href = "https://www.linkedin.com/in/shivam-agrawal-a4a414181/" target = "_blank">Shivam Agarwal</a></h4>
  </div>
</footer>
     <script src="blog-js/jquery.min.js"></script>
  <script src="blog-js/jquery-migrate-3.0.1.min.js"></script>
  <script src="blog-js/popper.min.js"></script>
  <script src="blog-js/bootstrap.min.js"></script>
  <script src="blog-js/jquery.easing.1.3.js"></script>
  <script src="blog-js/jquery.waypoints.min.js"></script>
  <script src="blog-js/jquery.stellar.min.js"></script>
  <script src="blog-js/owl.carousel.min.js"></script>
  <script src="blog-js/jquery.magnific-popup.min.js"></script>
  <script src="blog-js/aos.js"></script>
  <script src="blog-js/jquery.animateNumber.min.js"></script>
  <script src="blog-js/bootstrap-datepicker.js"></script>
  <script src="blog-js/jquery.timepicker.min.js"></script>
  <script src="blog-js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="blog-js/google-map.js"></script>
     <script  type="text/javascript" src="js/wow.js"></script>
  <script src="blog-js/main.js"></script>   
      <script type="text/javascript" src="js/logic.js"></script>
    
    
    </body>
</html>