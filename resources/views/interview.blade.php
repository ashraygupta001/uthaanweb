<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uthaan</title>
        <link rel="icon" href="1.png">
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
         <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css')}}" />
         <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
         <link href="{{ URL::asset('css/owl.transitions.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Lobster&display=swap')}}" rel="stylesheet">
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Allura&display=swap')}}" rel="stylesheet">
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Courgette&display=swap')}}" rel="stylesheet">
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap')}}" rel="stylesheet">
        <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Courgette&display=swap')}}" rel="stylesheet">
        
        <!-- -->
         <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/plyr.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/single-post.css') }}" />
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
     <section class="blog-content-area section-padding-0-100" style="margin-top: 60px;">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12">

                    <!-- Post Details Area -->
                    <div class="single-post-details-area">
                        <div class="post-content">

                            <div class="text-center mb-50">
                                <p class="post-date">{{$interview->created_at->format('F j, Y')}}</p>
                                <h2 class="post-title">{{$interview->heading}}</h2>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#"><span>by</span><br><br>{{$interview->reporters}}</a>
                                </div>
                            </div>

                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <img src="{{URL::asset("$interview->image1")}}" alt="">
                            </div>

                            <!-- Post Text -->
                            <div class="post-text">
                                <!-- Share -->
                                
                                {!!$interview->content!!}
                               
                                <div class="row">
                                    @if($interview->image2!=NULL)
                                    <div class="col-12 col-md-6">
                                        <img class="mb-30" src="{{URL::asset("$interview->image2")}}" alt="">
                                    </div>
                                    @endif
                                    @if($interview->image3!=NULL)
                                    <div class="col-12 col-md-6">
                                        <img class="mb-30" src="{{URL::asset("$interview->image3")}}" alt="">
                                    </div>
                                    @endif
                                </div>




                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
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
    </section>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script  type="text/javascript" src="{{URL::asset("js/bootstrap.min.js")}}"></script>
     <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
     <script  type="text/javascript" src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
     <script  type="text/javascript" src="{{URL::asset('js/wow.js')}}"></script>
     <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/mousescroll.js')}}"></script>
    <script src="{{URL::asset('js/smoothscroll.js')}}"></script>
    <script src="{{URL::asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{URL::asset('js/plyr.js')}}"></script>
   <script src="{{URL::asset('js/anime.min.js')}}"></script>
     <script src="{{URL::asset('js/swiper.min.js')}}"></script>
    <script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
     <script type="text/javascript" src="{{URL::asset('js/logic.js')}}"></script> 
</body>
</html>